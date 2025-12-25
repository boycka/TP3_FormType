<?php

namespace App\Controller;

use App\Form\Type\ProductFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product')]
    public function index(): Response
    {
        $ProductForm = $this->createForm(ProductFormType::class);
        return $this->render('product/index.html.twig', [
            'Product_Form' => $ProductForm,
        ]);
    }
}
