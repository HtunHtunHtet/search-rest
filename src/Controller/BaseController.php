<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BaseController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response {
        return $this->render('index.html.twig', [
        ]);
    }
}
