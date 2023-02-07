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
            background:#000;
            color: #fff;
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
            <div class="sidebar-heading border-bottom bg-light text-center  text-black">บทเรียน</div>
            <div class="list-group list-group-flush" >
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
                            <li class="nav-item active"><a class="nav-link" href="./home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <button class="btn btn-secondary dropdown-toggle" class="nav-link " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg> <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></button>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../signin.php">ลงชื่อเข้าใช้ใหม่</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../home.php">ออกจากระบบ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <!-- Page content-->
            <div class="container">
                <h1 class="mt-4 text-center text-white"><strong> JURUS 1</strong></h1>
                <h3><code>Intro</code> </h3>
                <p>

                    1. เริ่มต้นด้วยการยืนตำแหน่งตัวตรง เท้าทั้งสองข้างชิดติดเสมอกัน <br>
                    2. จากนั้นพนมมือด้วยกันให้ฝ่ามือทั้งสองอยู่ในตำแหน่งบริเวณหน้าอก วาดขึ้นไปข้างบนจนสุดแขน ถึงเหนือศรีษะ <br>
                    3. ผายมือออกทั้งซ้ายและขวาออกไปทางข้างทั้งสองพอประมาณ จากนั้นกลับมาพนมมือตามเดิม <br>
                    4. ลดมือที่พนมมือช้าๆกลับลงมาตำแหน่งที่หน้าอก <br>
                    5. เก็บแขนทั้งสองข้างพาดไว้ที่ตำแหน่งบริเวณหน้าท้อง โดยให้แขนซ้ายอยู่ข้างในและแขนขวาอยู่ข้างนอก <br>
                    6. ก้มศรีษะลงเล็กน้อย และสงบนิ่งเพื่อเตรียมรำในลำดับต่อไป

                </p>
                <hr>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5"><img src="../img/1.jpg" class="img-thumbnail" alt="#"></div>
                    <div class="col"></div>
                </div>

                <h3><code><strong> Jurus 1 </strong></code></h3>
                <p>

                    1. สืบเท้าซ้ายไปด้านหลัง <br>
                    2. วาดแขนซ้ายหมุนจากด้านหลังไปด้านหน้า และขาขวาหมุนจากด้านหน้าไปด้านหลัง แบมือออกทั้งสองข้าง <br>
                    3. ก้าวเท้าซ้ายมาชิดเสมอเท้าขวา <br>
                    4. ก้าวเท้าขวาในลักษณะเสียบพุ่งไปด้านหน้า พร้อมกับตบมือทั้งสองข้างขึ้นเหนือศรีษะแล้วดันฝ่ามือไปข้างหน้าเพื่อผลักคู่ต่อสู้ <br>
                    5. จากนั้นทำการผลักฝ่ามือขวาออกไปคล้ายลักษณะเหมือนชักกะเย่อ กำหมัดขวาเก็บไว้ข้างลำตัว มือซ้ายแบมือตั้งขนานบริเวณหน้าท้อง <br>
                    6. ยื่นมือทั้งสองข้างไปข้างหน้าในลักษณะจับไหล่เพื่อแทงเข่าคู่ต่อสู้ ตามด้วยใช้เข่าซ้ายยกตั้งฉากขนานกับพื้น <br>
                    7. ตามด้วยการเตะเท้าขวาไปที่ลิ้นปี่ ในลักษณะกระโดดสลับเท้า <br>
                    8. มือขวาอยู่หน้าอก มือซ้ายขนานบริเวณหน้าท้อง จากนั้นใช้มือขวาชกไปที่บริเวณใบหน้าคู่ต่อสู้ ทางตำแหน่งด้านซ้ายของตนเอง <br>
                    9. ปิดท้ายด้วยการป้องกันตนเอง โดยยื่นแขนซ้ายออกไปให้สุดในลักษณะยกขึ้นป้องกัน แขนขวาดึงมาเก็บในข้างลำตัว <br>

                </p>

                <hr>

                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://www.youtube.com/embed/mXaWONoNgk4" title="Intro and Jurus1"></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                   
                   
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" href="../user.php" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part2.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part3.php">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="../intro/part2.php">Next</a>
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