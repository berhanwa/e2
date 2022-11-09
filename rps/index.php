<?php 

// require __DIR__.'/vendor/autoload.php';

use App\Debug;

Debug::dump($_SESSION);

$moves = ['rock', 'paper', 'scissors'];

$lastGame = $_SESSION['results']['lastGame'] ?? null;
$recentGames = $_SESSION['results']['recentGames'] ?? null;

$_SESSION['results']['lastGame'] = null;


require 'index-view.php';