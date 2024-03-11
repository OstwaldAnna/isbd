<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="./vendor/registration.php" method="post">
        <input type="text"  id="name" name="name" placeholder="Имя" value="" >
        <input type="text"  id="surname" name="surname" placeholder="Фамилия" value="" >
        <input type="text"  id="login" name="login" placeholder="Логин" value="" >
        <input type="text"  id="password" name="password" placeholder="Пароль" value="" >
        <input type="text"  id="repeat_password" name="repeat_password" placeholder="Повторить пароль" value="" >

        <button class="btn btn-primary btn-lg btn-block mt-3" type="submit">Зарегистрироваться</button>

        <?php 
        if ($_SESSION['message']){
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
    ?>
    </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>