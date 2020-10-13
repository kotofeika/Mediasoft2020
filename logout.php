<?php
require_once __DIR__ . "/vendor/autoload.php";
    \Localhost\SessionManager::create()->set('authorized', false);
    \Localhost\SendTo::SendTo('index.php');
?>