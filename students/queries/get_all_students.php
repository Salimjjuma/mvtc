<!-- used to fetch all the students in the database table "students." -->


<?php
//if the path to reach config.php is c:/xampp/htdocs/mvtc/fxn/config.php
//include "../../fxn/config.php"; ..you use this way.
//c:/xampp/htdocs/mvtc/

//include _DIR_. "../../fxn/config.php";
// c:/xampp/htdocs/mvtcfxn/config.php

include __DIR__. "/../../fxn/config.php"; // this is the way.

$query = "SELECT * FROM students";

$sql = $dtb->prepare($query); // $sql = $dtb->prepare("SELECT * FROM students");
 
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// This return key is used to return the resource / data back to the frontend / caller .
return json_encode($result); // you can also use "return json encode" or echo.