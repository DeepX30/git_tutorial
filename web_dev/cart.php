<?php
$con=mysqli_connect('localhost', 'root', '', 'ecommerce');
or die(mysqli_error($con));
session_start();

$user_id=$_SESSION['id'];

$query="select product_id from user_product where user_id='$user_id'";
$result=mysqli_query($con,$query) or
die(mysqli_error($con));

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
            <table class="table">
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                </tr>
                <tbody>
                    <?php
                     while($show=mysqli_fetch_array($result)) {
                    $product_id=$show['product_id'];
                    $query2="select name,price from product where id='$product_id'";
                    $result2=mysqli_query($con,$query2);
                    $show2=mysqli_fetch_array($result2);
                     ?>
                    <tr>
                        <td>
                            <?php echo $show2['name']; ?>
                        </td>
                        <td>
                            <?php echo $show2['price']; ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    </body>
</html>