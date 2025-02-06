<?php

namespace App\Controller\Front;

use App\Entity\Log;
use App\Entity\User;
use App\Helpers\Base;
use App\Entity\MailHistory;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class PasswordResetController extends BaseController
{

  /**
   * @Route("/password/reset", name="password.reset")
   */
  public function reset(Request $request, TranslatorInterface $translator, CsrfTokenManagerInterface $csrfTokenManager)
  {
    $user_email = $request->get('email');
    if ($user_email && Base::isValidEmail($user_email)) {
      // verify csrf token
      $csrfToken = new CsrfToken('password_reset', $request->get('_csrf_token'));
      if (!$csrfTokenManager->isTokenValid($csrfToken)) {
        return $this->json([
          'status' => 'error',
          'message' => $translator->trans("Jeton CSRF non valide")
        ]);
      }
      // check if user exists
      $em = $this->getDoctrine()->getManager();
      $user = $em->getRepository(User::class)->findOneBy(['email' => $user_email]);
      if ($user) {
        // generate password reset token
        $token = sha1(mt_rand(1, 90000) . 'SALT');
        // send email
        $em->getRepository(MailHistory::class)->log([
          'send_immediately' => true,
          'template' => 'password-reset',
          'receiver' => $user_email,
          'subject' => 'STJG - Réinitialiser le mot de passe',
          'variables' => [
            'user_email' => $user_email,
            'reset_link' => $this->generateUrl('password.new', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL)
          ]
        ]);
        // update user password token
        $user->setPasswordResetToken($token);
        $em->persist($user);
        $em->flush();
      } else {
        sleep(3); // delay the request for 3 seconds to prevent account guessing
      }
      return $this->json([
        'content' => $this->renderView('layout/modal/index.html.twig', [
          'title' => $translator->trans("Email envoyé"),
          'body' => $translator->trans("Si votre adresse e-mail existe dans notre base de données, vous recevrez un lien de récupération de mot de passe à votre adresse e-mail en quelques minutes")
        ])
      ]);
    }

    return $this->json([
      'content' => $this->renderView('layout/modal/form.html.twig', [
        'title' => $translator->trans("Réinitialiser le mot de passe"),
        'body' => $this->renderView('front/security/password-reset.html.twig'),
        'form_action' => '/password/reset',
        'submit_label' => $translator->trans("Envoyer")
      ])
    ]);
  }

  /**
   * @Route("/password/new/{token}", name="password.new")
   */
  public function new(
    Request $request, 
    UserPasswordEncoderInterface $encoder, 
    TranslatorInterface $translator, 
    CsrfTokenManagerInterface $csrfTokenManager
  ) {
    $token    = $request->get('token');
    $password = $request->get('password');
    $confirm  = $request->get('confirm');

    if ($request->isMethod('post') && $password && $confirm) {
      $redirect_to = $this->generateUrl('password.new', ['token' => $token]);
      // validate password
      if ($password != $confirm) {
        $this->addFlash('error', $translator->trans("Les deux mots de passe ne correspondent pas"));
        return $this->redirect($redirect_to);
      } else if (strlen($password) < 6) {
        $this->addFlash('error', $translator->trans("Le mot de passe doit contenir au moins 6 caractères"));
        return $this->redirect($redirect_to);
      }
      // check csrf token
      $csrfToken = new CsrfToken('password_new', $request->get('_csrf_token'));
      if (!$csrfTokenManager->isTokenValid($csrfToken)) {
        $this->addFlash('error', $translator->trans("Jeton CSRF non valide"));
        return $this->redirect($redirect_to);
      }
      // check if token valid
      $em = $this->getDoctrine()->getManager();
      $user = $em->getRepository(User::class)->findOneBy(['password_reset_token' => $token]);
      if (!$user) {
        $this->addFlash('error', $translator->trans("Le jeton de réinitialisation a expiré"));
        return $this->redirect($redirect_to);
      }

      // update user password
      $encoded = $encoder->encodePassword($user, $password);
      $user->setPassword($encoded);
      $user->setPasswordResetToken(null);
      $em->persist($user);
      $em->flush();

      // log activity
      $em->getRepository(Log::class)->store(
        $user->getId(),
        $user->getId(),
        'user',
        'password_reset'
      );
      $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
      $this->get('security.token_storage')->setToken($token);
      $this->get('session')->set('_security_main', serialize($token));

      return $this->redirect($this->generateUrl('reservations'));
    }

    return $this->render('front/security/password-new.html.twig');
  }
}