<?php


$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);


$playerone = array_splice($cards, 0, 5);
$randomCard = rand(1, 10);
$playertwo = $cards;



foreach($playerone as $randomCard => $cards) {
    array_slice($playertwo, 0, 5);
}




var_dump($playerone);
var_dump($playertwo);





?>

<!-- <h1>Practice</h1> -->