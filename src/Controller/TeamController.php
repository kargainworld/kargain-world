<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    /**
     * @Route({
     *     "en": "/team",
     *     "fr": "/{_locale}/l-equipe"
     * }, name="team")
     */
    public function index()
    {
        $team = null;
        try {
            $team = $this->getParameter('team');
        } catch (\Exception $e) {
            // dump($e);
        }

        $partners = null;
        try {
            $partners = $this->getParameter('partners');
        } catch (\Exception $e) {
            // dump($e);
        }

        return $this->render('team/index.html.twig', [
            'team'      => $team,
            'partners'  => $partners
        ]);
    }
}
