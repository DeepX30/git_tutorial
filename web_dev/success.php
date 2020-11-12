<?php
$con=mysqli_connect('localhost', 'root', '', 'ecommerce');
or die(mysqli_error($con));
session_start();
$user_id=$_SESSION['id'];
$product_id=$_SESSION['order'];
$query="insert into user_product (user_id,product_id) values('$user_id','$product_id')";
$result=mysqli_query($con,$query);
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
    
    <?php include "header2.php" ?>

    <div class="container">
        <div class="row">
            <div class="offset-2 col-8">
                <p style="text-align: center;"><b>Thank You for Ordering from Our Store, the Order Shall be Delivered To you Shortly.</b></p>
                <hr>
                <br>
                <p style="text-align: center"><b>Order some More Products from Our Store <a href="home.php">here</a></b></p>
            </div>
        </div>
    </div>

    </body>
</html>