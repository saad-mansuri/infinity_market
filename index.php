<html>
    <head>
        <title>
            Infinity Market
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="static/css/style.css">
    </head>

    <body>

        <!-- Navbar Section  -->
        <!-- <section> -->
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom-nav">
                    <a class="navbar-brand" href="#">Infinity</a>

                    <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">  
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarDropdown">
                        <ul class="navbar-nav ml-auto mr-5">
                            <li class="nav-item">
                                <a class="nav-link">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        <!-- </section> -->
        <!-- /* Navbar Section END */ -->

        <!-- /* Second Section */ -->
        <section>
            <div class="container-fluid">
                <div class="row mt-5 mb-5">
                    <div class="col-md-5">
                        <div class="extra-pad">
                            <h1 class="font-size">DIGITAL MARKETING AGENCY</h1>
                        <p>REACH NEW HEIGHT AND MAKE NEW GOALS WITH YOUR BUSINESS</p>
                        </div>
                        <!-- <img class="social-icon pt-2" src="static/image/socialmediaicons.png"> -->
                        <div class="social-icon">
                            <i class="fa fa-facebook" aria-hidden="true">
                                <a href="#"></a>
                            </i>
    
                            <i class="fa fa-whatsapp" aria-hidden="true">
                                <a href="#"></a>
                            </i>

                            <i class="fa fa-twitter" aria-hidden="true">
                                <a href="#"></a>
                            </i>

                            <i class="fa fa-instagram" aria-hidden="true">
                                <a href="#"></a>
                            </i>

                        </div>
                    </div>

                    <div class="col-md-7">
                        <img class="home-img" src="static/image/homepage.png">
                    </div>
                </div>   
            </div>
        </section>
        <!-- /* Second Section END*/ -->

        <!-- /* Service Section */ -->
        <section>
            <div class="container">
                <h1 class="our-ser">Our Services</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-center">
                            <img class="service-img" src="static/image/digitalmarketing.png">
                            <h2>Digital Marketing</h2>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-center">
                            <img class="service-img" src="static/image/development.png">
                            <h2>Development</h2>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="img-center">
                            <img class="service-img" src="static/image/designing.png">
                            <h2>Designing</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /* Service Section END */ -->

        <!-- Process Section -->
        <section>
            <div class="container">
                <h1>OUR PROCESS</h1>
                <!-- <div class="row">
                    <div class="col">
                        <img class="page3-img" src="static/image/page3.png">
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-md-3">
                    <img class="page3-img" src="static/image/process3.1.png">
                        <h2 class="page3-sec">collect information</h2>
                    </div>

                    <div class="col-md-3">
                    <img class="page3-img" src="static/image/process3.2.png">
                        <h2 class="page3-sec">research</h2>
                    </div>

                    <div class="col-md-3">
                    <img class="page3-img" src="static/image/process3.4.png">
                        <h2 class="page3-sec">build design concepts</h2>
                    </div>

                    <div class="col-md-3">  
                    <img class="page3-img" src="static/image/process3.4.png">
                        <h2 class="page3-sec">production & completion</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Process Section END -->

        <!-- Contact Section -->
        <section>
            <div class="container-fluid">
                <h1>Contact Us</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-us">
                            <p style="text-align:center">Don't miss ay update from us</p>
                       
                            <form class="contact-form" method="post" action="index.php">
                            <div class="row">
                                <input class="form-control form-control-cust " type="text" name="name" placeholder="Your Your Name ">
                            </div>
                            <div class="row">
                                <input class="form-control form-control-cust " type="text" name="email" placeholder="Your Your Email">
                                </div>
                                <div class="row">
                                <input class="form-control form-control-cust " type="text" name="phone" placeholder="Your Your Phone">
                                </div>
                                <div class="row">
                                <button class="btn btn-outline btn-radius" name="submit" type="submit">Subscribe now</button>    
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <img class="contact-img" src="static/image/contactus.png">
                    </div>
                </div>
            </div>
        </section>


        <?php 
            if(isset($_POST['submit'])){

                $server = "localhost";
                $username = "root";
                $password = "";
                $database = "infinity_market";

                $con = mysqli_connect($server, $username, $password, $database);

                if(!$con){
                    die("Connect is faild" . mysqli_connect_error());
                }
                else{
                    echo "Connection is successful";
                }


                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $sql = "INSERT INTO `db_infinity` (`id`, `name`, `email`, `phone`) VALUES (NULL, '$name', '$email', '$phone')";

                if($con->query($sql) == true){
                    $insert = true;
                }
                else{
                    echo "ERROR: $sql <br> $con->error";
                }

                $con->close();

            }
        ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>