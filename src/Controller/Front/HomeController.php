<?php

namespace App\Controller\Front;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

  /**
   * @Route(methods={"GET"}, path="/", name="home")
   */
  public function index()
  {
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
