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
    <header>
        <div class="container-fluid">
            <div class="row" id="navigator">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <i class="bi bi-yin-yang"></i>
                            <!-- GGGG -->
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                            </ul>
                        </div>
                        <form class="d-flex text-light" role="search" id="reg">
                            <div class="nav-item">
                                <a class="nav-link" href="/index.php">Registration</a>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

    </header>
    <main>
        <div class="container-fluid m-1">
            <div class="row">
                <div class="col-lg-8">
                    <p> Бобылев Артем Владимирович, ведущий стажер в области IT. Знаю вебчик и питончик. Надеюсь мне это
                        пригодится.
                        На карусели справа кстати я, фото в цвете!
                    </p>
                </div>
                <div class="col-lg-4">
                    <div id="carousel_main" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/1.jfif" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/2.jfif" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/3.jfif" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_main"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel_main"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>



            </div>
            <div class="row">
                <div class="d-flex col-12 justify-content-end">
                    <button class="btn btn-dark" id="myButton">
                        Click me!
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="d-flex col-lg-12 justify-content-center">
                    <p id="demo"></p>
                </div>
            </div>
            <div class="row">
                <div class="d-flex col-lg-12 justify-content-center">
                    <h1>Привет, <?php echo $_COOKIE['User'];?></h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="d-flex col-lg-12 justify-content-center">
                    <form method='POST' action='profile.php' enctype="multipart/form-data" name="upload">
                        <legend class="text-center" id="leg_form_2">Ваша статья</legend>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Input Header" aria-label="default input example" name="title">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Text..." rows="12" name="text"></textarea>
                        </div>
                        <div class="mb-2 d-flex justify-content-center">
                            <input class="form-control form-control-sm" type="file" name="file" /><br>    
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-dark" name="submit">Submit</button>     
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </main>

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

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)){
        echo "Не удалось добавить пользователя";
    }
}
if(!empty($_FILES["file"]))
    {
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg")
        || (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg")
        || (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 102400))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed!";
        }
    }
?>