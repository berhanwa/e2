<?php


if (in_array($day, ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'])) {
    $dayType = 'Week day';
} else {
    $dayType = 'Week end';
}


if (in_array($day, ['saturday', 'sunday'])) {
    $dayType = 'Week end';
} else {
    $dayType = 'Week day';
} 