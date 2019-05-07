<?php
    // установка связи с сервером
    $db = mysql_connect("localhost","root","") or die(mysql_error());
    // переключение на нужную базу данных
    mysql_select_db("mysql",$db);
?>