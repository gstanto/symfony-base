<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 3/20/2018
 * Time: 9:14 AM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index()
    {
        return new Response('Ok, Yes I am a base home Controller, baby, come again, no');
    }
}