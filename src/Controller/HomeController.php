<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 3/20/2018
 * Time: 9:14 AM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index()
    {
        $name = "Grouper";
        return $this->render('home/main.html.twig', ['name' => $name]);
    }
}