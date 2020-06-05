<?php
/**
 * User: timbo
 * Date: 31-5-2020
 * Time: 10:08
 * File: loguit.php
 */
?>

<?php
include '../includes/header.php';
?>

<?php
session_start();
session_destroy();

header('location: opdracht_6.1.php');
?>

<?php
include '../includes/footer.php';
?>