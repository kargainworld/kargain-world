<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\HttpKernel\KernelInterface;

// Entities
use App\Entity\NewsletterSubscribe;

/**
  * Require ROLE_ADMIN for *every* controller method in this class.
  *
  * @IsGranted("ROLE_ADMIN")
  */
class DashboardController extends AbstractController
{
    const NB_SUBS_BY_PAGE = 25;

    /**
     * @Route("/dashboard/reset-cache", name="dashboard_reset_cache")
     */
    public function reset_cache(Request $request, KernelInterface $kernel)
    {
        $application = new Application($kernel);
        $application->setAutoExit(false);

        $input = new ArrayInput([
            'command' => 'cache:clear',
        ]);

        // You can use NullOutput() if you don't need the output
        $output = new NullOutput();
        $run_return = $application->run($input, $output);

        // Data to return / display
        $return_data = array(
            'query_status'      => 0,
            'slug_status'       => 'error',
            'message_status'    => 'Une erreur est survenue lors de la ré-initialisation du cache.'
        );

        if ($run_return == 0) {
            $return_data = array(
                'query_status'    => 1,
                'slug_status'     => 'success',
                'message_status'  => 'Ré-initialisation du cache effectué avec succès.'
            );
        }

        // Set message in flashbag on direct access
        $request->getSession()->getFlashBag()->add($return_data['slug_status'], $return_data['message_status']);

        // Redirect to home
        return $this->redirectToRoute('dashboard');
    }

    /**
     * @Route("/dashboard/{current_page}", name="dashboard", defaults={"current_page"=1})
     */
    public function index($current_page = 1)
    {
        $em     = $this->getDoctrine()->getManager();
        $r_subs = $em->getRepository(NewsletterSubscribe::class);

        $count_subs = $r_subs->countAll();
        $nb_subs    = (int) $count_subs['nb_subs'];

        // Get nb pages of newsletter subscribes
        $nb_pages_raw = ($nb_subs / self::NB_SUBS_BY_PAGE);
        $nb_pages     = floor($nb_pages_raw);

        // If there is decimal numbers,
        //  there is less than 20 subs (=self::NB_SUBS_BY_PAGE) to display
        //  > So we need to add 1 more page
        if (($nb_pages_raw - $nb_pages) > 0)
            $nb_pages++;

        // Check if $current_page is correct, if not redirect with a correct page number
        if ($nb_pages > 0 && $current_page > $nb_pages) {
            $current_page = max(1, $current_page - 1);

            // Redirect with correct $current_page and filters in URI
            return $this->redirectToRoute('dashboard', [ 'current_page' => $current_page ]);
        }

        $subs = $r_subs->findByPage($current_page, self::NB_SUBS_BY_PAGE);

        // Display page with twig & assign values
        return $this->render('dashboard/index.html.twig', [
            'subscribes'    => $subs,
            'nb_subscribes' => $nb_subs,
            'current_page'  => $current_page,
            'nb_pages'      => $nb_pages,
        ]);
    }
}
