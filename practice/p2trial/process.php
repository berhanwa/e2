<?php

// var_dump($_POST);

$draw = $_POST['draw'];

                //   0       1         2
        $moves = ['rock', 'paper', 'scissor'];
        $userDraw = $draw;
        $computerDraw = $moves[rand(0, 2)];
        $winner = '';
        
        // function decideWinner() {
        //     if ($userDraw == $computerDraw) {
        //         return 'It was a tie';
        //     } elseif ($userDraw == 'rock') {
        //        return $computerDraw == 'paper' ? 'Computer wins' : 'User wins';
        //     } elseif ($userDraw == 'paper') {
        //         return $computerDraw == 'scissor' ? 'Computer wins' : 'User wins';
        //     } elseif ($userDraw == 'scissor') {
        //         return $computerDraw == 'rock' ? 'Computer wins' : 'User wins';
        //     }
        // }
        

        // if ($userDraw == $computerDraw) {
        //     $winner = 'It was a tie';
        // } elseif ($userDraw == 'rock' and $computerDraw == 'paper') {
        //     $winner = 'Computer';
        // } elseif ($userDraw == 'rock' and $computerDraw == 'scissor'){
        //     $winner = 'User';
        // } elseif ($userDraw == 'paper' and $computerDraw == 'rock') {
        //     $winner = 'User';
        // } elseif ($userDraw == 'paper' and $computerDraw == 'scissor'){
        //     $winner = 'Computer';
        // } elseif ($userDraw == 'scissor' and $computerDraw == 'rock') {
        //     $winner = 'Computer';
        // } elseif ($userDraw == 'scissor' and $computerDraw == 'paper'){
        //     $winner = 'User';
        // }
            
        // $results[] = [
        //     'user' => $userDraw,
        //     'computer' => $computerDraw,
        //     'winner' => $winner,
        // ];
        
        // require 'index-view.php';



// $choose = drawMove();

// $winner = $draw == $choose;

var_dump($draw);
// var_dump($choose);
var_dump($winner);

// function drawMove() {
//     $moves = ['rock', 'paper', 'scissor'];
//     return $moves[rand(0,2)];
// }