<!doctype html>
<html lang="ru">

<head>
    <title>Бобылев А.В.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
    <link rel="manifest" href="images/icons/site.webmanifest">
</head>
<body>
    <div class="container-fluid mt-2">
        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="d-flex col-lg-4 justify-content-center">
                <form class="p-2" id="reg_form" method='POST' action='login.php'>
                    <legend class="text-center" id="leg_form">Авторизация</legend>
                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Login input" aria-label="default input example" name="login">
                    </div>
                    <div class="mb-3">
                        <input type="password" placeholder="Enter the password" id="inputPassword5" class="form-control" name="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark" name="submit">Submit</button>     
                    </div>
                </form>          
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>


    <div id="Anchor">

    </div>
    <script type="text/JavaScript" src="script.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['login'];
    $pass = $_POST['password'];
    
    if (!$username || !$pass) die('Пожалуйста введите все значения!');

    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {
    setcookie("User", $username, time()+7200);
    header('Location: profile.php');
    } else {
    echo "не правильное имя или пароль";
    }
}
?>