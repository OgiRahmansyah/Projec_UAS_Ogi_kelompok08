<?php
    session_start();
    require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel ="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="../css/stylelogin.css">
</head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');
        .main{
            height : 100vh;
            font-family : Poppins;
            font-size : 13px;
        }

        .login-box{
            line-height : 30px;
            width : 500px;
            height : 400px;
            box-sizing : border-box;
            border-radius : 20px;

        }

        h3{
            line-height : 50px;
            font-family : Poppins, sans-serif;
            font-size : 35px;
            font-weight : 50px;
        }

        p{
            line-height : 10px;
            font-family : Poppins, sans-serif;
            font-size : 15px;
            font-weight : 50px;
        }


    </style>
<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <form action="" method="post">
                <h3>Login</h3>
                <p>Selamat Datang di SagalaLauk silahkan login </p>
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div>
                    <button class="btn btn-success form-control mt-4" type="submit" name="loginbtn">Login</button>
                </div>
            </form>

        </div>
        <div class="mt-4" style="width: 500px">
            <?php
                if(isset($_POST['loginbtn'])){
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
                    $countdata = mysqli_num_rows($query);
                    $data = mysqli_fetch_array($query);

                    if ($countdata>0) {
                        if (password_verify($password, $data['password'])) {
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['login'] = true;
                            header('location: ../paneladmin');

                        }
                        else{
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    Password yang anda masukan salah!
                                </div>
                            <?php
                        }
                
                    }
                    else{
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Akun tidak ditemukan ! Cek kembali username dan password anda!
                        </div>
                        <?php
                    }
                }
                ?>
        </div>

    </div>
</body>
</html>