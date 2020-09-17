<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;

// Entities
use App\Entity\NewsletterSubscribe;

class NewsletterController extends AbstractController
{
    /**
     * @Route("/newsletter/subscribe/", name="newsletter_subscribe")
     */
    public function subscribe(Request $request, TranslatorInterface $translator)
    {
        $email  = $request->request->get('subscribe-email');
        $em     = $this->getDoctrine()->getManager();
        $r_subs = $em->getRepository(NewsletterSubscribe::class);

        // Data to return / display
        $return_data = array(
            'query_status'      => 0,
            'slug_status'       => 'error',
            'message_status'    => $translator->trans('newsletter_subscribe.messages.nok')
        );

        if (!empty($email) && $r_subs->findOneByEmail($email) == null) {
            // Create new subscribe
            $subscribe = new NewsletterSubscribe();
            $subscribe
              ->setEmail($email)
              ->setDateSubscribe(new \DateTime())
              ->setIsActive(true);

            // Persist the new sub.
            $em->persist($subscribe);

            // 4) Try to save (flush) or clear
            try {
                // Flush OK !
                $em->flush();

                $return_data = array(
                    'query_status'    => 1,
                    'slug_status'     => 'success',
                    'message_status'  => $translator->trans('newsletter_subscribe.messages.ok'),
                    'id_entity'       => $subscribe->getId()
                );
              } catch (\Exception $e) {
                  // Something goes wrong
                  $em->clear();
                  $return_data['exception'] = $e->getMessage();
              }
        } else {
            $return_data['message_status']  = $translator->trans('newsletter_subscribe.messages.already_registered');
            $return_data['slug_status']     = 'notice';
        }

        if ($request->isXmlHttpRequest()) {
            return $this->json($return_data);
        } else {
            // Set message in flashbag on direct access
            $request->getSession()->getFlashBag()->add($return_data['slug_status'], $return_data['message_status']);

            // Redirect to home
            return $this->redirectToRoute('about');
        }
    }
}
