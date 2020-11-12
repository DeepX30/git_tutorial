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
                <div class="offset-3 col-lg-6">
                    <h3><b>CHANGE PASSWORD</b></h3>
                    <br>
                    <form id="form" method="post" action="setting_script.php">
                        <div class="form-group">
                            <input class="form-control" type="password" required="true" placeholder="Old Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="must contain at least one number and one uppercase and lowercase letter, and at least 4 or more characters" name="old_password">
                        </div>
                        <div class="form-group">
                            <input id="new_password" class="form-control" type="password" required="true" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="must contain at least one number and one uppercase and lowercase letter, and at least 4 or more characters" name="new_password">
                        </div>
                        <div  class="form-group">
                            <input id="confirm_password" class="form-control" type="password" required="true" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="must be same as above" name="confirm_password">
                              <span id='message'></span>
                        </div>

                    <script type="text/javascript">
                        $('#new_password, #confirm_password').on('keyup', function() {
                        if ($('#new_password').val() == $('#confirm_password').val()) {
                            $('#message').html('Matching').css('color', 'green');
                        } else
                            $('#message').html('Not Matching').css('color', 'red');
                            });
                    </script>
                        <input id="submit" class="btn btn-danger" type="submit" name="submit" placeholder="Submit">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>       