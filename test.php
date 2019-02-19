<?php
require 'Session.php';

$session = new Session;

echo $session->isNotEmptySession('country') . '<br>'; // Выводим страну из формы в index.php

$userTimeOnSite = time() - $session->isNotEmptySession('timeOnSite');
echo 'Вы зашли на сайт ' . $userTimeOnSite . ' секунд назад' . '<br>'; // Время пользователя на сайте в секундах

$email = $session->isNotEmptySession('email'); // проверяем наличие сессии с ключом 'email'

//Количество обновленний страницы
if (!isset($_SESSION['countUpdate'])){
    $_SESSION['countUpdate']=0;
    echo 'Вы еще не обновляли страницу';
}else{
    echo "Вы обновили эту страницу ".$_SESSION['countUpdate']++." раз. ";
}

?>

<form action="" method="post">
    Name:
    <input type="text" name="name">
    Surname:
    <input type="text" name="surname">
    Password:
    <input type="text" name="pass">
    E-mail:
    <input type="text" name="email" value="<?php echo $email ?>">

</form>
