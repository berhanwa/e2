<?php

        //   0        1         2
$moves = ['rock', 'paper', 'scissor'];
$player1draw = $moves[rand(0, 2)];
$player2draw = $moves[rand(0, 2)];
$winner = '';

if ($player1draw == $player2draw) {
    $winner = 'It was a tie';
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
    
$results[] = [
    'player1' => $player1draw,
    'player2' => $player2draw,
    'winner' => $winner,
];

require 'index-view.php';