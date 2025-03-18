<?php

namespace App\Controller\Front;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class HomeController extends AbstractController
{
  private $security;
  private $urlGenerator;

  public function __construct(Security $security, UrlGeneratorInterface $urlGenerator)
  {
      $this->security = $security;
      $this->urlGenerator = $urlGenerator;
  }

  /**
   * @Route(methods={"GET"}, path="/", name="home")
   */
  public function index()
  {

  if ($this->security->isGranted('ROLE_ADMIN')){
    return $this->redirectToRoute('reservations');
  }
      // Check if the user has the ROLE_MANAGER role
      if ($this->security->isGranted('ROLE_MANAGER')) {
          // Redirect to the admin/navettes route
          return $this->redirectToRoute('navettes');
      }

      // Default redirection for other roles
      return $this->redirectToRoute('reservations');
  }

  /**
   * @Route(methods={"GET"}, path="/services", name="services")
   */
  public function services()
  {
    return $this->render('front/home/services.html.twig');
  }

  /**
   * @Route(methods={"GET"}, path="/pricing", name="pricing")
   */
  public function pricing()
  {
    return $this->render('front/home/pricing.html.twig');
  }

  /**
   * @Route(methods={"GET"}, path="/customers", name="customers")
   */
  public function customers()
  {
    return $this->render('front/home/customers.html.twig');
  }

  /**
   * @Route(methods={"GET"}, path="/ressources", name="ressources")
   */
  public function ressources()
  {
    return $this->render('front/home/ressources.html.twig');
  }

  /**
   * @Route(methods={"GET"}, path="/contact", name="contact")
   */
  public function contact()
  {
    return $this->render('front/home/contact.html.twig');
  }

}
