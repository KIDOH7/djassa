<?php

    $pdo = new PDO('mysql:dbname=mon_djassa;host:localhost','root','',[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);