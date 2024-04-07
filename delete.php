<?php

session_start();


include('./connection.php');

$id =$_GET['id'];

$query ="DELETE FROM amit   WHERE id =$id";
$result =mysqli_query($connection,$query);

if($result == true){

    $_SESSION['success'] ='Record deleted successfully';

} else{

    $_SESSION['error'] ='Record not deleted';

}

header("location:http://localhost/cwa/list.php");
exit;

?>



