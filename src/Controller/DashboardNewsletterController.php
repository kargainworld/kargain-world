<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

// Entities
use App\Entity\NewsletterSubscribe;

/**
  * Require ROLE_ADMIN for *every* controller method in this class.
  *
  * @IsGranted("ROLE_ADMIN")
  */
class DashboardNewsletterController extends AbstractController
{
    /**
     * @Route("/dashboard/newsletter", name="dashboard_newsletter")
     */
    public function index()
    {
        return $this->render('dashboard/newsletter/index.html.twig', [
            'controller_name' => 'DashboardNewsletterController',
        ]);
    }

    /**
     * @Route("/dashboard/newsletter/subscribe/delete/{email}", name="dashboard_news_subs_delete")
     */
    public function newsletter_subs_delete($email)
    {
        $em = $this->getDoctrine()->getManager();

        // Retrieve item to delete
        $repo   = $em->getRepository(NewsletterSubscribe::class);
        $entity = $repo->findOneByEmail($email);

        if ($entity !== null) {
            $em->remove($entity);
            $em->flush();
        } else {
            $request->getSession()->getFlashBag()->add('error',
              'Aucune inscription à la newsletter avec pour email: <b>' . $email . '</b> n\'existe en base de données.');
        }

        // No direct access
        return $this->redirectToRoute('dashboard');
    }

    /**
     * @Route("/dashboard/newsletter/subscribe/download", name="dashboard_news_subs_download")
     */
    public function newsletter_subs_download()
    {
        $em     = $this->getDoctrine()->getManager();
        $r_subs = $em->getRepository(NewsletterSubscribe::class);

        // Retrieve all subscribes
        $subscribes = $r_subs->findAll();

        // Provide a name for your file with extension
        $filename = 'liste-emails.txt';

        // The dinamically created content of the file
        $fileContent = '';
        foreach ($subscribes as $key => $sub) {
            $fileContent .= $sub->getEmail() . (($key+1 < count($subscribes)) ? ', ' : '');
        }

        // Return a response with a specific content
        $response = new Response($fileContent);

        // Create the disposition of the file
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );

        // Set the content disposition
        $response->headers->set('Content-Disposition', $disposition);

        // Dispatch request
        return $response;
    }
}
