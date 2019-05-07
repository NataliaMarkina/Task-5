<?php
    session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Вход</title>
</head>
<body>
    <h1>Вход</h1>

    <aside>
        <a href="../species.php">Разновидности</a><br>
        <a href="../recipes.php">Рецепты</a><br>
        <a href="../index.html">На главную</a><br><br><br>
        <a href="../registration/reg.php" class="knopka">Регистрация</a><br><br>
        <a href="../registration/index.php" class="knopka">Вход</a><br><br>
        <a href="../registration/logout.php" class="knopka">Выход из системы</a><br>
    </aside>

    <div class="content">
    <form method="post" action="login.php">
        <p>
            <label>Логин:</label><br>
            <input name="login" type="text" size="20" maxlength="20">
        </p>
        <p>
            <label>Пароль:</label><br>
            <input name="password" type="password" size="15" maxlength="15">
        </p>
        <p>
            <input name="submit" type="submit" value="Войти"><br>
        </p>
        <p>
            <label>Еще не зарегистрированы?</label>
            <a href="../registration/reg.php">Регистрация</a>
        </p>
        <p>
            <a href="../registration/logout.php">Выйти</a>
        </p>
    </form>

    <?php
        if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
            echo "Вы вошли на сайт, как гость";
        } else {
            echo "Вы вошли на сайт, как ".$_SESSION['login'];
        }
                
    ?>   
    </div> 
</body>
</html>