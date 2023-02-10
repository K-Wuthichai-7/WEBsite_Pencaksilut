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
                <h1 class="mt-4 text-center text-white"><strong> JURUS 6</strong></h1>
                <h3><code>Interval 5-6</code> </h3>
                <p>
                    1. ยกเข่าขวาขึ้น นำมือขวาหงายมือมาเข้าใกล้หัวเข่าขวา มือซ้ายตั้งป้องกันไว้บนหน้าอก <br>
                    2. ใช้เท้าซ้ายที่ยืนอยู่เป็นหลักหมุนรอบตัวเองไปทางด้านหลัง โดยหมุนไปทางขวา <br>
                    3. วางเท้าขวาลงกับพื้น โดยให้เท้าขวาอยู่ข้างหน้า

                </p>
                <hr>

                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5"><img src="../img/6.jpg" class="img-thumbnail" alt="#"></div>
                    <div class="col"></div>
                </div>

                <h3><code><strong> Jurus 6 </strong></code></h3>
                <p>

                    1. ยื่นมือขวาไปข้างหน้า มือซ้ายตั้งมือป้องกันบริเวณหน้าอก <br>
                    2. บิดลำตัวย้อนกลับมาทางด้านหลัง โดยที่เท้าทั้ง 2 ข้างอยู่กับที่ และมือขวายังอยู่ในตำแหน่งเดิมแต่เปลี่ยนเป็นกำมือแทน <br>
                    3. หมุนตัวกลับไปทางเดิม จากนั้นยกเข่าขวาขึ้น มือขวาเหยียดไปทางด้านหลังแบมือ มือซ้ายยกขึ้นเหนือศรีษะเล็กน้อย โดยให้นิ้วมือซ้ายชี้ไปทางด้านหลัง ศรีษะมองไปทางด้านหลัง <br>
                    4. ใช้เท้าซ้ายดีดตัวในลักษณะกระโดดเล็กน้อยพอประมาณ เพื่อกลับหลังหันไปข้างหลัง หลังจากนั้นเท้าทั้งสองข้างวางบนพื้น ให้เท้าซ้ายนำหน้าเท้าเล็กน้อย ระยะห่างประมาณ 1 ช่วงไหล่ <br>
                    5. ใช้มือซ้ายพลิกหลังมือไปด้านขวา ยื่นออกไปพอประมาณคล้ายจับตัวคู่ต่อสู้ จากนั้นยื่นมือขวาออกไปข้างหน้าให้สุด ยกขึ้นเหนือศรีษะประมาณมุม 60 องศา จากศรีษะ โดยให้มือทั้งสองข้างงุ้มมือคล้ายทำท่าเลียนแบบเหมือนมือของเสือ <br>
                    6. จากนั้นกระชากมือทั้งสองลงมา ให้อยู่ในระดับหน้าอกของตนเอง <br>
                    7. กวาดมือขวาลงล่าง แบมือ อยู่บริเวณหน้าอวัยวะเพศ กวาดมือซ้ายขึ้นบนแนบบริเวณหน้าอก แบมือ จากนั้นยกเข่าขวาขึ้น และเตะกดลงไปบริเวณข้อพับขาของคู่ต่อสู้ <br>
                    8. วางเท้าขวาลงพื้นให้เท้าขวานำเล็กน้อย เหยียดแขนทั้งสองข้างออกไปทางด้านขวาบน โดยให้แขนซ้ายงอแนบบริเวณหน้าอก มือทั้งสองแบบมือ <br>
                    9. เลื่อนเท้าซ้ายเขามาให้ใกล้กับลำตัว แต่ให้นำหน้าเท้าขวา นำมือทั้งสองข้างเคลื่อนมาป้องกันตนเอง โดยให้มือซ้ายนำหน้า มือขวาแนบหน้าอก โดยให้ทิศทางของตัวอยู่ทางด้านซ้าย เมื่อมองจากข้างหน้า


                </p>
                <hr>

                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://www.youtube.com/embed/Itsn0g-Nhuo" title="Interval 5 6 And Jurus 6"></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" href="../intro/part5.php" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part7.php">7</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part8.php">8</a></li>
                            <li class="page-item">
                                <a class="page-link" href="../intro/part7.php">Next</a>
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