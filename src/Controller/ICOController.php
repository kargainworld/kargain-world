<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ICOController extends AbstractController
{
    /**
     * @Route({
     *     "en": "/ico",
     *     "fr": "/{_locale}/ico"
     * }, name="ico")
     */
    public function index()
    {
        return $this->render('ico/index.html.twig', [
            'controller_name' => 'ICOController',
        ]);
    }
}
