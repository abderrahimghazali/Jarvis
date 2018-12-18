<?php
/**
 * Created by PhpStorm.
 * User: A7597384
 * Date: 11/12/2018
 * Time: 16:41
 */

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
  /**
   * @Route("/", name="homepage")
   */
  public function index()
  {
    return $this->render('site/index.html.twig');
  }

  /**
   * @Route("/about", name="about")
   */
  public function about()
  {
    return $this->render('site/about.html.twig');
  }
}