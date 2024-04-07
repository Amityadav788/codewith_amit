<?php

session_start();
include('./connection.php');

$url ='';
$error =[];

$req =['name', 'email', 'password'];

foreach($req as $key => $value){

    if(empty($_POST[$value])){
    $error[] =$value. " is required ";

    }
}

if(count($error) == 0){

    $_SESSION['success'] ='Form submitted successfully';
    $url ="http://localhost/cwa/list.php";

    $name =$_POST['name'];
    $email =$_POST['email'];
    $pass =$_POST['password'];

    $query ="INSERT INTO amit(`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
    $result =mysqli_query($connection,$query);

} else{

    $_SESSION['error'] =$error;
    $url ="http://localhost/cwa/add.php";
}

header("location:".$url);
exit;

?>

