<?php
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        if ($login == '') {
            unset($login);
        }
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if ($email == '') {
            unset($email);
        }
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        if ($password == '') {
            unset($password);
        }
    }
    if (empty($login) or empty($email) or empty($password)) {
        exit("Не все поля заполнены!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $login = trim($login);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $email = trim($email);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $password = trim($password);
    
    include("../bd.php");

    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $arr = mysql_fetch_array($result);
    if (!empty($arr['id'])) {
        exit("Введенный вами логин уже занят.");
    }
    $result2 = mysql_query("INSERT INTO users (login,email,password) VALUES('$login','$email','$password')");

    if ($result2 == 'TRUE') {
        echo "Регистрация прошла успешно. Теперь вы можете зайти на сайт. <a href='../registration/index.php'>Войти</a>";
    }
    else {
        echo "Ошибка регистрации!";
    }
?>