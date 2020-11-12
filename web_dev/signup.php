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
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img class="img-fluid" src="images/signup.jpg">
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header navigation text-white"><h3>User Registration</h3></div>
                        <div class="card-body">
                            <form method="post" action="signup_script.php">
                                <div class="form-group">
                                    <input class="form-control" type="text" required="true" placeholder="Name" pattern="[A-z0-9À-ž\s]{2,}$" name="name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="tel" placeholder="Contact Number" required="true" pattern="[0-9]{10}$" name="phone">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" required="true" placeholder="Enail Address" title="please enter valid email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" required="true" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}$" title="must contain at least one number and one uppercase and lowercase letter, and at least 4 or more characters" name="password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" required="true" placeholder="City" pattern="[A-Za-z]{1,}$" name="city">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" required="true" placeholder="Address" pattern="[A-z0-9À-ž\s]{2,}$" name="address">
                                </div>
                                <button class="btn btn-danger btn-block">Submit</button>
                            </form>
                        </div>    
                        <div class="card-footer navigation text-white">© samapti macchi bhandaar and co.</div>
                    </div>
                </div>
            </div>
        </div>
        <?php  include "footer.php" ?>   
    </body>
</html>       