<?php
require 'Session.php';

$session = new Session;

$age = $session->isNotEmptySession('age');
$city = $session->isNotEmptySession('city');

?>

<form action="" method="post">
    Name:
    <input type="text" name="name"><br>
    Age:
    <input type="text" name="age" value="<?php echo $age ?>"><br>
    City:
    <input type="text" name="city" value="<?php echo $city ?>"><br>
    <button type="submit">GO</button>
</form>

<a href="/logout.php">Logout</a>
