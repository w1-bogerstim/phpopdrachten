<?php
/**
 * User: timbo
 * Date: 12-4-2020
 * Time: 15:00
 * File: opdracht_5.1.php
 */
?>

<?php
include '../includes/header.php';
?>

<?php
$tableBegin = "<table>";
$tableEnd = "</table>";
$Code = $tableBegin . "<tr>" ."<td>Bedrijfsnaam: </td>" ."<td>" . $_GET["Bedrijfsnaam"] ."</td>" . "</tr>";
$Code .= "<tr>" ."<td>Voornaam: </td>" ."<td>" .$_GET["Voornaam"] ."</td>" ."</tr>";
$Code .= "<tr>" ."<td>Achternaam</td>" ."<td>" .$_GET["Achternaam"] ."</td>". "</tr>";
$Code .= "<tr>" ."<td>Telefoon:</td>" ."<td>" .$_GET["Telefoon"] ."</td>" ."</tr>";
$Code .= "<tr>" ."<td>Email:</td>" ."<td>" .$_GET["Email"] ."</td>" ."</tr>";
$Code .= "<tr>" ."<td>Bericht: </td>"  ."<td>" .$_GET["Bericht"] ."</td>" ."</tr>" . $tableEnd;

echo $Code;
?>

<?php
include '../includes/footer.php';
?>