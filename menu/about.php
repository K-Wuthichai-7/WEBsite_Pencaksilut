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


    <!-- Team-->
    <div class="container-fluid">

        <div class="contact">

            <section class="page-section-team " id="contact">
                <div class="container-1">

                    <section class="page-section-team bg-light" id="team">
                        <div class="container">
                            <div class="text-center">
                                <h2 class="section-heading text-uppercase">เกี่ยวกับเรา </h2>
                                <h5 class="section-subheading text-muted">จุดเริ่มต้นของการสร้างเว็บไซร์สื่อการสอน Panchak Silat</h5>
                            </div>
                            <div class="row mt-4">
                                <div class="col"></div>
                                <div class="col-lg-4">
                                    <div class="text-center ">
                                       <img src="../img/happy-learn.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                
                                <div class="col"></div>

                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-8 mx-auto text-start">
                                    <p class="large text-muted">เกิดจากความต้องการที่จะเผยแพร่ท่ารำ <code> ปันจักสีลัต</code> ในรูปแบบออนไลน์สามารถเรียนที่ไหนเมื่อไรก็ได้ตามสะดวก Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis cupiditate sunt facilis officia saepe eius voluptate mollitia ipsum vel optio odio laborum, sint eligendi, enim quibusdam impedit ab magni nemo id! Harum asperiores iure minima alias ipsa eos. Commodi tenetur doloribus alias nisi esse saepe illo perferendis quaerat illum deserunt.</p>
                                </div>
                            </div>
                        </div>
                    </section>



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
                    <a class="nav-link active h4" href="#">About</a>
                    <a class="nav-link active h4" href="team.php">Team</a>
                    <a class="nav-link active h4" href="contact.php">Contact</a>
                </div>
            </div>
        </div>

    </nav>


    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="home/js/scripts.js"></script>
</body>

</html>