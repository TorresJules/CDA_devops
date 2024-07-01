<?php

namespace App\Controller;

use App\Service\Greetings;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/hello/{name}', name: 'app_hello')]
    public function greet(Greetings $greetingsService, string $name): Response
    {
        return $this->render('default/index.html.twig', [
            'title' => 'Hello',
            'message' => $greetingsService->greet($name),
        ]);
    }
}
