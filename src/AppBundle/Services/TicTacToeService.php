<?php 

namespace AppBundle\Services;

use Symfony\Component\HttpFoundation\Session\Session;

class TicTacToeService
{
    const DRAW = 'draw';

    private $dimension = 3;
    private $board;
    private $moveCount;
    private $session;
    public $message;


    public function __construct($session)
    {
        $this->session = $session;

        $this->moveCount = $this->session->get('moveCount', 0);
        $this->board = $this->session->get('board');
    }

    public function getBoard()
    {
        return $this->session->get('board');
    }

    public function clear()
    {
        $this->session->set('moveCount', 0);
        $this->session->set('board', array());

        $this->moveCount = $this->session->get('moveCount', 0);
        $this->board = $this->session->get('board');
        $this->message = null;
    }

    public function move($x, $y, $piece, $verbose = false)
    {
        $this->board[$x][$y] = $piece;
        $this->moveCount++;

        $result = $this->checkIfWon($x, $y, $piece);
        if ($verbose) {
            if ($result === self::DRAW) {
                $this->message = 'Draw!!!';
            }
            elseif ($result) {
                $this->message = $piece.' has won.';
            }
            else {
                $this->message = 'Nobody has won yet.';
            }
        }
        $this->session->set('board', $this->board);
        $this->session->set('moveCount', $this->moveCount);


        return $result;
    }

    public function checkIfWon($x, $y, $piece)
    {
        // check col
        for ($i = 0; $i < $this->dimension; $i++) { 
            if (!isset($this->board[$x][$i]) || $this->board[$x][$i] != $piece) {
                break;
            }
            if ($i == $this->dimension - 1) {
                return true;
            }
        }

        // check row
        for ($i = 0; $i < $this->dimension; $i++) { 
            if (!isset($this->board[$i][$y]) || $this->board[$i][$y] != $piece) {
                break;
            }
            if ($i == $this->dimension - 1) {
                return true;
            }
        }

        // check diagonal if needed
        if ($x == $y) {
            for ($i = 0; $i < $this->dimension; $i++) { 
                if (!isset($this->board[$i][$i]) || $this->board[$i][$i] != $piece) {
                    break;
                }
                if ($i == $this->dimension - 1) {
                    return true;
                }
            }
        }

        // check anti diagonal if needed
        if (abs($x - $y == 2 || ($x = 1 && $y = 1)) ) {
            for ($i = 0; $i < $this->dimension; $i++) { 
                if (!isset($this->board[$i][($this->dimension - 1) - $i]) || $this->board[$i][($this->dimension - 1) - $i] != $piece) {
                    break;
                }
                if ($i == $this->dimension - 1) {
                    return true;
                }
            }
        }

        //check draw
        if($this->moveCount >= (($this->dimension * $this->dimension) - 1)){
            return self::DRAW;
        }

        return false;
    }
}