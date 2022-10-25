<?php

session_start();


if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $winner = $results['winner'];
    $userDraw = $results['userDraw'];
    $computerDraw = $results['computerDraw'];

    $_SESSION['results'] = null;
}


require 'index-view.php';