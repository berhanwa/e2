<?php

session_start();

$userDraw = $_POST['draw'];
$computerDraw = drawMove();
$winner = decideWinner($userDraw, $computerDraw);


        
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


$_SESSION['results'] = [
    'winner' => $winner,
    'userDraw' => $userDraw,
    'computerDraw' => $computerDraw
];


header('Location: index.php');