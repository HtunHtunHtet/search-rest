<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('', name: 'home')]
    public function index(ProductRepository $repository): Response {

        $products = $repository->findAll();

        //dd($products);

        return $this->render('index.html.twig', [

       ]);
    }
}
