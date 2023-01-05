<?php

session_start();
require_once 'config/db.php';
if (!isset($_SESSION['user_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: signin.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="intro/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex" id="wrapper">
        <?php

        if (isset($_SESSION['user_login'])) {
            $user_id = $_SESSION['user_login'];
            $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        ?>

        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light text-center ">บทเรียน</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#">หน้าแรก</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part1.php">ตอนที่ 1</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part2.php">ตอนที่ 2</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part3.php">ตอนที่ 3</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part4.php">ตอนที่ 4</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part5.php">ตอนที่ 5</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part6.php">ตอนที่ 6</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part7.php">ตอนที่ 7</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part8.php">ตอนที่ 8</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part9.php">ตอนที่ 9</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part10.php">ตอนที่ 10</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part11.php">ตอนที่ 11</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part12.php">ตอนที่ 12</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part13.php">ตอนที่ 13</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="intro/part14.php">ตอนที่ 14</a>

            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom ">
                <div class="container-fluid   ">
                    <button class="btn btn-primary" id="sidebarToggle"> Menu</button>



                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="./home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <button class="btn btn-secondary dropdown-toggle" class="nav-link " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg> <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></button>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="signin.php">ลงชื่อเข้าใช้ใหม่</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="home.php">ออกจากระบบ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            
            <!-- accordion -->
            <div class="accordion accordion-flush " id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed bg-secondary  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <h6><strong> ประวัติความเป็นมา </strong></h6>
                        </button>
                    </h2>
           
            <div class="container">

                    <div id="flush-collapseOne" class="accordion-collapse collapse " aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" >
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-lg-4"><img src="./img/pak_rifai.png" class="img-thumbnail" alt="#"></div>
                                <div class="col"></div>
                            </div>
                            <blockquote><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ประวัติของท่ารำเดี่ยว (Tungaal) กีฬาปันจักสีลัต </strong>
                            ในปี พ.ศ.2339 รัฐบาลของเนเธอร์แลนด์ได้เข้าควบคุมอินโดนีเซีย ในฐานะของเจ้าอาณานิคม ทำให้การฝึกอบรมและการศึกษากีฬาปันจักสีลัตเป็นเรื่องที่ผิดกฎหมาย การฝึกปันจักสีลัตจะต้องทำในที่ลับตาคนและฝึกในเวลาช่วงกลางคืนเท่านั้น เพื่อไม่ให้เป็นที่สังเกตของรัฐบาลเนเธอร์แลนด์
                            ซึ่งเป็นที่มาของการพัฒนาชุดปันจักสีลัตให้เป็นสีดำ เพื่อให้สอดคล้องกับสภาพแวดล้อมในขณะนั้น ต่อมาในปี พ.ศ.2485 ประเทศญี่ปุ่นได้เข้ายึดครองอินโดนีเซีย แต่ได้มีการอนุญาตให้ปันจักสีลัตสามารถฝึกฝนและพัฒนาต่อไปได้
                            จนเมื่อวันที่ 17 สิงหาคม พ.ศ.2488 อินโดนีเซียได้ประกาศเอกราชอย่างสมบูรณ์และเริ่มพัฒนาประเทศตามแนวทางของตนเอง ซึ่งหมายถึงการรวมเป็นหนึ่งและทำให้กีฬาปันจักสีลัตซึ่งก่อนหน้านี้ มีอยู่หลายร้อยสำนักที่มีอยู่ทั่วภูมิภาคให้เป็นอันหนึ่งเดียวกันอย่างเป็นทางการ
                            หลังจากนั้นเมื่อวันที่ 18 พฤษภาคม พ.ศ.2491 หน่วย IPSI (Ikatan Pencak Silat Indonesia) หรือสมาพันธ์ของกีฬาปันจักสีลัตทั้งหมดในอินโดนีเซียได้ก่อตั้งขึ้น ทำให้เป็นหนึ่งในองค์กรศิลปะการต่อสู้ระดับชาติที่เก่าแก่ที่สุดในโลก และต่อมาได้ก่อตั้ง PERSILAT องค์กร International Pencak Silat ในปี พ.ศ.2523 ซึ่งรวมถึงประเทศมาเลเซีย
                            สิงคโปร์และบรูไน ได้รวมตัวกันเพื่อการสร้างมาตรฐานเทคนิคของกีฬาปันจักสีลัต สำหรับใช้ในการแข่งขันเป็นสากลให้เกิดขึ้น จึงเริ่มก่อตั้ง Jurus Tunggal "คณะกรรมการท่ารำเดี่ยว" ซึ่งแปลว่า "คณะลูกขุนเดี่ยว" ยังเรียกอีกชื่อหนึ่งว่า คณะตุงกัลบากู (หรือคณะกรรมการเดี่ยวมาตรฐาน) และเรียกอีกชื่อหนึ่งว่า คณะกรรมการวาจิบตุงกัล (หรือคณะกรรมการเดี่ยวที่ได้รับมอบอำนาจ)
                            ซึ่งเป็นทีมผู้เชี่ยวชาญทางเทคนิคประกอบด้วยผู้เชี่ยวชาญจากสโมสรและโรงเรียนต่าง ๆ ของกีฬาปันจักสีลัต ได้นำปรมาจารย์จากประเทศอินโดนีเซีย มาเลเซีย สิงคโปร์ และบรูไน มาร่วมทีม
                            โดยทีมงานได้ศึกษากฎและการเคลื่อนไหวท่ารำหลายร้อยแบบแล้วพยายามนำมารวมกันโดยไม่ให้สูญเสียเอกลักษณ์ที่โดดเด่นของปันจักสีลัต นอกจากนี้ยังได้กำหนดมาตรฐานของเครื่องแต่งกายที่จำเป็นสำหรับ Jurus Tunggal โดยเป็นรูปแบบของโสร่งหรือ Ikat dan Kain Samping ซึ่งเป็นชุดตามวัฒนธรรมที่มักจะสวมใส่อย่างเป็นทางการโดยบุคคลสำคัญในราชวงศ์และเจ้าหน้าที่รักษาความปลอดภัยของพระราชวัง
                            ซึ่งหลายคนมีความสามารถในท่ารำเดี่ยวในกีฬาปันจักสีลัตด้วย ให้เป็นปัจจุบันซึ่งเป็นเครื่องแต่งกายอย่างเป็นทางการสำหรับผู้ปฏิบัติหน้าที่ในกีฬาปันจักสีลัต และจำเป็นสำหรับ Jurus Tunggal "คณะกรรมการท่ารำเดี่ยว" ซึ่งใช้เวลากว่า 3 ปีในการจัดทำมาตรฐานของท่ารำเดี่ยว รวมถึง Jurus Tunggal "คณะกรรมการท่ารำเดี่ยว" ให้เสร็จสมบูรณ์
                            โดยหนึ่งในสมาชิกที่มีอิทธิพลมากที่สุดในทีมคือ Pak Rifal Sahib Pak Rifai เกิดในกรุงจาการ์ตา ได้ศึกษาท่วงท่าการรำ นอกเหนือจากรูปแบบเบตาวีอีกหลายแบบ โดยมีความสามารถในระดับเชี่ยวชาญทั้งหมด ซึ่ง Pak Rifal นั้นได้ทำงานอย่างกว้างขวางเพื่อส่งเสริมและพัฒนาด้านศิลปะของท่ารำเดี่ยวในกีฬาปันจักสีลัต ทั่วโลก รวมถึงในสวิตเซอร์แลนด์ เยอรมนี ออสเตรเลีย และเยเมน อีกด้วย
                            Pak Rifai ได้ใช้ท่วงท่าจากปรมาจารย์แต่ละคนและผสมผสานเข้าด้วยกันอย่างเชี่ยวชาญเป็นชุดการเคลื่อนไหวที่ลื่นไหลในแต่ละกระบวนท่า ซึ่งปัจจุบันรู้จักกันในชื่อ Tunggal (ท่ารำเดี่ยว) นั้นเอง เขายังได้เพิ่มมุมมองที่ไม่เหมือนใครในฐานะผู้เชี่ยวชาญของท่ารำเดี่ยว ในคณะกรรมการท่ารำเดี่ยวอีกด้วย โดย Pak Rifai ได้เสียชีวิตลงในปี พ.ศ.2557
                            การแข่งขันกีฬาปันจักสีลัตครั้งแรกที่มีรายการประเภท ท่ารำเดี่ยว (Tunggal) เกิดขึ้นที่งานการแข่งขันกีฬาแห่งชาติอินโดนีเซีย (PON) ที่เมืองสุราบายาในปี พ.ศ.2543 และในปี พ.ศ. 2544 รายการประเภท ท่ารำเดี่ยว (Tunggal) ได้เข้าร่วมการแข่งขันระดับนานาชาติเป็นครั้งแรกในการแข่งขันกีฬาเอเชียตะวันออกเฉียงใต้ที่ประเทศมาเลเซีย ในปัจจุบัน ท่ารำเดี่ยว (Tunggal) ได้รับการสอนและแข่งขันในโรงเรียน มหาวิทยาลัยต่างๆ
                            รายการแข่งขันปันจักสีลัตระดับภูมิภาคและการแข่งขันต่างๆ ทั่วโลก รวมถึงในสหรัฐอเมริกา ในปี พ.ศ.2553 ชาวอเมริกันคนแรกได้เข้าร่วมการแข่งขันประเภท ท่ารำเดี่ยว (Tunggal) ที่ World Pencak Silat Championships ในกรุงจาการ์ตา ประเทศอินโดนีเซีย แม้ว่าการแข่งขันประเภท ท่ารำเดี่ยว (Tunggal) จะแสดงอย่างเงียบ ๆ โดยไม่ตะโกนหรือตะโกน ในระหว่างการแข่งขัน ได้กลายเป็นประเพณีของทีมนักกีฬาปันจักสีลัต
                            ในการเชียร์คู่แข่งในขณะที่นักกีฬากำลังแสดงประเภท ท่ารำเดี่ยว (Tunggal) โดยทั้งทีมจะโห่ร้องพร้อมกันในแต่ละนัด สิ่งนี้นำความตื่นเต้นมาสู่การแข่งขันและทำให้การแข่งขันประเภท ท่ารำเดี่ยว (Tunggal) น่าสนใจยิ่งขึ้นในการรับชมซึ่งสามารถพบเห็นได้ในปัจจุบันนั้นเอง 
                            ดังนั้นแล้วการเรียนรู้และฝึกฝนใน ท่ารำเดี่ยว (Tunggal) เท่ากับว่าได้ช่วยรักษามรดกของกีฬาปันจักสีลัต และปรมาจารย์ทั้งหลายทั้งปวงที่มีส่วนร่วมในการสร้างกระบวนท่ารำเดี่ยว (Tunggal) รวมถึงวัฒนธรรมของอาเซียนไว้อีกด้วย. <br>
                            <br>

                            ที่มา : https://silat.net/history-of-jurus-tunggal/
                            </blockquote>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- accordion -->
            <!-- Page content-->
            <div class="container">
                <h1 class="mt-4 text-center text-primary"><strong> อธิบายท่ารำเบื้องต้น </strong></h1>

                <h5> Jurus Tunggal เป็นรูปแบบ Pencak Silat ที่ได้รับการยอมรับในระดับสากลซึ่งประกอบด้วย 100 กระบวนท่าการเคลื่อนไหวโดยแบ่งออกเป็น 14 ชุดหรือ Jurus ซึ่งจะแบ่งออกเป็น 3 ส่วน ได้แก่ <br>
                    <br>
                    <code>
                        1. หมวดมือเปล่า มีทั้งหมด 50 กระบวนท่า <br>
                        2. หมวดโกลกหรือมีด มีทั้งหมด 25 กระบวนท่า <br>
                        3. หมวดโทยะหรือไม้กระบอง มีทั้งหมด 25 กระบวนท่า <br>
                    </code>

                </h5>
                <hr>

                <!-- slider -->
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-7">
                        <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13" aria-label="Slide 14"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="4000">
                                    <img src="img/1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 1</code></h1>

                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/2.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 2</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/3.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 3</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/4.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 4</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/5.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 5</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/6.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 6</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/7.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 7</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/8.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 8</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/9.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 9</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/10.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 10</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/11.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 11</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/12.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 12</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/13.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 13</code></h1>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <img src="img/14.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h1> <code>SET 14</code></h1>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>


                <!-- slider -->
                <br>
                <h5>
                    รวมการเคลื่อนไหวทั้งหมด 100 กระบวนท่า ซึ่งจะต้องแสดงให้เสร็จสิ้นภายใน 3 นาที
                    นักกีฬาจะถูกตัดสินจากคุณภาพของการเคลื่อนไหวและความถูกต้องของการเคลื่อนไหวตามกระบวนท่า
                    โดยคะแนนจะถูกหักสำหรับเทคนิคที่ไม่ถูกต้อง, การแต่งกายที่ไม่เหมาะสม, ใช้เวลาน้อยกว่าหรือเกินกว่า 3 นาที, การวางอาวุธที่ผิดตำแหน่งต่างๆในท่ารำ,
                    การแสดงท่าอื่นๆที่ไม่ได้อยู่ในท่ารำหรือออกนอกขอบเขตของกระบวนท่า เป็นต้น
                </h5>
            </div>

        
    </div>
    </div>
    </div>
    <nav aria-label="Page navigation example ">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="intro/part1.php">1</a></li>
            <li class="page-item"><a class="page-link" href="intro/part2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="intro/part3.php">3</a></li>
            <li class="page-item">
                <a class="page-link" href="intro/part1.php">Next</a>
            </li>
        </ul>
    </nav>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="intro/js/scripts.js"></script>
</body>

</html>