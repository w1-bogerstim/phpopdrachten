<?php
/**
 * User: timbo
 * Date: 31-5-2020
 * Time: 09:56
 * File: checklogin.php
 */
?>

<?php
include '../includes/header.php';
?>

<?php
session_start();
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "JNGO" => "654321",
    "Rosalie" => "bloemblaadjes",
    "Tim" => "23102001",
    "Siemen" => "Gay"
);


$faultyMsg = "";
foreach($authUsers as $user => $password) {
    if ($_POST['username'] == $user && $_POST['password'] == $password) {
        $_SESSION['username'] = $_POST['username'];
        header('location: welkom.php');
    }
}

$faultyMsg = "Incorrecte combinatie, probeer het opnieuw";

header('location: opdracht_6.1.php');

?>

<?php
include '../includes/footer.php';
?>