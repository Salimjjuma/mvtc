<?php

// we are going to discuss about arrays in php

// assume I have mango, apple. both of this are fruits 

// array is used to store more than one item / variable. 

// array in php is written like this:

// or like this: 
// the dimerit is that the second array is fixed size.
// $fruits2 = [4];

$fruits = array(); // array of fruits. 
// another example of array is a basket / kikapu / 

$fruits[0]['name'] = "mango";
$fruits[0]['color'] = "green";
$fruits[0]['shape'] = "round";

$fruits[1]['name'] = "apple";
$fruits[1]['color'] = "red";
$fruits[1]['shape'] = "oval";


// var_dump($fruits);

// we can use echo, but because we are outputting array. var_dump is the 
// best option - we get a warning: Warning: Array to string conversion in 
// C:\xampp\htdocs\mvtc\test.php on line 26


// we want to iterate using loop. foreach

foreach($fruits as $fruit){
    echo $fruit['name'] . " ";
    echo $fruit['color'] . " " ;
    echo $fruit['shape'] . " " ;

    echo "<br>";
}



// fetchAll() this return an array
// fetchColumn() this returns an object
// fetch() this return an object /