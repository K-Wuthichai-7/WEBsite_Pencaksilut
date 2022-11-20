<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
   .icon-login{
    z-index: 9999999;
    color: #fff;
    font-size: 24px;
   }
</style>
</head>


<body>
    <div class="bg-image"></div>


    <div class="container">



        <div class="row ">


            <div class="col"></div>
            <div class="col-lg-4 card card-1">
               
                <h3 class="mt-4 text-center text-primary">เข้าสู่ระบบ</h3>
                <hr>
                <form action="signin_db.php" method="post">
                    <?php if (isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php } ?>

                    <div class="mb-3 text-primary">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="email">
                    </div>
                    <div class="mb-3 text-primary">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" name="signin" class="btn btn-primary " style="width:100% ;">Sign In</button>
                </form>
                <hr>
                <p> คลิ๊กที่นี่เพื่อ <a href="index.php">สมัครสมาชิก</a></p>
            </div>
            <div class="col"></div>

        </div>
    </div>

</body>

</html>