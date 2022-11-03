<?php

// require __DIR__.'/vendor/autoload.php';

use RPS\Game;

$player = $_POST['player'];

$game = new Game($persistResults = true, $maxResults = 3);

$_SESSION['results'] = [
    'lastGame' => $game->play($player),
    'recentGames' => $game->getResults()
];

header('Location: index.php');