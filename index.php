<?php
require_once __DIR__ . "/vendor/autoload.php";
\Localhost\SessionManager::create();

var_dump(\Localhost\SessionManager::create()->user('user_login'));
echo \Localhost\AdminCheck::Check();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8"/>
    <title>Главная</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h3>Главная</h3>
<table>
    <td>
        <?php
        if ( \Localhost\SessionManager::create()->isAuthorized() && (\Localhost\AdminCheck::Check() != null) ) {
            var_dump(\Localhost\SessionManager::create()->isAuthorized());
        echo "Добро пожаловть ", \Localhost\SessionManager::create()->user('user_login'); ?> <font color="red">(Admin)</font> <?php ; ?>
    </td>

    <td>
        <div class="container">
            <a href="logout.php"><img src="images/logout.jpg" height="50" alt="error"></a>
        </div>
    </td>

</table>
<a href="lk_form.php">
    <button>Личный кабинет</button>
</a>
<?php \Localhost\imagesContorller::AdmShowAll();
} else if  (\Localhost\SessionManager::create()->isAuthorized() ) {?>
<table>
    <td> <?php
    echo "Добро пожаловть ", \Localhost\SessionManager::create()->user('user_login'); ?>
    </td>

    <td>
        <div class="container">
            <a href="logout.php"><img src="images/logout.jpg" height="50" alt="error"></a>
        </div>
    </td>

    </table>
    <a href="lk_form.php">
        <button>Личный кабинет</button>
    </a>
    <?php
    $info = \Localhost\SessionManager::create()->user('user_id');

    var_dump($info);
    \Localhost\imagesContorller::ShowAll();
}
else {
    echo "Пожалуйста авторизируйтесь"; ?>
    <table>
        <td>
            <a href="register_form.php">
                <button>Зарегестрироваться</button>
            </a>
        </td>

        <td>
            <a href="authorization_form.php">
                <button>Авторизироваться</button>
            </a>
        </td>
    </table>
<?php \Localhost\imagesContorller::ShowAll(); }
?>
</body>
</html>