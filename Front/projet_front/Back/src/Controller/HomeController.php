


<?php


namespace MyBank\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\httpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('home/index.html', [
            'controller_name' => 'HomeController',
        ]);
    }
}


