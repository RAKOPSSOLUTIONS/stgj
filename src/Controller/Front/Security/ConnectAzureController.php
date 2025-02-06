<?php
namespace App\Controller\Front\Security;

use App\Entity\Log;
use App\Entity\User;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class ConnectAzureController extends BaseController
{
    //, schemes={"https"}
    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/oauth/connect/azure", name="connect_azure_start")
     */
    public function connectAction(ClientRegistry $clientRegistry)
    {
        return $clientRegistry
            ->getClient('azure')
            ->redirect(['openid']);
    }

    /**
     * After going to azure, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     *
     * @Route("/oauth/check-azure", name="connect_azure_check")
     */
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry)
    {
        try {
            $client = $clientRegistry->getClient('azure');
            $user = $this->getDoctrine()->getRepository(User::class)->findOneBy([
                'email' => $client->fetchUser()->getUpn()
            ]);
            if (!$user) {
                $this->addFlash('error', "Votre compte ".$client->fetchUser()->getUpn()." n'est pas enregistré dans la base de données");
                return $this->redirectToRoute('login');
            }

            $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());

            $this->get('security.token_storage')->setToken($token);
            $this->get('session')->set('_security_main', serialize($token));
            $request->getSession()->set('_locale', $user->getLocale());

            $user_id = $user->getId();
            $this->getDoctrine()->getRepository(Log::class)->store($user_id, $user_id, 'user', 'logged');

            return $this->redirectToRoute('reporting');
        } catch (\Exception $e) {
            $this->addFlash('error', $e->getMessage());
            return $this->redirectToRoute('login');
        }
    }
}
