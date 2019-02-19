<?php
//1
require '../Cookie.php';

if (isset($_COOKIE['counter'])) {
    $count = $_COOKIE['counter']+1;
}else {
    $count = 1;
}

$cookie = new Cookie;
$cookie->set('counter', $count, 3600);
echo 'Вы постели наш сайт ' . $count . ' раз';

// 2
<?php
require '../Cookie.php';

if (isset($_POST['isHide'])) {
    $bannerStatus = 'none';
    $cookie = new Cookie;
    $cookie->set('bannerstatus', $bannerStatus, 3600*24*30);
}
?>

<div style="background: purple; heigth: 200px; display: <?php echo $_COOKIE['bannerstatus'] ? $_COOKIE['bannerstatus'] : 'block' ?>">
    <h1>БАННЕР</h1>
    <form action="" method="post">
        <button name="isHide">Больше не показывать</button>
    </form>
</div>


//3
<?php
require '../Cookie.php';

$cookie = new Cookie;
$cookie->set('lastVisit',  time(), 3600*24*30*365);
$diff = (time() - $_COOKIE['lastVisit'])/86400;

echo 'Вы не были на сайте ' . round($diff) . ' дней';

//4
<?php
require '../Cookie.php';

if (isset($_POST['toSave'])){
    $cookie = new Cookie;
    $cookie->set('birthDay', $_POST['birthDay'], 3600*24*365*25);
    $cookie->set('form', 'none', 3600*24*365*25);
}

if (isset($_COOKIE['birthDay'])) {
    $diffDay = date('z', time()) - date('z', strtotime($_COOKIE['birthDay']));
    if ($diffDay == 0) {
        echo 'С Днем Рождения!';
    }else {
        echo 'До вашего дня рождения осталось ' . abs($diffDay) . ' дней';
    }
}
?>

<form action="" method="POST" style="display: <?php echo $_COOKIE['form'] ?>">
    Укажите день своего рождения:
    <input type="date" name="birthDay">
    <button name="toSave">Сохранить</button>
</form>

//5

<?php
require '../Cookie.php';

if (isset($_POST['toSwitchColor'])) {
    $cookie = new Cookie;
    $cookie->set('colorHead', $_POST['colorHeader'], time()+3600*24*30);
    header('Location: time.php');
}
?>

<div style="background: <?php echo $_COOKIE['colorHead'] ?>; height: 200px;"></div>
<form method="POST">
    <select name="colorHeader">
        <option value="green">Зеленый</option>
        <option value="blue">Синий</option>
        <option value="red">Красный</option>
        <option value="yellow">Желтый</option>
        <option value="purple">Фиолетовый</option>
    </select>
    <button name="toSwitchColor">Сохранить</button>
</form>
