<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/{all}", defaults={"all"=""})
     */
    public function main(): Response
    {
        return $this->render('main/index.html.twig');
    }
}
