<?php
require_once __DIR__ . "/vendor/autoload.php";
$userData = \Localhost\SessionManager::create()->user();

if (\Localhost\SessionManager::create()->isAuthorized() && $_GET['id'] === null){
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8"/>
    <title>Личный кабинет</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
<h3>Личный кабинет</h3>
<table>
    <td>
        <?php echo \Localhost\SessionManager::create()->user('user_login'); ?>
    </td>

    <td>
        <div class="container">
            <a href="logout.php"><img src="images/logout.jpg" height="50" alt="error"></a>
        </div>
    </td>
</table>

<table>
    <td>
        <a href="index.php">
            <button>Главная</button>
        </a>
    </td>

    <td>
        <a href="load_form.php">
            <button>Загрузить</button>
        </a>
    </td>
</table>

<?php \Localhost\imagesContorller::ShowMy();
} if (\Localhost\SessionManager::create()->isAuthorized() && $_GET['id'] != \Localhost\SessionManager::create()->user('user_login') && \Localhost\AdminCheck::Check() === null ){ ?>
    <table>
        <td>
            <?php echo \Localhost\SessionManager::create()->user('user_login'); ?>
        </td>

<td>
    <div class="container">
        <a href="logout.php"><img src="images/logout.jpg" height="50" alt="error"></a>
    </div>
</td>
</table>

<?php \Localhost\imagesContorller::ShowUser();
}

if (\Localhost\SessionManager::create()->isAuthorized() && $_GET['id'] != \Localhost\SessionManager::create()->user('user_login') && \Localhost\AdminCheck::Check() != null ){ ?>
    <table>
        <td>
            <?php echo \Localhost\SessionManager::create()->user('user_login'); ?>
        </td>

        <td>
            <div class="container">
                <a href="logout.php"><img src="images/logout.jpg" height="50" alt="error"></a>
            </div>
        </td>
    </table>

    <?php \Localhost\imagesContorller::AdmShowUser();
}

if (\Localhost\SessionManager::create()->isAuthorized() === false) {
    echo "Пожалуйста авторизируйтесь"; ?>
<table>
    <td>
        <a href="index.php">
            <button>Главная</button>
        </a>
    </td>
<?php
    \Localhost\imagesContorller::ShowMyNotAuth();
}
?>
</body>
</html>