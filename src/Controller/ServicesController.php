<?php

namespace App\Controller;

use App\Entity\Page;
use App\Repository\PageCategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServicesController extends AbstractController
{
    /**
     * @Route("/services/{slug}", name="services_details")
     */
    public function details(Page $page, PageCategoryRepository $pageCatRepo): Response
    {
        $allservices = ($pageCatRepo->findOneBy([
            'name' => "Services"
        ]))->getPages();

        return $this->render('services/services_details.html.twig', [
            'service' => $page,
            'services' => $allservices,
        ]);
    }

    /**
     * @Route("/services", name="services")
     */
    public function index(PageCategoryRepository $pageCatRepo): Response
    {
        $pages = ($pageCatRepo->findOneBy([
            'name' => "Services"
        ]))->getPages();

        return $this->render('services/index.html.twig', [
            'services' => $pages,
        ]);
    }
}
