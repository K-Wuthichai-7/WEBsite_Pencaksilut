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
                <h1 class="mt-4 text-center text-white"><strong> JURUS 10</strong></h1>
                <h3><code>Interval 9-10</code> </h3>
                <p>

                    1. วางเท้าขวาลงพื้น ก้าวเท้าซ้ายไปข้างหน้าแล้วนั่งคุกเข่าลงแต่ไม่ต้องให้สะโพกติดกับส้นเท้า เข่าซ้ายตั้งขึ้น <br>
                    2. มือทั้งสองข้างวาดร่ายให้มือขวาลงล่าง มือซ้ายอยู่ข้างบนมือชี้ฟ้า


                </p>
                <hr>

                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5"><img src="../img/10.jpg" class="img-thumbnail" alt="#"></div>
                    <div class="col"></div>
                </div>

                <h3><code><strong> Jurus 10 </strong></code></h3>
                <p>

                    1. ยกเท้าขวามาวางขนานเท้าซ้าย จากนั้นสืบเท้าขวาไปด้านข้าง แล้วหันตัวไปทางด้านขวา มือซ้ายป้องกัน มือขวาฟันมีดไปข้างหน้า <br>
                    2. บิดตัวและก้าวเท้าขวาไปด้านหลัง โดยบิดไปทางซ้าย และก้าวเท้าขวาไปข้างหน้าแต่ให้ก้าวไปทางด้านหลังของตน พร้อมกับผายมือออก มือขวาลงล่าง มือซ้ายชี้ขึ้นบน <br>
                    3. บิดตัวไปทางด้านซ้ายของตน ซึ่งเท้าซ้ายจะอยู่ข้างหน้า มือขวาฟันมีดลงล่าง มือซ้ายยกขึ้นป้องกัน <br>
                    4. ก้าวเท้าซ้ายถอยไปข้างหลัง แล้วผายแขนออกทั้งสองข้างขนานลำตัว <br>
                    5. ก้าวเท้าซ้ายไปข้างหน้า วาดมือทั้งในลักษณะวนออกมาข้างหน้าโดยให้มือขวาอยู่ข้างหน้ามือซ้าย ส่วนมือซ้ายป้องกันใบหน้า <br>
                    6. หันไปทางขวา ฟันมีดออกไปข้างหน้า จากนั้นกลับหลังหัน โดยหันไปทางซ้าย พร้อมกับมือขวาพลิกมีดให้ใบมีดอยู่ด้านล่าง จากนั้นนำมาไว้หน้าตนในลักษณะคล้ายท่าขัดฉาก ให้มือขวาอยู่บนมือซ้ายอยู่ล่าง แต่แขนทั้งสองไม่สัมผัสกัน <br>
                    7. หันไปทางซ้าย ก้าวเท้าขวาไปข้างหน้า มือขวาพลิกใบมีดกลับมาอยู่ด้านบน แล้วฟันไปข้างหน้าบริเวณศรีษะ <br>
                    8. กลับหลังหันมาทางด้านซ้าย จากนั้นก้าวเท้าขวามาข้างหน้า มือขวาฟันมีดลงไปข้างหน้า ลักษระฟันบนลงล่าง <br>
                    9. สืบเท้าซ้ายไปข้างหน้าแบบเฉียง 45 องศา จากนั้นมือขวาพลิกมีดให้ใบมีดลงล่าง แล้วฟันไปบริเวณใบหน้าคู่ต่อสู้ มือซ้ายยกป้องกัน <br>
                    10. ย้ายมีดจากมือขวามาไว้ในมือซ้าย พร้อมกับพลิกใบมีดขึ้นชี้ข้างบน จากนั้นยกเข่าขวาขึ้นแล้ววางลงพร้อมกับยกเข่าซ้ายขึ้น ( คล้ายอาการเขย่งสลับเท้า ) <br>
                    11. ก้าวเท้าซ้ายถอยไปข้างหลังแล้วบิดตัวตามมา โดยบิดมาทางซ้าย จากนั้นมือซ้ายฟันมีดออกไปข้างหน้า มือขวายกป้องกัน <br>
                    12. ย้ายมีดจากมือซ้ายมาสู่มือขวา ยกเข่าซ้ายขึ้น วางลง ก้าวเท้าขวาไปทางด้านซ้ายของตนเอง โดยให้เท้าขวาอยู่ทางข้างหน้าของตน จากนั้นฟันมีดตรงๆ ในลักษณะบนลงล่าง มือซ้ายยกป้องกัน <br>
                    13. ถอยเท้าขวามาข้างหลัง จากนั้นคุกเข่าลง เข่าซ้ายตั้งพื้น ร่ายมือทั้งสองวนรอบจากซ้ายไปขวา โดยให้มือขวาอยู่ข้างขวา มือซ้ายยกป้องกัน <br>
                    14. ตีลังกาแบบม้วนหน้าไป 1 ครั้ง นั่งคุกเข่า ตั้งเข่าขวาขึ้น จากนั้นยกมีดขึ้นมาตรงใบหน้าด้วยมือทั้งสองข้าง แล้ววางมีดลง


                </p>

                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://www.youtube.com/embed/JEm9rQVYzhE" title="Interval 9   10 and Jurus10"></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" href="../intro/part9.php" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part11.php">11</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part12.php">12</a></li>
                            <li class="page-item">
                                <a class="page-link" href="../intro/part11.php">Next</a>
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