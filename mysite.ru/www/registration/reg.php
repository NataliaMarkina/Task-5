<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>

    <aside>
        <a href="../species.php">Разновидности</a><br>
        <a href="../recipes.php">Рецепты</a><br>
        <a href="../index.html">На главную</a><br><br><br>
        <a href="../registration/reg.php" class="knopka">Регистрация</a><br><br>
        <a href="../registration/index.php" class="knopka">Вход</a><br><br>
        <a href="../registration/logout.php" class="knopka">Выход из системы</a><br>
    </aside>

    <div class="content">
    <form method="post" action="save_user.php">
        <p>
            <label>Логин:</label><br>
            <input name="login" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label>Email:</label><br>
            <input name="email" type="email" size="32" maxlength="32">
        </p>
        <p>
            <label>Пароль:</label><br>
            <input name="password" type="password" size="15" maxlength="15">
        </p>
        <p>
            <input name="submit" type="submit" value="Зарегистрироваться">
        </p>
        <p>
            <label>Уже зарегистрированы?</label>
            <a href="../registration/index.php">Войти на сайт</a>
        </p>
    </form>
    </div>
</body>
</html>