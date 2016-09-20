<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Carbon\Carbon;

class OlympicsController extends Controller
{
    /**
     * @Route("/olympics", name="olympics")
     */
    public function indexAction(Request $request)
    {
        return $this->render('olympics/index.html.twig');
    }

    /**
     * @Route("/olympics/previous-games", name="olympics_previous_games")
     */
    public function previousGamesAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $tbEvent = $em->getRepository('AppBundle:Event');
        $events = $tbEvent->getPreviousEvents();

        return $this->produceJsonResponse($events);
    }

    /**
     * @Route("/olympics/current-games", name="olympics_current_games")
     */
    public function currentGamesAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $tbEvent = $em->getRepository('AppBundle:Event');
        $events = $tbEvent->getCurrentEvents();
        
        return $this->produceJsonResponse($events);
    }

    /**
     * @Route("/olympics/next-games", name="olympics_next_games")
     */
    public function nextGamesAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $tbEvent = $em->getRepository('AppBundle:Event');
        $events = $tbEvent->getNextEvents();

        return $this->produceJsonResponse($events);
    }

    private function produceJsonResponse($events)
    {
        $data = array();
        foreach ($events as $event) {
            $game = $event->getGame();

            $data[$game->getName()][] = array(
                'start'     => $event->getStartdate(),
                'end'       => $event->getEnddate(),
                'countries' => $event->getEventCountriesArray()
            );
        }

        return new JsonResponse($data);
    }
}
