<?php
    date_default_timezone_set("asia/taipei");

    try {
        $db = new PDO("mysql:host=".getenv("DB_HOST").";dbname=".getenv("DATABASE"), getenv("DB_USER"), getenv("DB_PASSWORD"));
        $db->exec("set names utf8");
        $datas = $db->query("select * from user")->fetchAll(PDO::FETCH_NUM);
        echo $datas[0][0].", ".$datas[0][1];
    } catch (PDOException $e) {
        echo "Error :" . $e->getMessage();
    }