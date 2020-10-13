<?php
require_once __DIR__ . "/vendor/autoload.php";
use Localhost\DB;

\Localhost\imagesContorller::delete($_GET['id']);
\Localhost\SendTo::SendTo('index.php');