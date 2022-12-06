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
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">ตอนที่ 5</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">ตอนที่ 6</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">ตอนที่ 7</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">ตอนที่ 8</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">ตอนที่ 9</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">ตอนที่ 10</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">ตอนที่ 12</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">ตอนที่ 13</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">ตอนที่ 14</a>

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
            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="mt-4 text-center">สื่อการสอน ท่ารำบุคคลเดี่ยว ปันจักสีลัต</h1>

                <h5>Jurus Tunggal เป็นรูปแบบ Pencak Silat ที่ได้รับการยอมรับในระดับสากลซึ่งประกอบด้วย 100 กระบวนท่าการเคลื่อนไหวโดยแบ่งออกเป็น 14 ชุดหรือ Jurus ซึ่งจะแบ่งออกเป็น 3 ส่วน ได้แก่
                    1. หมวดมือเปล่า มีทั้งหมด 50 กระบวนท่า
                    2. หมวดโกลกหรือมีด มีทั้งหมด 25 กระบวนท่า
                    และ 3.หมวดโทยะหรือไม้กระบอง มีทั้งหมด 25 กระบวนท่า
                    รวมการเคลื่อนไหวทั้งหมด 100 กระบวนท่า ซึ่งจะต้องแสดงให้เสร็จสิ้นภายใน 3 นาที นักกีฬาจะถูกตัดสินจากคุณภาพของการเคลื่อนไหวและความถูกต้องของการเคลื่อนไหวตามกระบวนท่า โดยคะแนนจะถูกหักสำหรับเทคนิคที่ไม่ถูกต้อง, การแต่งกายที่ไม่เหมาะสม, ใช้เวลาน้อยกว่าหรือเกินกว่า 3 นาที, การวางอาวุธที่ผิดตำแหน่งต่างๆในท่ารำ, การแสดงท่าอื่นๆที่ไม่ได้อยู่ในท่ารำหรือออกนอกขอบเขตของกระบวนท่า เป็นต้น
                </h5>




            </div>

        </div>
    </div>

    <nav aria-label="Page navigation example " >
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true" >Previous</a>
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