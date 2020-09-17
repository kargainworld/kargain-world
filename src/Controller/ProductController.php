<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route({
     *     "en": "/product",
     *     "fr": "/{_locale}/produit"
     * }, name="product")
     */
    public function index()
    {
        $features = null;
        try {
            $features = $this->getParameter('features');
        } catch (\Exception $e) {
            // dump($e);
        }

        $milestones = null;
        try {
            $milestones = $this->getParameter('milestones');
        } catch (\Exception $e) {
            // dump($e);
        }

        return $this->render('product/index.html.twig', [
            'features'    => $features,
            'milestones'  => $milestones,
        ]);
    }
}
