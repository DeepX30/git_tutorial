<?php
$con=mysqli_connect('localhost', 'root', '', 'ecommerce');
or die(mysqli_error($con));
session_start();
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
                <div class="col-12">
                    <p style="text-align: center; ">
                        <b>
                            Welcome <?php echo $_SESSION['email'] ?>
                             Checkout Our Wide Variety Of Products                              
                        </b>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <div class="card-header navigation text-white">
                            Mobile 1
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="images/mobile1.jpg" alt="mobile" style="width: 100%">
                            <br>
                            <p>some text some text some text some text some text some text </p>
                            <br>
                            <?php $_SESSION['order']="1"; ?>
                            <a href="success.php" class="btn btn-block btn-danger">Add to Cart&thinsp; <i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header navigation text-white">
                            Mobile 2
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="images/mobile2.jpg" alt="mobile" style="width: 100%">
                            <br>
                            <p>some text some text some text some text some text some text </p>
                            <br>
                            <a href="success.php" class="btn btn-block btn-primary">Add to Cart&thinsp; <i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header navigation text-white">
                            Mobile 3
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="images/mobile1.jpg" alt="mobile" style="width: 100%">
                            <br>
                            <p>some text some text some text some text some text some text </p>
                            <br>
                            <a href="success.php" class="btn btn-block btn-success">Add to Cart&thinsp; <i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="card-group">
                    <div class="card-group">
                    <div class="card">
                        <div class="card-header navigation text-white">
                            Mobile 4
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="images/mobile1.jpg" alt="mobile" style="width: 100%">
                            <br>
                            <p>some text some text some text some text some text some text </p>
                            <br>
                            <a href="success.php" class="btn btn-block btn-primary">Add to Cart&thinsp; <i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header navigation text-white">
                            Mobile 5
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="images/mobile2.jpg" alt="mobile" style="width: 100%">
                            <br>
                            <p>some text some text some text some text some text some text </p>
                            <br>
                            <a href="success.php" class="btn btn-block btn-success">Add to Cart&thinsp; <i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header navigation text-white">
                            Mobile 6
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="images/mobile1.jpg" alt="mobile" style="width: 100%">
                            <br>
                            <p>some text some text some text some text some text some text </p>
                            <br>
                            <a href="success.php" class="btn btn-block btn-danger">Add to Cart&thinsp; <i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
    </body>
</html>       