<?php
/**
 * User: timbo
 * Date: 20-4-2020
 * Time: 16:31
 * File: opdracht_5.2.php
 */
?>

<?php
include '../includes/header.php';
?>

<?php
$tableBegin = "<table>";
$tableEnd = "</table>";

$Code = $tableBegin ."<tr>" ."<td>Voor en achternaam: </td>" ."<td>" .$_GET["vaNaam"] ."</td>" ."</tr>";
$Code .= "<tr>" ."<td>Studentennummer: </td>" ."<td>" .$_GET["sNummer"] ."</td>" ."</tr>";
$Code .= "<tr>" ."<td>Datum van uitschrijven: </td>" ."<td>" .$_GET["dvUschrijven"] ."</td>" ."</tr>";
$Code .= "<tr>" ."<td>Leerjaar: </td>" ."<td>" .$_GET["leerjaar"] ."</td>" ."</tr>";
$Code .= "<tr>" ."<td>Aanmelden bij de succesklas: </td>" ."<td>" .$_GET["succesklas"] ."</td>" ."</tr>";
$Code .= "<tr>" ."<td>Verwijderen gegevens: </td>" ."<td>" .$_GET["verwijder"] ."</td>" ."</tr>";
$Code .= "<tr>" ."<td>Reden van uitschrijven: </td>" ."<td>" .$_GET["reden"] ."</td>" ."</tr>" .$tableEnd;

echo $Code;
?>

<?php
include '../includes/footer.php';
?>