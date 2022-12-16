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
            <div class="sidebar-heading border-bottom bg-light text-center">บทเรียน</div>
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
                                    <a class="dropdown-item" href="signin.php">ลงชื่อเข้าใช้ใหม่</a>
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
            <div class="container-fluid">
                <h1 class="mt-4 text-center text-primary"><strong> JURUS 2</strong></h1>
                <h3><code>Interval 1-2</code> </h3>
                <p>
                    
                        1. จากท่าจบของ Jurus 1 ให้บิดลำตัวไปเอี้ยวไปทางซ้าย มือซ้ายยกขึ้นป้องกันแนบลำตัว มือขวากดลงเพื่อป้องกันทางด้านล่าง <br>
                        2. ก้าวเท้าขวาไปข้างหน้า พร้อมกับเลื่อนแขนขวาขึ้นมาป้องกันด้านบน <br>
                        3. บิดลำตัวกลับหลังมาจากด้านซ้าย พร้อมกับวาดมือขวายื่นไปสุดแขนข้างหน้า มือซ้ายตั้งพาซังไปบริเวณหน้าอก <br>
                        4. ดึงขาซ้ายถอยหลังเข้ามาใกล้กับตัวประมาณ ครึ่งเมตร โดยหลังจากดึงมาแล้วให้เปิดส้นเท้าประมาณ 1 คืบพร้อมกับเปลี่ยนมือซ้ายยื่นมาในลักษณะตั้งการป้องกัน มือขวากำหมัดหงายแนบกับข้างลำตัว เตรียมพร้อมสำหรับการรำในช่วงที่ 2 <br>
                    
                </p>
                <hr>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-5"><img src="../img/2.jpg" class="img-thumbnail" alt="#"></div>
                    <div class="col"></div>
                </div>

                
                  <h3><code><strong>  Jurus 2 </strong></code></h3>
                <p>
                    
                    1. ก้าวเท้าขวาไปข้างหน้า พร้อมกับยื่นมือขวาในลักษณะจับตัวคู่ต่อสู้ แล้วดึงมาเข้าหาลำตัว หลังจากนั้นเหวี่ยงศอกซ้ายเพื่อโจมตีบริเวณช่วงคาง <br>
                    2. ใช้เท้าซ้ายถีบคู่ต่อสู้ไปบริเวณที่หน้าอก คล้ายกับการเตะตรงอับชากิของกีฬาเทควันโด้ จากนั้นเมื่อถีบเสร็จให้วางเท้าซ้ายลงไปข้างหน้า  <br>
                    3. ใช้หมัดขวาชกไปข้างหน้า มือซ้ายป้องกันบริเวณใบหน้า <br>
                    4. ก้าวเท้าขวาไปข้างหน้า ใช้มือขวาไล่ตามจับคู่ต่อสู้ในลักษณะวาดมือขึ้นเหนือศรีษะแล้วดึงลงมาแนบข้างลำตัว หลังจากนั้นใช้ศอกซ้ายตีขึ้นไปที่คางคู่ต่อสู้  <br>
                    5. ยกมือขวาแบมือขึ้นสูงสุดเหนือศรีษะ มือซ้ายแบมือป้องกันบริเวณใบหน้า  <br>
                    6. พลิกตัวกลับมาด้านหลังในลักษณะกลับหลังมาจากทางซ้าย ย่อตัวลงในลักษณะคุกเข่าข้างเดียว ขาซ้ายตั้งฉากขนานกับพื้น สะโพกนั่งลงบนส้นเท้าข้างขวา  มือซ้ายแบมือป้องกันบริเวณใบหน้า มือขวากำหมัดดึงลงมาวางในลักษณะหงายมือบริเวณข้างหน้าท้อง
                   
                </p>

                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-md-7">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://www.youtube.com/embed/UHLE9zLPFv4" title="ปันจักสีลัต/สาธิตการร่ายรำTunggal (แยกเป็นทีล่ะบท)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example ">
        <ul class="pagination justify-content-end">
            <li class="page-item ">
                <a class="page-link" href="../intro/part1.php" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="../intro/part3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="../intro/part4.php">4</a></li>
            <li class="page-item">
                <a class="page-link" href="../intro/part3.php">Next</a>
            </li>
        </ul>
    </nav>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>