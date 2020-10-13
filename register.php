<?php
require_once __DIR__ . "/vendor/autoload.php";
use Localhost\DB;
\Localhost\SessionManager::create();

$registration = \Localhost\Registration::Check($_POST['login'], $_POST['password']);
if ($registration){
    \Localhost\SendTo::SendTo('authorization_form.php');
}else{
    \Localhost\SendTo::SendTo('register_form.php');
}