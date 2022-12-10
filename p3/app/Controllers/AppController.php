<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $choice = $this->app->old('choice');
        $computerDraw = $this->app->old('computerDraw');
        $won = $this->app->old('won');

        return $this->app->view('index', [
            'choice' => $choice,
            'computerDraw' => $computerDraw,
            'won' => $won
        ]);
    }

    
    public function process()
    {
        $this->app->validate([
            'choice' => 'required'
        ]);


        $choice = $this->app->input('choice');

        function drawMove() {
            $moves = ['rock', 'paper', 'scissor'];
            return $moves[rand(0,2)];
    }

        function decideWinner($userDraw, $computerDraw) {
            if ($userDraw == $computerDraw) {
                return 'it was a tie. Please try again!';
            } elseif ($userDraw == 'rock') {
                return $computerDraw == 'paper' ? 'the computer won. Please try again!' : 'you won!';
            } elseif ($userDraw == 'paper') {
                return $computerDraw == 'scissor' ? 'the computer won. Please try again!' : 'you won!';
            } elseif ($userDraw == 'scissor') {
                return $computerDraw == 'rock' ? 'the computer won. Please try again!' : 'you won!';
            }
        }

        $userDraw = $_POST['choice'];
        $computerDraw = drawMove();
        $won = decideWinner($userDraw, $computerDraw);


        $this->app->db()->insert('rounds', [
            'choice' => $choice,
            'won' => ($won) ? 1 : 0,
            'timestamp' => date('Y-m-d H:i:s')
        ]);


        return $this->app->redirect('/', ['choice' => $choice, 'computerDraw' => $computerDraw, 'won' => $won]);
    }


    public function history()
    {
        $rounds = $this->app->db()->all('rounds');

        return $this->app->view('history', ['rounds' => $rounds]);
    }
    
        
    public function round()
    {
        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds', $id);

        return $this->app->view('round', ['round' => $round]);
    }
    
}