<?php

// var_dump($_POST);

$userDraw = $_POST['draw'];

$computerDraw = drawMove();
$winner = decideWinner($userDraw, $computerDraw);

var_dump($userDraw);
var_dump($winner);
var_dump($computerDraw);

        
function drawMove() {
    $moves = ['rock', 'paper', 'scissor'];
    return $moves[rand(0,2)];
}


function decideWinner($userDraw, $computerDraw) {
    if ($userDraw == $computerDraw) {
        return 'It was a tie';
    } elseif ($userDraw == 'rock') {
        return $computerDraw == 'paper' ? 'Computer wins' : 'User wins';
    } elseif ($userDraw == 'paper') {
        return $computerDraw == 'scissor' ? 'Computer wins' : 'User wins';
    } elseif ($userDraw == 'scissor') {
        return $computerDraw == 'rock' ? 'Computer wins' : 'User wins';
    }
}
        