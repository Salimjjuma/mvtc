<?php

$fruits =  array();

$fruits[0]['name'] = "Bananas";
$fruits[0]['color'] = "Yellow";
$fruits[0]['shape'] = "undefined";

$fruits[1]['name'] = "Apple";
$fruits[1]['color'] = "Red";
$fruits[1]['shape'] = "undefined";

foreach($fruits as $fruit){
    echo $fruit['name'] . " ";
    echo $fruit['color'] . " ";
    echo $fruit['shape'];
    echo '<br>';
}

// var_dump($fruits);