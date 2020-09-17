<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TermsServiceController extends AbstractController
{
    /**
     * @Route({
     *     "en": "/terms-service",
     *     "fr": "/{_locale}/condition-d-utilisation"
     * }, name="terms_service")
     */
    public function index()
    {
        return $this->render('terms-service/index.html.twig', [
            'controller_name' => 'TermsServiceController',
        ]);
    }
}
