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
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex col-lg-12 justify-content-center">
                <p>
                    <?php 
                        if (isset($_COOKIE['User'])) {
                            echo "Страница постов!";
                        } else {
                            echo "Авторизируйтесь!";
                        }
                    ?>
                </p>
            </div>   
        </div>
        <div class="row">
            <div class="d-flex col-lg-12 justify-content-center">
                <p id="autor">
                    <?php
                    if (!isset($_COOKIE['User'])) {
                        ?>
                            <a href="/registration.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Зарегистрируйтесь</a> 
                            или <a href="/login.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">войдите</a>!
                        <?php
                        } else {
                            // подключение к БД
                            $link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

                            $sql = "SELECT * FROM posts";
                            $res = mysqli_query($link, $sql);
                            if (mysqli_num_rows($res) >  0) {
                                while ($post = mysqli_fetch_array($res)) {
                                    echo "<a href='/posts.php?id=" . $post["id"] . "'>" . $post['title'] . "</a><br>";
                                }
                            } else {
                                    echo "Записей пока нет";
                               }
                            }
                        ?>
                </p>
            </div>
        </div>
    </div>
    <div id="Anchor">

    </div>
</body>

</html>