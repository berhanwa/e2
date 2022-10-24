<?php

session_start();


if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $winner = $results['winner'];
    $userDraw = $results['userDraw'];
    $computerDraw = $results['computerDraw'];

    var_dump($winner);
    var_dump($userDraw);
    var_dump($computerDraw);
}


require 'index-view.php';