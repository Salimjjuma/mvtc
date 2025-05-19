<?php

// we are icluding the config file.
// include _DR_."";

include __DIR__."/../../fxn/config.php";


// This are our variables that are sent / served (received) from the frontend / html /js source.
$name = htmlentities($_POST['name']);
$gender = htmlentities($_POST['gender']);
$phoneNumber = htmlentities($_POST['phoneNumber']);
$dateofBirth = htmlentities($_POST['dateofBirth']);

// used to be sent back to the caller.
$data = array();

try{
    // if either of this is empty or the phonenumber is less than 10, we throw an 
    // error that will be caught by the catch statement.
    if(empty($name) || empty($gender) || $phoneNumber < 10 )
        throw new Exception("There are empty fields in your document");

    // we have removed id column because it is auto_increment.
    $query = "INSERT INTO 'students'('name', 'gender', 'DoB', 'phoneNumber')
              VALUE (:name, :gender, :date_of_birth, :phoneNumber)";

    $sql =dtb->prepare($query);

    /** we have two binds:
     * 1. PARAM_STR - Which binds to strings characters.
     * 2. PARAM_STR - Which binds to an integer.
    */


    $sql->bindparam(":name", $name, PDO::PARAM_STR);
    $sql->bindparam(":gender", $gender, PDO::PARAM_STR);
    $sql->bindparam(":date_of_birth", $date_of_birth, PDO::PARAM_STR);
    $sql->bindparam(":phoneNumber", $phoneNumber, PDO::PARAM_INT);

    $sql->execute();

    $data['success'] = true;
    $data['message'] = "Student added successfully";


}catch(Exception $e){
    $data['success'] = false;
    $data['message'] = $e->getMessage();

}

echo json_encode($data);