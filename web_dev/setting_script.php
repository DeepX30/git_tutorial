<?php
$con=mysqli_connect('localhost', 'root', '', 'ecommerce');
or die(mysqli_error($con));
session_start();

$old_password=md5($_POST['old_password']);
$new_password=md5($_POST['new_password']);

$query="select id from user where password='$old_password'";
$result=mysqli_query($con,$query);
$show=($result);
$id=$show['id'];
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
                <p style="text-align: center;">
                	<b>
                		<?php
        	    if($show){ $query2="update user set password='$new_password' where id='$id'";
        	    echo "password changed successfully"; }
        	    else { echo"wrong password";}
    		?>
                	</b>
                </p>
                <hr>
                <p style="text-align: center"><b>***</b></p>
            </div>
        </div>
        </div>
     </body>
</html>   