<?php

namespace App\Controller;

use App\Repository\PageCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     * @param PageCategoryRepository $pageCatRepo
     * @return Response
     */
    public function index(PageCategoryRepository $pageCatRepo): Response
    {
        $pages = ($pageCatRepo->findOneBy([
           'name' => "Services"
        ]))->getPages();
        return $this->render('static/index.html.twig', [
            'services' => $pages,
        ]);
    }

    /**
     * @Route("/presentation", name="presentation")
     * @return Response
     */
    public function presentation(): Response
    {
        return $this->render('static/presentation.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     * @return Response
     */
    public function contact(): Response
    {
        return $this->render('static/contact.html.twig');
    }
}
