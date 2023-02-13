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
            <!-- Page content-->
            <div class="container">
                <h1 class="mt-4 text-center text-white"><strong> JURUS 13</strong></h1>
                <h3><code>Interval 12-13</code> </h3>
                <p>


                    1. บิดลำตัวหันหน้าไปทางซ้ายของตนเอง ศรีษะมองตามไป ยื่นมือซ้ายที่ป้องกันตนออกไปข้างหน้าเล็กน้อย โดยยังคงลักษณะท่าป้องกันตามเดิม

                </p>
                <hr>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5"><img src="../img/13.jpg" class="img-thumbnail" alt="#"></div>
                    <div class="col"></div>
                </div>

                <h3><code><strong> Jurus 13 </strong></code></h3>
                <p>

                    1. สืบเท้าขวามาข้างหน้า เหวี่ยงไม้รอบหน้าศรีษะตน ในลักษณะหมุนไปทางซ้าย เมื่อหมุนเสร็จให้ตวัดไม้เพื่อโจมตีคู่ต่อสู้ 2 ครั้ง โดยตวัดหมุนไม้จากขวาไปซ้ายตามเข็มนาฬิกา โดยเมื่อทำครั้งแรกเสร็จ ให้ดึงเท้าซ้ายมาชิดเท้าขวา และสืบเท้าขวาไปข้างหน้าต่อพร้อมกับตวัดไม้โจมตีอีก 1 รอบ <br>
                    2. หลังจากนั้นก้าวเท้าซ้ายมาข้างหน้า ใช้ไม้ด้านที่จับด้วยมือซ้าย ฟาดไปข้างหน้าจากทางซ้าย<br>
                    3. เหวี่ยงไม้ทางมือจับข้างขวาในลักษณะเหวี่ยงลงให้ปลายไม้มือจับข้างขวาชี้ไปข้างหน้า จากนั้นดึงเท้าซ้ายมาชิดกับเท้าขวา <br>
                    4. เหวี่ยงไม้เป็นวงกลมตามเข็มนาฬิกา บริเวณหน้าศรีษะของตน เมื่อเหวี่ยงเสร็จไปปลายไม้ทางมือขวาชี้ลงพื้นเฉียงด้านขวาของตนประมาณ 45 องศา หน้าหันมาทางปลายไม้ทางขวาตาม <br>
                    5. ก้าวเท้าซ้ายถอยหลังออกไป ดึงไม้ถอยเข้ามาใกล้ตัวในลักษณะท่าเดิมตามข้อ 4 เพียงเล็กน้อย <br>
                    6. ปล่อยมือขวาออกจากไม้ ใช้มือซ้ายที่เหลือเหวี่ยงไปทางด้านหลังอย่างช้าๆ ลักษณะครึ่งวงกลมบนลงล่าง พร้อมกับใช้สายตาและศรีษะมองตามไม้ที่เหวี่ยงออกไปจนเสร็จ โดยให้ปลายไม้ชี้ลงพื้นไปทางด้านหลัง <br>
                    7. บิดลำตัวพร้อมหันศรีษะกลับหลังหันมาทางเดิม โดยหันมาจากทางขวา มือขวายกขึ้นป้องกันตน



                </p>

                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://www.youtube.com/embed/2rSd6-4mhe8" title="Jurus13" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" href="../intro/part12.php" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="../intro/part12.php">12</a></li>
                            <li class="page-item"><a class="page-link" href="#">13</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part14.php">14</a></li>
                            <li class="page-item">
                                <a class="page-link" href="../intro/part14.php">Next</a>
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