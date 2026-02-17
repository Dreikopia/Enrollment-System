<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST["f_name"];
    $middlename = $_POST["m_name"];
    $lastname = $_POST["l_name"];
    $age = $_POST["age"];
    $course_id = $_POST['course_id'];

try{
    require_once 'dbh.inc.php';
    require_once 'model.inc.php';
    require_once 'control.inc.php';  

    

    add_student( $pdo, $course_id, $firstname, $middlename, $lastname, $age);

    header("Location: ../index.php");

    $stmt = null;   
    $pdo = null;
    die();

    } catch (PDOException $e){
        echo "Connection failed" .$e->getMessage();
}

} else {
    header("Location: ../index.php");
    die();
}