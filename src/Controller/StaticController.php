<?php

namespace App\Controller;

use App\Repository\PageCategoryRepository;
use Psr\Log\LoggerInterface;
use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{

    /**
     * @Route("/", name="homepage", methods={"GET"})
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
     * @Route("/presentation", name="presentation", methods={"GET"})
     * @return Response
     */
    public function presentation(): Response
    {
        return $this->render('static/presentation.html.twig');
    }

    /**
     * @Route("/contact", name="contact", methods={"GET"})
     * @return Response
     */
    public function contact(): Response
    {
        return $this->render('static/contact.html.twig');
    }

    /**
     * @Route("/contact", name="mail_contact", methods={"POST"})
     * @param Request $request
     * @param Swift_Mailer $mailer
     * @param LoggerInterface $logger
     * @return Response
     */
    public function contact_mail(Request $request, Swift_Mailer $mailer, LoggerInterface $logger) : Response
    {
        $success = ['primary', 'Votre message a été envoyé, nous vous répondons au plus vite.'];
        $error = ['danger', 'Echec, veuillez réessayer plus tard.'];

        $status = $error;
        //$logger->info('++++++++++++++++++    '.$request->query->get("name").' - '. $request->query->get("email").' - '.$request->query->get("message"));
        $senderName = $request->request->get("name") ?? false;
        $senderEmail = $request->request->get("email") ?? false;
        $message = $request->request->get("message") ?? false;
        $logger->info('++++++++++++++++++    '.$senderName.' - '. $senderEmail.' - '.$message);
        if ($message || $senderEmail || $senderName)
        {

            $message = (new \Swift_Message('[AUDIMAF] Nouveau message de '.$senderName.' - '.$senderEmail))
                ->setFrom("contact@audimaf.com")
                ->setTo("contact@audimaf.com")
                ->setBody(
                    $this->renderView(
                        'emails/contact.html.twig',
                        [
                            'senderName' => $senderName,
                            'senderEmail' => $senderEmail,
                            'message' => $message
                        ]
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);
            unset($message, $senderName, $senderEmail, $message, $mailer);
            $status = $success;
        }

        $this->addFlash(
            $status[0],
            $status[1]
        );
        return $this->redirectToRoute("contact");
    }
}
