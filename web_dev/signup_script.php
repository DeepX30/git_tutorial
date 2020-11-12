<?php
$con=mysqli_connect('localhost', 'root', '', 'ecommerce');
or die(mysqli_error($con));
session_start();

$name=mysqli_real_escape_string($con,$_POST['name']);
$city=$_POST['city'];
$phone=$_POST['phone'];
$address=mysqli_real_escape_string($con,$_POST['address']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5($_POST['password']);
$query="insert into user(name,city,address,email,phone,password) values('$name','$city','$address','$email','$phone','$password')";
$result=mysqli_query($con,$query) or
die(mysqli_error($con));

$_SESSION['id']=mysqli_insert_id($con);
$_SESSION['email']=$email; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign Up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>
    <body>
    <?php include "header.php"; 
       if($result)
       {
         header('location: home.php');
         die;
        }
       else{ echo "Something went wrong please try again later"; }
    ?>
</body>
</html>