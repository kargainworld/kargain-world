<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PrivacyPolicyController extends AbstractController
{
    /**
     * @Route({
     *     "en": "/privacy-policy",
     *     "fr": "/{_locale}/politique-de-confidentialite"
     * }, name="privacy_policy")
     */
    public function index()
    {
        return $this->render('privacy-policy/index.html.twig', [
            'controller_name' => 'PrivacyPolicyController',
        ]);
    }
}
