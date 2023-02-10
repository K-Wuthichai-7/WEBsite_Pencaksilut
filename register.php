<?php

session_start();
require_once 'config/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>

    <div class="bg-image"></div>
    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col-lg-4 card card-1">
                <div class="icon">
                    <h3 class="mt-4 text-center text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                        </svg>สมัครสมาชิก</h3>
                </div>
                
                <form action="signup_db.php" method="post">
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
                    <?php if (isset($_SESSION['warning'])) { ?>
                        <div class="alert alert-warning" role="alert">
                            <?php
                            echo $_SESSION['warning'];
                            unset($_SESSION['warning']);
                            ?>
                        </div>
                    <?php } ?>


                    <div class=" mb-3 text-primary">
                        <label for="firstname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="First name" aria-describedby="firstname">
                    </div>
                    <div class="mb-3 text-primary">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last name" aria-describedby="lastname">
                    </div>
                    <div class="mb-3 text-primary">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="email">
                    </div>
                    <div class="mb-3 text-primary">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3 text-primary">
                        <label for="confirm password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="c_password" placeholder="Confirm Password">
                    </div>
                    <button type="submit" name="signup" class="btn btn-primary" style="width:100% ;">Sign Up</button>
                </form>
                <hr>
                <p>สมาชิกคลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
            </div>

            <div class="col"></div>
        </div>
    </div>

</body>

</html>