<?php
/**
 * Created by PhpStorm.
 * User: A7597384
 * Date: 11/12/2018
 * Time: 16:41
 */

namespace App\Controller\Jarvis;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JarvisController extends AbstractController
{
  /**
   * @Route("/jarvis", name="jarvis")
   */
  public function index()
  {
    return $this->render('jarvis/index.html.twig');
  }
}