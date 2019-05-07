<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>Пользователи</title>
</head>
<body>
    <h1>Таблица зарегистрированных пользователей</h1>

    <aside>
        <a href="../species.php">Разновидности</a><br>
        <a href="../recipes.php">Рецепты</a><br>
        <a href="../index.html">На главную</a><br><br><br>
        <a href="../registration/reg.php" class="knopka">Регистрация</a><br><br>
        <a href="../registration/index.php" class="knopka">Вход</a><br><br>
        <a href="../registration/logout.php" class="knopka">Выход из системы</a><br>
    </aside>

    <div class="content">
    <?php
        // установка связи с сервером
        mysql_connect('localhost','root','');

        // переключение на нужную базу данных
        mysql_select_db('mysql');

        // выполнение SQL запроса и получение всех записей (строк) из таблицы `table_name`
        $result=mysql_query('SELECT * FROM users');

        // получение результатов из каждой строки
        while ($row=mysql_fetch_array($result))
        { // вывод данных
            echo '<p>Запись id='.$row['id'].'. Логин: '.$row['login'].'. Email: '.$row['email'].'. Пароль: '.$row['password'].'</p>';
        }
    ?>
    </div>
</body>
</html>