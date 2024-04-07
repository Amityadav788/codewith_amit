<?php 

session_start();

$msg =false;
$error =false;


include('./connection.php');

$query =" SELECT * FROM amit ";
$result =mysqli_query($connection,$query);
$output =[];

while($row =mysqli_fetch_assoc($result)){

    $output[] =$row;

}

if(isset($_SESSION['error']) && !empty($_SESSION['error'])){

    $error =$_SESSION['error'];
  
}

if(isset($_SESSION['success']) && !empty($_SESSION['success'])){

    $msg =$_SESSION['success'];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php if($msg == true){ ?>
    <div class="alert alert-success">
    <p><?php echo $msg; ?></p>
    </div>    
<?php } ?>

<?php if($error){ ?>
    <div class="alert alert-success">
    <?php if(is_array($error) == true){ ?>
    <?php foreach($error as $key => $value){ ?>
      <p><?php echo $value; ?></p>
      <?php } ?>
      <?php } else{ ?>
        <p><?php echo $error; ?></p>
        <?php } ?>
      </div>          
<?php } ?>

<div class="container">
  <h2>Basic Table</h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($output as $key => $value){  ?>
        <tr>
            <td><?php echo $value['name']; ?></td> 
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['password']; ?></td> 
            <td><a href="http://localhost/cwa/delete.php?id=<?php echo $value['id']?>" class="btn btn-danger" role="button">Delete</a></td>
            <td><a href="http://localhost/cwa/edit.php?id=<?php echo $value['id']?>" class="btn btn-info" role="button">Edit</a></td> 
        </tr>
        <?php } ?>

    </tbody>
  </table>
</div>

</body>
</html>






