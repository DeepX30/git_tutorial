<?php
$con=mysqli_connect('localhost', 'root', '', 'ecommerce');
or die(mysqli_error($con));
session_start();

$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5($_POST['password']);

$query="select password from user where email='$email'";
$result=mysqli_query($con,$query);
$show=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HOME</title>
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
    	<?php include "header.php" ?>
        <div class="container">
        	<?php
        	    if(!$show){
        	     echo "Plese Enter valid Email Id"; }
    			else if($show['password']==$password){
                    $query2="select id from user where email='$email'";
                    $result2=mysqli_query($con,$query2);
                    $show2=mysqli_fetch_array($result2);
                    $_SESSION['id']=$show2['id'];
                    $_SESSION['email']=$email; 
                    header('location: home.php'); }
    			else{
    			     echo "Wrong Password"; }
    		?>
        </div>
     </body>
</html>   