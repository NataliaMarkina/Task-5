<?php
    session_start();

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

    $result = mysql_query("SELECT * FROM users WHERE login='$login'",$db);
    $arr = mysql_fetch_array($result);
    if (empty($arr['password'])) {
        exit("Введен неверный логин или пароль.");
    } else {
        if($arr['password'] == $password) {
            $_SESSION['login'] = $arr['login'];
            $_SESSION['id'] = $arr['id'];
            echo "Вы вошли на сайт! <a href='../index.html'>На главную</a>";
        }
        else {
            exit("Введен неверный логин или пароль");
        }
    }
?>