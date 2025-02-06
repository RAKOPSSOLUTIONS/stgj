<?php

namespace App\Controller\Front;

use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class SecurityController extends BaseController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $username_or_email = $authenticationUtils->getLastUsername();

        return $this->render('front/security/login.html.twig', [
            'username_or_email' => $username_or_email, 
            'error' => $error
        ]);
    }


    /**
     * @Route("/logout", name="logout", methods={"GET"})
     */
    public function logout()
    {
        // controller can be blank: it will never be executed!
    }

    /**
     * @Route("/signup", name="signup")
     */

    public function signup(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
    $user = new User();
    $form = $this->createForm(UserType::class, $user, ['user' => $user]);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Encode the password before saving it
        $user->setPassword(
            $passwordEncoder->encodePassword($user, $form->get('password')->getData())
        );

        // Persist the user in the database
        $entityManager = $this->getDoctrine()->getManager();
        //set user role
        $user->setStatus('inactive');
        $user->setRoles(['ROLE_USER']);
        $entityManager->persist($user);
        $entityManager->flush();

        // Redirect to a success page or do something else
        $this->addFlash('success', 'Votre compte a été créé. Vous recevez un email après la validation.');

        return $this->redirectToRoute('login');
    }

    return $this->render('front/security/signup.html.twig', [
        'registrationForm' => $form->createView(),
    ]);
   }

   private function getForm($request, $user)
  {
    $entity = new User();
    $form = $this->createForm(UserType::class, $entity, [
      'user' => null,
      'action' => $this->generateUrl('signup')
    ]);

    return $form->handleRequest($request);
  }

   


}
