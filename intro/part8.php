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
    <title>Pencak Silat</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/sidebars.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            color: white;
            margin: 0;
            text-shadow: 8px 8px 10px #0000008c;
            background-color: #343a40;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%239C92AC' fill-opacity='0.25' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"), linear-gradient(to right top, #343a40, #2b2c31, #211f22, #151314, #000000);
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

            <!-- sidebar-component -> sidebar.js -->
            <sidebar-component></sidebar-component>

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
                                    <a class="dropdown-item" href=../signin.php">ลงชื่อเข้าใช้ใหม่</a>
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
                <h1 class="mt-4 text-center text-white"><strong> JURUS 8</strong></h1>
                <h3><code>Interval 7-8</code> </h3>
                <p>

                    1. จากท่าตอนจบของมือเปล่า ยกตัวขึ้นในลักษณะนั่งยองแบบคุกเข่า โดยให้เท้าซ้ายอยู่ข้างหน้าตั้งฉาก สะโพกเกือบติดส้นเท้าขวา พร้อมกับผายมือขวาในลักษณะหงายมือออกไปข้างหน้า มือซ้ายแนบตรงหน้าอก <br>
                    2. ค่อยๆ สืบเท้าขวาไปข้างหน้า พร้อมกับร่ายมือวาดสลับเปลี่ยนมือไปข้างหน้า ( เช่น เมื่อจังหวะแรกสืบเท้าขวาไปข้างหน้า มือจะเปลี่ยนสลับเป็นมือซ้ายไปข้างหน้า เป็นต้น ) ทำแบบนี้ 2 ครั้ง สลับเท้าและแขน ไปอยู่ตรงหน้ามีดของตน <br>
                    3. หยิบมีดด้วยมือขวา จากนั้นลุกขึ้นและถอยหลังทีละก้าว โดยเริ่มจากก้าวเท้าซ้ายก่อนพร้อมกับยกมีดขึ้นไปเฉียงด้านหลังประมาณ 60 องศา ทางด้านหลังของตนและค้างไว้ มือซ้ายยกป้องกันตน จกานั้นก้าวไปข้างหลังจนครบ 3 ก้าว ( เมื่อก้าวจนครบ เท้าขวาจะอยู่ด้านหน้า)


                </p>
                <hr>

                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5"><img src="../img/8.jpg" class="img-thumbnail bg-black" alt="#"></div>
                    <div class="col"></div>
                </div>

                <h3><code><strong> Jurus 8 </strong></code></h3>
                <p>

                    1. ยกเข่าขวาขึ้น พร้อมกับวาดมีดมาทางหน้าอกของตน จากนั้นวางเท้าขวาไปด้านหลัง แล้วฟันมีดไปทางด้านขวา เยื้องหลังตรงตำแหน่งบริเวณช่วงคอคู่ต่อสู้ <br>
                    2. บิดตัวกลับมาข้างหน้า พร้อมกับวาดมือทั้งสองข้างมาทางตรงหน้าตน ให้มือถือมีดฟันไปตรงตำแหน่งหน้าอก มือซ้ายป้องกันตน <br>
                    3. สืบเท้าขวามาข้างหน้า จากนั้นตามด้วยเท้าซ้ายแล้วบิดตัวหันไปทางด้านขวาตน แล้วยกเข่าขวาขึ้น <br>
                    4. วางเท้าขวาลงทางข้างหน้า ผายแขนทั้งสองข้างออกไปทางด้านข้างตน จากนั้นยกเข่าขวาขึ้น มือถือมีดง้างถอยมาข้างหลังพร้อมที่จะแทง <br>
                    5. วางเท้าขวาลงนำหน้า มือถือมีดแทงทางคู่ต่อสู้ออกไปข้างหน้า ตรงบริเวณคอ <br>
                    6. ก้าวเท้าซ้ายไปข้างหน้า จากนั้นหมุนตัวมาทางข้างหน้า เท้าทั้งสองข้างขนานเท่ากันคล้ายท่าขี่ม้า จากนั้นกางแขนสองข้างออกข้างลำตัว <br>
                    7. ยกเข่าขวาขึ้นข้างหน้าลำตัว วาดมือทั้งสองข้างให้มือซ้ายชี้ขึ้นบนฟ้า มือขวาให้ปลายมีดชี้ลงพื้นข้างเข่าขวา
                </p>
                <hr>

                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7">
                            <div class="ratio ratio-16x9  img-thumbnail bg-black">
                                <iframe src="https://www.youtube.com/embed/BlenqrCMa7w" title="Interval 7 8 and Jurus 8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" href="../intro/part7.php" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part9.php">9</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part10.php">10</a></li>
                            <li class="page-item">
                                <a class="page-link" href="../intro/part9.php">Next</a>
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
    <!-- link sidebar-component -->
    <script src="js/sidebar.js"></script>
    <script src="js/sidebars.js"></script>
</body>

</html>