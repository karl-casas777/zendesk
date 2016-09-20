<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class TicTacToeController extends Controller
{
    /**
     * @Route("/tictactoe", name="tictactoe")
     */
    public function indexAction(Request $request)
    {
        $tictactoe = $this->get('tictactoe');
        $tictactoe->clear();

        return $this->render('tictactoe/index.html.twig');
    }

    /**
     * @Route("/tictactoe/move", name="tictactoe_move")
     */
    public function moveAction(Request $request)
    {
        $x = $request->get('x');
        $y = $request->get('y');
        $piece = $request->get('piece');

        $tictactoe = $this->get('tictactoe');
        $result = $tictactoe->move($x, $y, $piece, true);
        
        return new JsonResponse(array(
            'result'    => $result,
            'message'   => $tictactoe->message
        ));
    }
}
