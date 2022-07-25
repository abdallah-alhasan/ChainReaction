<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
session_start();
$dsn = 'mysql:host=localhost;dbname=test';
$user = 'root';
$option = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try{
    $db = new PDO($dsn,$user,'',$option);
    $_SESSION['message'] = 'Successfully added';
}

catch(PDOException $e){
    $_SESSION['message'] = 'Somthing went wrong!';
    header("Location:index.php");
}

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$phoneNumber = $_POST['phone_number'];

$statement=$db->prepare("INSERT INTO users (first_name,last_name,phone_number)
VALUES (:first_name,:last_name,:phone_number)
");
$statement->bindValue(':first_name',$firstName);
$statement->bindValue(':last_name',$lastName);
$statement->bindValue(':phone_number',$phoneNumber);
$statement->execute();

header("Location:index.php");
}else{
    header("Location:index.php");
}
