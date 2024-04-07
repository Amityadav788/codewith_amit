<?php 

session_start();
include('./connection.php');

$error =[];
$name =$_POST['name'];
$email =$_POST['email'];
$pass =$_POST['password'];
$id =$_POST['id'];


$arr =['name' =>$name, 'email' =>$email, 'password' =>$pass];

$query ="UPDATE `amit` SET `name` = '$name',`email` ='$email', `password` ='$pass' WHERE id=$id ";
$result =mysqli_query($connection,$query);

foreach($arr as $key => $value){

    if(isset($_POST[$value]) && empty($_POST[$value])){

        $error[] =$value. " is required ";

    }
}

if(count($error) == 0){

    $_SESSION['success'] ='Edited successfully';


} else{

    $_SESSION['error'] = $error ;

}

header("location:http://localhost/cwa/edit.php?id=".$id);
exit;


?>