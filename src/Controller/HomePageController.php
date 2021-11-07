<?php

namespace App\Controller;

use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index(): Response
    {
        $productsRepository = $this->getDoctrine()->getRepository(Products::class); // получение репозитория
        $products=$productsRepository->findAll(); // возвращает все объекты модели
        // var_dump($products); // сделаем проверку
        //  die();

        return $this->render('home_page/index.html.twig', [
           // 'controller_name' => 'HomePageController',
            'allProducts' => $products, // вызываем переменную $products в нашем шаблоне
        ]);
    }
}
