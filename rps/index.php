<?php 

// require __DIR__.'/vendor/autoload.php';

use App\Debug;

Debug::dump($_SESSION);

$moves = ['rock', 'paper', 'scissors'];

$lastGame = $_SESSION['results']['lastGame'] ?? null;
$recentGames = $_SESSION['results']['recentGames'] ?? null;

$_SESSION['results']['lastGame'] = null;

# Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
Debug::dump($game->play('rock'));