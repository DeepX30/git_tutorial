        <nav class="navbar navbar-expand-md navbar-dark navigation">
            <div class="container">
                    <a href="index.php" class="navbar-brand">DOMINANT</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="signup.php"><i class="fas fa-user"></i> Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#login_modal" href="#"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutus.php"><i class="fa fa-book"></i> About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contactus.php"><i class="fa fa-phone"></i> Contact Us</a></li>
                    </ul>
                </div>          
            </div>
        </nav>
        <br>

          <!-- The Modal -->
  <div class="modal fade" id="login_modal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header navigation text-white">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method="post" action="login_script.php">
                <div class="form-group">
                    <label for="firstname">Email ID</label>
                        <input class="form-control" type="email" required="true" placeholder="name@address.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="please enter valid email address" name="email">
                </div>
                <div class="form-group">
                    <label for="lastname">Password</label>
                    <input class="form-control" required="true" placeholder="Enter Your password Here" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}$" title="Must contain at least number and one uppercase and lowercase letter, and at least 4 or more charact" name="password">
                </div> 
                <a href="#">forgot password ?</a>
                <br><br>   
                <button class="btn btn-danger">Submit</button>
            </form>
        </div>  
        <!-- Model footer -->
        <div class="modal-footer navigation text-white">
            Don't have an account yet ? <a href="signup.php"> create account</a> 
        </div> 
      </div>
    </div>
  </div>