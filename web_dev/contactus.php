<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
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
        <?php include "header.php"; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3><b>Live Support</b></h3>
                    <br>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
                <div class="col-lg-4">
                    <img class=" img-fluid" src="images/contactus.jpg">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <h3><b>CONTACT US</b></h3>
                    <br>
                    <form method="post" action="#">
                        <div class="form-group">
                            <input class="form-control" type="text" required="true" placeholder="Name" pattern="[A-z0-9À-ž\s]{2,}$" name="name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" required="true" placeholder="Enail Address" title="please enter valid email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message" rows="3" id="comment"></textarea>
                        </div>
                        <button class="btn btn-danger">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h3><b>Company Information</b></h3>
                    <br>
                    <p>Company Extensions : Useful listing of company extensions and security identifiers, with country of origin and a concise definition of company type. The listing is produced by Corporate Information as part of their huge company information service, and includes direct links to listings of company information sources for each country.
                    Corporate Information : Company information service that provides corporate profiles, listings of international company directories, industry-specific reports, a listing of company extensions, international business news, research reports, and state-by-state US company information sources. Research a country, a country's industries or individual companies. Registration is free</p>
                </div>
            </div>
        </div>
        <?php  include "footer.php" ?>
    </body>
</html>       