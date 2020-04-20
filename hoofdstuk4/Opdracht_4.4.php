<?php
/**
 * User: timbo
 * Date: 30-3-2020
 * Time: 10:55
 * File: Opdracht_4.4.php
 */
?>

<?php
include '../includes/header.php';
?>

<?php
$weekDag = "";
$weekKalender = "";

    for ($i=0; $i< 7 ; $i++) {
        $dagindeweek = date('w', strtotime("+$i days"));

        if ($dagindeweek == 1) {
            $weekDag = "maandag";
        } elseif ($dagindeweek == 2) {
            $weekDag = "dinsdag";
        } elseif ($dagindeweek == 3) {
            $weekDag = "woensdag";
        } elseif ($dagindeweek == 4) {
            $weekDag = "donderdag";
        } elseif ($dagindeweek == 5) {
            $weekDag = "vrijdag";
        } elseif ($dagindeweek == 6) {
            $weekDag = "zaterdag";
        } elseif ($dagindeweek == 0) {
            $weekDag = "zondag";
        }


        $weekKalender .= ("Dag " . $i. " is " . $weekDag . " " . date("d-m-Y",strtotime("+$i days")) ."<br>");


    }
echo $weekKalender;


?>

<?php
include '../includes/footer.php';
?>