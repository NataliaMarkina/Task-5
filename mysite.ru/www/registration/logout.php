<?php
    session_start();
    unset($_SESSION['login']);
    session_destroy();
    echo "Вы вышли из системы! <a href='../index.html'>На главную</a>";
?>