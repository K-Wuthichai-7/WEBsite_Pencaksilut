<?php

session_start();
require_once 'config/db.php';

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
    <link href="home/css/styles.css" rel="stylesheet" />

    

<body>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="home/video/Silut p..mp4" type="video/mp4" />
    </video>
    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <h1 class="fst-italic lh-1 mb-4 text-danger">คอร์สออนไลน์ ฟรี</h1>
                <h2 class="fst-italic lh-1 mb-4">ท่ารำ ปันจักสีลัต </h2>
                <p class="mb-5 fs-6"> ปันจักสีลัต (Pencak Silat) เป็นคำที่มาจากภาษาอินโดนีเซียมาจากคำว่า ปันจัก (Pencak) หมายถึงการป้องกันตนเอง และคำว่า สีลัต(Silat) หมายถึงศิลปะ รวมความแล้วหมายถึงศิลปะการป้องกันตนเอง <button class="btn btn-light  "><a href="https://www.thaipbs.or.th/news/content/315406" target="_blank">อ่านเพิ่มเติม </a> </button></p> 

                <a class="btn btn-primary fs-3" href="/php-register/signin.php"> เข้าสู่บทเรียน </a>

            </div>
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
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-bottom  style=" z-index: 999;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img width="280px" height="60px" src="./img/logo.gif"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNavAltMarkup">
                <div class="navbar-nav  ">
                    <a class="nav-link active h4" aria-current="page" href="#">Home</a>
                    <a class="nav-link active h4" href="./menu/about.php">About</a>
                    <a class="nav-link active h4" href="./menu/team.php">Team</a>
                    <a class="nav-link active h4" href="./menu/contact.php">Contact</a>
                </div>
            </div>
        </div>
       
    </nav>

    
    <footer class="bg-light ">
        <p class="credit ">Photo Credit : Adobe Stock</p>
    </footer>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="home/js/scripts.js"></script>
</body>

</html>