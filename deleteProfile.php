<?php
require_once __DIR__ . "/vendor/autoload.php";
    $pdo = new \Localhost\DB();
    $sql= 'DELETE FROM `users` WHERE `user_id` = (?)';
    $pdo->update($sql, [ $_GET['id'] ]);
    $sql = 'DELETE FROM `pictures` WHERE `user_id` = (?)';
    $pdo->update($sql, [ $_GET['id'] ]);
    \Localhost\SendTo::SendTo('index.php');