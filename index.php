<?php
require 'Session.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $session = new Session;
    $session->set('country', $_POST['country']);
    $session->set('email', $_POST['email']);
    $session->set('name', $_POST['name']);
    $session->set('age', $_POST['age']);
    $session->set('city', $_POST['city']);
}

$sessionTime = new Session;
$sessionTime->set('timeOnSite', time());

?>

<form action="" method="post">
    Write your country:
    <input type="text" name="country"><br>
    Write E-mail:
    <input type="text" name="email"><br>
    Name:
    <input type="text" name="name"><br>
    Age:
    <input type="text" name="age"><br>
    City:
    <input type="text" name="city"><br>
    <button type="submit">GO</button>
</form>

