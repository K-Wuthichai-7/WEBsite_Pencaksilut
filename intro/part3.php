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
                <h1 class="mt-4 text-center text-white"><strong> JURUS 3</strong></h1>
                <h3><code>Interval 2-3</code> </h3>
                <p>

                    1. ลุกขึ้นยืนจากนั้น ไขว้ขาขวามาทางด้านหน้า แล้วหันด้านหลังออกไป มือทั้งสองข้างเปิดออกในลักษณะวาดมือผายออกทั้งสองข้าง โดยให้มือซ้ายผายขึ้นข้างบน มือขวาผายลงข้างล่าง <br>
                    2. ก้าวเท้าซ้ายไปทางด้านหลังให้มาเสมอกับเท้าขวา ระยะห่างเท้าซ้ายและเท้าขวาห่างกันประมาณ 1 ช่วงไหล่ <br>
                    3. จากนั้นยกเข่าขวาขึ้น มือซ้ายผายออกไปด้านข้างลำตัวสุดแขน มือซ้ายแบออกงุ้มข้อมือเล็กน้อย ในขณะที่มือขวายกตั้งใกล้บริเวณใบหน้า มือขวาแบมืองุ้มข้อมือเล็กน้อย <br>


                </p>
                <hr>

                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5"><img src="../img/3.jpg" class="img-thumbnail bg-black" alt="#"></div>
                    <div class="col"></div>
                </div>

                <h3><code><strong> Jurus 3 </strong></code></h3>
                <p>
                    1. วางเท้าขวาลงกับพื้นข้างลำตัว ร่ายท่าพาซังให้มือขวาแบมือ ชูขึ้นเหนือศรีษะ มือซ้ายแบมือป้องกันบริเวณใบหน้า <br>
                    2. จากนั้นเลื่อนมือขวาลงมาในลักษณะหงายมือ บริเวณแถวหน้าอก ระยะห่างพอประมาณ มือซ้ายยังคงป้องกันไว้ <br>
                    3. เลื่อนขาขวามาชิดขาซ้ายเหมือนยืนแถวตรง จากนั้นก้าวขาขวาออกมาในลักษณะทางข้าง ให้ด้านข้างลำตัวหันไปข้างหน้า <br>
                    4. ใช้มือขวากำหมัดตีออกไปทางด้านข้าง เพื่อโจมตีบริเวณกกหู จากนั้นชักมือกลับมาข้างลำตัว <br>
                    5. ใช้เท้าซ้ายเตะตามไปข้างหน้า หลังจากเตะให้วางเท้าที่เตะลงข้างหน้าลงกับพื้น <br>
                    6. หมุนตัวลงนั่งกับพื้น ต่อด้วยการใช้ขาขวากวาดหลังสกัดขาคู่ต่อสู้ ขาซ้ายเหยียดออกไปทางด้านซ้าย พร้อมกับใช้มือขวาแบมือยกขึ้นเพื่อป้องกันบริเวณเหนือศรีษะ มือซ้ายยันกับพื้นด้านหลังไว้ <br>

                </p>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7  img-thumbnail bg-black">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://www.youtube.com/embed/DjTYzDwjGhE" title="Interval 2 3 and Jurus3"></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" href="../intro/part2.php" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part4.php">4</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part5.php">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="../intro/part4.php">Next</a>
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