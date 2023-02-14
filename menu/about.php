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
                            <div class="row mt-5">
                                <div class="col"></div>
                                <div class="col-lg-3">
                                    <div class="text-center ">
                                        <img src="../img/happy-learn.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col"></div>

                            </div>
                            <div class="row mt-3 ">
                                <div class="col"></div>
                                <div class="col-lg-10  text-start">
                                    <p class="large text-muted ">
                                        <strong> &nbsp; &nbsp; &nbsp; &nbsp; หลักการและเหตุผล ความเป็นมาและความสำคัญ </strong>
                                        การกีฬา มีความสำคัญต่อการพัฒนาคุณภาพชีวิตของประชาชน ทั้งในด้านสุขภาพ และพลานามัย และด้านจิตใจเป็นปัจจัยที่สำคัญที่ทำให้ประชาชนสามารถพัฒนาคุณภาพชีวิตของตนเอง ครอบครัว ชุมชน และสังคม นำไปสู่การมีส่วนร่วมในการพัฒนาเศรษฐกิจ สังคม การเมืองได้อย่างมีประสิทธิภาพ
                                        ซึ่งกีฬาปันจักสีลัตนั้น เป็นหนึ่งในกีฬาที่ถูกนำไปใช้เป็นเครื่องมือ เพื่อสร้างความเข้มแข็งของครอบครัว และชุมชน ซึ่งในประเทศที่พัฒนาแล้วทั่วโลก จะอาศัยกระบวนการของกีฬา เพื่อสร้างการมีส่วนร่วม เพื่อสร้างเครือข่ายชุมชน ตลอดจนการสร้างจิตสำนึกในการดำรงชีวิตที่มีคุณธรรม มีวินัย และมีความรับผิดชอบต่อหน้าที่ เคารพในสิทธิของตนเองและผู้อื่น <br>
                                        &nbsp; &nbsp; &nbsp; &nbsp;แม้ถึงกระนั้นตำราหรือสื่อการสอนสำหรับการฝึกประเภทร่ายรำการต่อสู้แบบเดี่ยว (Tungaal) นั้นนับนับว่ายังมีอยู่น้อยมาก โดยเฉพาะเนื้อหาการสอนและอธิบายที่เป็นภาษาไทย ทำให้ผู้ที่มีความสนใจจะเรียนท่ารำนั้นศึกษาได้ยาก และลำบากต้องอาศัยจากการลอกจำกระบวนท่าของนักกีฬาจากต่างประเทศ
                                        หรือตำราจากต่างประเทศแต่ก็เป็นภาษาอื่น ซึ่งส่งผลให้เมื่อศึกษาแล้วยังไม่อาจเกิดความเข้าใจเท่าที่ควรได้ <br>
                                        &nbsp; &nbsp; &nbsp; &nbsp;นักศึกษาจึงมีความคิดเห็นว่าหากทำสื่อการสอนที่มีเนื้อหาเป็นภาษาไทยแล้ว ก็ย่อมที่จะทำให้เกิดความเข้าใจได้โดยง่าย ประกอบกับนักศึกษานั้นได้เรียนในสาชาเทคโนโลยีธุรกิจดิจิทัล จึงนำมาประยุกต์เป็นการสร้างเว็บไซต์สื่อการสอน เรื่อง ท่ารำบุคคลเดี่ยว (Tunggal) กีฬาปันจักสีลัตด้วย Visual Studio Code 
                                        ซึ่งจะช่วยให้มีเนื้อหาในการศึกษาแก่ผู้ที่สนใจได้นำไปศึกษาและสร้างนักกีฬาประเภทนี้ให้เพิ่มมากขึ้นต่อไปในอนาคตภายภาคหน้าได้ นอกจากนี้การที่สร้างสื่อการสอนในรูปแบบของเว็บไซต์นั้น ยังก่อให้เกิดความสะดวกสบายแก่ผู้เรียน ซึ่งสามารถศึกษาในเวลาไหน สถานที่ไหนก็ได้อีกด้วย.
                                    </p>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>

    </div>
    <!-- Social Icons-->


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
                    <a class="nav-link active h4" aria-current="page" href="../index.php">Home</a>
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