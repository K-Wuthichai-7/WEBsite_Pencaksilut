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

            <a class="btn btn-primary p-3" href="https://forms.gle/axPGTHthjyQCqaUr6" target="_blank">แบบทดสอบหลังเรียน</a>
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
                <h1 class="mt-4 text-center text-white"><strong> JURUS 14</strong></h1>
                <h3><code>Interval 13-14</code> </h3>
                <p>

                    1. บิดตัวกลับหลังหันไปทางซ้ายอีกครั้ง จากนั้นยกเข่าขวาขึ้นวางลง แล้วยกเข่าซ้ายขึ้น <br>
                    2. ถอยเท้าซ้ายมาข้างหลัง จากนั้นบิดลำตัวและศรีษะตามเท้าซ้ายไป


                </p>
                <hr>

                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5 "><img src="../img/14.jpg" class="img-thumbnail bg-black" alt="#"></div>
                    <div class="col"></div>
                </div>

                <h3><code><strong> Jurus 14 </strong></code></h3>
                <p>

                    1. ฟาดไม้ไปข้างหน้าจากทางขวา เพื่อโจมตีบริเวณศรีษะคู่ต่อสู้ <br>
                    2. ยกเข่าขวาขึ้น จากนั้นเหวี่ยงไม้จากขวาไปซ้ายตามเข็มนาฬิกา เหนือศรีษะ เมื่อเหวี่ยงเสร็จให้มือที่จับไม้ทางขวาอยู่ตรงข้างซ้ายบริเวณเข่าขวาที่ยกขึ้น <br>
                    3. หมุนตัวไป 180 องศา ( ครึ่งรอบ ) ไปทางขวา โดยใช้เท้าซ้ายเป็นหลักจุดหมุน จากนั้นวางเท้าขวาลงกับพื้น <br>
                    4. ก้าวเท้าซ้ายไปข้างหน้า แล้วหันลำตัวไปทางด้านขวาของตน ให้เท้าซ้ายกับเท้าขวาขนานกัน ห่างกันเลย 1 ช่วงหัวไหล่พอประมาณ ( ท่าขี่ม้า ) <br>
                    5. เปลี่ยนมือทั้งสองให้มาจับไม้ยกขึ้นโดยให้หลังมือทั้งคู่ชี้ขึ้นฟ้า ยกไม้ขึ้นขนานแนวนอนบริเวณสายตาของตน ย่อตัวลงเล็กน้อย <br>
                    6. หมุนปลายไม้ให้ฝั่งด้านจับด้วยมือซ้าย วางลงบนพื้นตรงบริเวณนิ้วก้อยเท้าขวาของตน จากนั้นชิดเท้าซ้ายมาติดเท้าขวา แล้วใช้เท้าขวาถีบออกไปบริเวณที่หน้าอกคู่ต่อสู้ แล้ววางเท้าลงกับพื้น <br>
                    7. ก้าวเท้าซ้ายไปข้างหน้า พร้อมกับใช้ไม้ฟาดลงไปที่พื้น โดยให้มือซ้ายที่จับอยู่ด้านบน พร้อมกับย่อตัวลง <br>
                    8. หมุนตัวลงคล้ายกับท่าเตะกวาดขาคู่ต่อสู้ใน Jurus 7 แต่ให้หมุนไป 1 รอบลงกับพื้นโดยหมุนไปทางขวา พร้อมกับเหวี่ยงไม้โจมตีแบบกวาดช่วงล่างคู่ต่อสู้ โดยเหวี่ยงออกไปตามเข็มนาฬิกาจนสุดแขนขวา ( ห้ามให้ไม้ติดหรือสัมผัสพื้น ) ขาซ้ายเหยียดตรงออกไปทางซ้าย ขาขวาคว่ำลง พับข้องอติดกับลำตัว <br>
                    9. จากนั้นกวาดไม้กลับมาพร้อมกับหมุนตัว 1 รอบ ( 360 องศา ) ไปทางซ้าย ( ทวนเข็มนาฬิกา ) แล้วลุกขึ้นเท้าซ้ายจะอยู่ข้างหน้า <br>
                    10. กลับหลังหันมาทางด้านหน้า โดยหันมาจากทางซ้าย พร้อมกับเปลี่ยนมือจับมาจับไม้แบบคว่ำมือทั้งสองข้าง ยื่นไม้ออกไปข้างหน้าเป็นแนวตั้งให้ฝั่งที่จับมมือขวาอยู่ด้านบน <br>
                    11. เหวี่ยงไม้ทวนเข็มนาฬิกาให้ไปทางด้านหลังเพื่อเก็บไม้ไปทางด้านหลัง ( ใช้มือขวาจับมือเดียว )โดยปล่อยมือซ้ายออกจากไม้ แล้วยกขึ้นป้องกันตนเอง <br>
                    12. กระโดดไปข้างหน้าเล็กน้อย โดยยังคงท่าเดิมของช่วงบนตามข้อ 11 เพื่อให้ตนเองลงนั่งกับพื้นโดยให้ขาซ้ายวางนอนติดกับพื้น ขาขวาวางเหนือขาซ้ายแต่ไม่ติดพื้น ให้เท้าขวาวางลงกับพื้นอย่างเดียวเท่านั้น เป็นอันเสร็จสิ้น




                </p>

                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7  img-thumbnail bg-black">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://www.youtube.com/embed/JdsWIGRcrSc" title="Jurus14" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <nav aria-label="Page navigation example ">
                        <ul class="pagination justify-content-end">
                            <li class="page-item ">
                                <a class="page-link" href="../intro/part13.php" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="../intro/part12.php">12</a></li>
                            <li class="page-item"><a class="page-link" href="../intro/part13.php">13</a></li>
                            <li class="page-item"><a class="page-link" href="#">14</a></li>

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