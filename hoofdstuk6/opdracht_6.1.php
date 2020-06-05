<?php
/**
 * User: timbo
 * Date: 18-5-2020
 * Time: 20:23
 * File: opdracht_6.1.php
 */
?>

<?php
include '../includes/header.php';
?>

<form action="checklogin.php" method="post">
    <label>Username:</label>
    <input name="username" type="text"><br>
    <label>Passord:</label>
    <input name="password" type="password"><br>
    <input type="submit" value="Send">


</form>

<?php
    if (isset($fautlyMsg))
    {
        echo $fautlyMsg;
    }
?>

<?php
include '../includes/footer.php';
?>