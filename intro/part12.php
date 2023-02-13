<?php

session_start();
require_once '../config/db.php';
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
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            /* The image used */
            background-image: url("../img/black-gradient.jpg");
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;

        }

        .bg-deep {
            background-color: #e0dfdc;
        }
    </style>
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
            <div class="sidebar-heading border-bottom bg-light text-center text-black">บทเรียน</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../user.php">หน้าแรก</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part1.php">ตอนที่ 1</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part2.php">ตอนที่ 2</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part3.php">ตอนที่ 3</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part4.php">ตอนที่ 4</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part5.php">ตอนที่ 5</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part6.php">ตอนที่ 6</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part7.php">ตอนที่ 7</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part8.php">ตอนที่ 8</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part9.php">ตอนที่ 9</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part10.php">ตอนที่ 10</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part11.php">ตอนที่ 11</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part12.php">ตอนที่ 12</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part13.php">ตอนที่ 13</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="part14.php">ตอนที่ 14</a>

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
                            <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <button class="btn btn-secondary dropdown-toggle" class="nav-link " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg> <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></button>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../signin.php">ลงชื่อเข้าใช้ใหม่</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../index.php">ออกจากระบบ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->

            <div class="container">
                <h1 class="mt-4 text-center text-white"><strong> JURUS 12</strong></h1>
                <h3><code>Interval 11-12</code> </h3>
                <p>


                    1. หลังจากฟาดไม้ไปแล้ว ยกไม้ตั้งชี้ขึ้นฟ้า ยกมือขวาขยับขึ้นไปจับตรงปลายไม้ช่วงบน <br>
                    2. หันหน้าไปทางซ้าย จากนั้นก้าวขาซ้ายออกไปด้านข้างให้ขนานกับเท้าขวา กลับด้านไม้ให้ด้านที่มือซ้ายถือชี้ขึ้นฟ้า



                </p>
                <hr>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5"><img src="../img/12.jpg" class="img-thumbnail" alt="#"></div>
                    <div class="col"></div>
                </div>

                <h3><code><strong> Jurus 12 </strong></code></h3>
                <p>

                    1. ยกเข่าขวาขึ้น จากนั้นใช้เท้าซ้ายดีดตนเองให้ลอยขึ้นมาเล็กน้อยเหนือพื้นไปข้างหน้า <br>
                    2. ใช้เท้าขวาวางพื้น จากนั้นวางเท้าซ้ายให้ขนานกับเท้าขวา ห่างกันเลย 1 ช่วงหัวไหล่เล็กน้อย <br>
                    3. ยกไม้ขึ้นเตรียมฟาดไปด้านหลังทางขวาบริเวณคอของตน จากนั้นฟาดไม้ออกไปข้างหน้าจากด้านขวา <br>
                    4. เหวี่ยงไม้เหนือข้ามศรีษะในลักษณะวนไปด้านหลังผ่านเหนือศรีษะไปทางซ้าย แล้วฟาดไปข้างหน้าจากทางซ้าย <br>
                    5. ขยับเท้าขวามาชิดเท้าซ้าย แล้วก้าวขาขวามาข้างหน้า เหวี่ยงไม้ข้ามศรีษะะตามข้อ 4 แต่ให้วนไปด้านหลังทางขวา ( ทิศทางตรงกันข้ามกับข้อ 4 ) จากนั้นดึงไม้ไปทางด้านหลังเตรียมกระทุ้งทางข้างลำตัวด้านซ้าย <br>
                    6. กระทุ้งไม้ไปข้างหน้าเพื่อโจมตีคู่ต่อสู้ จากนั้นหันข้างมาทางด้านซ้ายของตนเอง ยกเข่าขวาขึ้น เหวี่ยงไม้มือขวาไปข้างหน้า แล้วเหวี่ยงไม้มือซ้ายไปข้างหน้าพร้อมกับดึงไม้ฝั่งมือขวาเข้ามาชิดข้างลำตัวทางขวา <br>
                    7. ก้าวเท้าขวาไปทางขวา จากนั้นเหวี่ยงไม้หมุนรอบวงกลม โดยหมุนไปทางขวาเหนือศรีษะ แล้วปล่อยมือซ้ายจากไม้ออกยกขึ้นป้องกันตน มือขวาเลื่อนมาจับไม้ช่วงกลางของไม้ ให้นิ้วชี้ชี้ลงไปที่พื้นข้างลำตัวด้านขวา เฉียงลงประมาณ 45 องศา


                </p>

                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://www.youtube.com/embed/SDNg3ZbcUxo" title="Interval11 12 and Jurus12" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" href="../intro/part11.php" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">12</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part5.php">13</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part6.php">14</a></li>
                            <li class="page-item">
                                <a class="page-link" href="../intro/part13.php">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>