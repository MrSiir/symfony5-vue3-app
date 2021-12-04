<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjaxController extends AbstractController
{
    /**
     * @Route("/ajax-test", priority=10)
     */
    public function ajaxTest(): Response
    {
        return $this->json([
            'message' => 'Hello from Symfony Controller'
        ]);
    }
}
