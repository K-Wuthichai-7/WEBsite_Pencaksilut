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
                <h1 class="mt-4 text-center text-white"><strong> JURUS 9</strong></h1>
                <h3><code>Interval 8-9</code> </h3>
                <p>

                    1. วางเท้าขวาลงกลับไปท่าขี่ม้าอีกครั้ง จากนั้นดึงมีดเข้ามาแนบข้างลำตัว ให้ปลายมีดชี้ไปข้างหน้า มือซ้ายยกนิ้วตั้งขึ้น เข้ามาแนบใกล้ข้างมีด <br>
                    2. มือถือมีดค่อยๆ แทงออกไปข้างหน้าตนเองอย่างช้าๆ พร้อมกับมือซ้ายค่อยๆยกชี้ขึ้นฟ้า เหนือศรีษะตน


                </p>
                <hr>

                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5"><img src="../img/9.jpg" class="img-thumbnail" alt="#"></div>
                    <div class="col"></div>
                </div>

                <h3><code><strong> Jurus 9 </strong></code></h3>
                <p>

                    1. ยกเข่าขวาขึ้น ดึงมีดเข้าที่หน้าอกตน มือซ้ายเลื่อนมาที่บริเวณหน้าท้องตน จากนั้นหมุนตัวเองไปทางด้านหลังโดยใช้เท้าซ้ายเป็นหลักของตน โดยหมุนไปทางขวา <br>
                    2. วางเท้าขวาลงให้นำหน้าตน จากนั้นยื่นมีดออกไปข้างหน้า เฉียงขึ้น 45 องศาเหนือตน มือซ้ายยกป้องกัน <br>
                    3. บิดเฉพาะลำตัวและศรีษะกลับมาด้านหน้า โดยบิดไปทางซ้าย <br>
                    4. ก้าวเท้าขวามาข้างหน้า พร้อมกับยกมีดเหนือศรีษะ เพื่อเตรียมฟัน จากนั้นฟันมีดไปในลักษณะตวัดจากข้างล่างขึ้นข้างบน <br>
                    5. ก้าวเท้าซ้ายไปข้างหน้า แล้วบิดหมุนลำตัว 1 รอบตนเอง ( 360 องศา ) ไปทางขวา แล้วนั่งลงโดยขาซ้ายวางพื้นงอเข่ามาขนานกับตัว ขาขวาวางเหนือขาซ้ายคล้ายกับท่านั่งสมาธิ แต่ขาขวาไม่สัมผัสกับขาซ้าย มือทั้งสองข้างกางแขนออกข้างลำตัว <br>
                    6. เอี้ยวตัวไปทางด้านขวา ให้ขาขวาแนบกับพื้น มือขวาถือมีดวางบนพื้น ขาซ้ายเหยียดตรงวางเท้ากับพื้น มือซ้ายยกขึ้นป้องกันตนเหนือศรีษะ <br>
                    7. จากนั้นลุกขึ้น ให้เท้าซ้ายอยู่ข้างหน้า ตัวเฉียงเล็กน้อย มือซ้ายยื่นมือป้องไปข้างหน้า มือขวาใข้นิ้วกลับมีดให้กลับด้าน (ตัวมีดอยู่ด้านล่าง) แล้วแทงออกไปทางข้างหน้า ในขณะเดียวกันมือซ้ายดึงกลับมาป้องกันตนที่หน้าอก <br>
                    8. มือขวาพลิกมีดให้ใบมีดกลับมาอยู่ด้านบน จากนั้นชี้มีดไปข้างหน้า เฉียง 45 องศา เหนือศรีษะ ในขณะมือซ้ายกำหมัดชี้ไปข้างหน้าขนานกับมือขวาด้วย จากนั้นยกเข่าขวาขี้น แล้วดึงมือทั้งสองให้มาอยู่เหนือเข่า โดยให้มือขวาปลายมีดชี้ขึ้นฟ้า มือซ้ายกำหมัดหลังมือชี้ฟ้า

                </p>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://www.youtube.com/embed/vJV8j1W2a0Q" title="Interval 8 9 and Jurus 9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" href="../intro/part8.php" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part10.php">10</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part11.php">11</a></li>
                            <li class="page-item">
                                <a class="page-link" href="../intro/part10.php">Next</a>
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