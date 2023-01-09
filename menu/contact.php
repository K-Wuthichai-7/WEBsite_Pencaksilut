<?php

session_start();
require_once '../config/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>คอร์สเรียนออนไลน์</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../home/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Background Video-->

    <!-- Masthead-->
    <div class="container-fluid">
    
        <div class="contact">

            <section class="page-section" id="contact">
                <div class="container-1">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase text-white " \>Contact Us</h2>
                        <h4 class="section-subheading text-white ">ติดต่อเรา</h4>
                    </div>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="https://formsubmit.co/495fdf657e5096d1fdd677656c369d6c " method="POST">
                        <div class="row align-items-stretch mb-5 mt-5">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <!-- Name input-->
                                    <input class="form-control is-invalid" id="name" name="Name" type="text" placeholder="Your Name *" data-sb-validations="required" data-sb-can-submit="no">
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <div class="form-group mt-2">
                                    <!-- Email address input-->
                                    <input class="form-control is-invalid" id="email" type="email" name="Email" placeholder="Your Email *" data-sb-validations="required,email" data-sb-can-submit="no">
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div class="form-group mt-2">
                                    <!-- Phone number input-->
                                    <input class="form-control is-invalid" id="phone" type="tel" name="Phone" placeholder="Your Phone *" data-sb-validations="required" data-sb-can-submit="no">
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-textarea ">
                                    <!-- Message input-->
                                    <textarea class="form-control is-invalid" id="message" name="Message" placeholder="Your Message *" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center text-white mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br>
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="text-center"><button class="btn btn-warning btn-xl hover-overlay   "  type="submit"> Send Message</button></div>
                    </form>
                </div>
            </section>
        </div>
        
    </div>
    <!-- Social Icons-->
    <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->

    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark m-3" href="https://web.facebook.com/get.richard1"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->


    <nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-bottom  style=" z-index: 999;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img width="280px" height="60px" src="../img/logo.gif"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNavAltMarkup">
                <div class="navbar-nav  ">
                    <a class="nav-link active h4" aria-current="page" href="../home.php">Home</a>
                    <a class="nav-link active h4" href="about.php">About</a>
                    <a class="nav-link active h4" href="team.php">Team</a>
                    <a class="nav-link active h4" href="#">Contact</a>
                </div>
            </div>
        </div>

    </nav>


    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="home/js/scripts.js"></script>
</body>

</html>