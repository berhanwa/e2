<?php

        //   0        1         2
$moves = ['rock', 'paper', 'scissor'];
$player1draw = $moves[rand(0, 2)];
$player2draw = $moves[rand(0, 2)];
$winner = '';

if ($player1draw == $player2draw) {
    $winner = 'Tie';
} elseif ($player1draw == 'rock' and $player2draw == 'paper') {
    $winner = 'Player 2';
} elseif ($player1draw == 'rock' and $player2draw == 'scissor'){
    $winner = 'Player 1';
} elseif ($player1draw == 'paper' and $player2draw == 'rock') {
    $winner = 'Player 1';
} elseif ($player1draw == 'paper' and $player2draw == 'scissor'){
    $winner = 'Player 2';
} elseif ($player1draw == 'scissor' and $player2draw == 'rock') {
    $winner = 'Player 2';
} elseif ($player1draw == 'scissor' and $player2draw == 'paper'){
    $winner = 'Player 1';
}
    
var_dump($player1draw);
var_dump($player2draw);
var_dump($winner);


require 'index-view.php';

?>