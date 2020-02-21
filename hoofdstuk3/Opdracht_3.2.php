<?php
/**
 * User: timbo
 * Date: 10-2-2020
 * Time: 11:43
 * File: Opdracht_3.2.php
 */
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
    <link href="3.2.extra.css" type="text/css" rel="stylesheet">
</head>
<body>
<h2>Uitwerking van <a href="../index.php"> PHP-opdrachten</a></h2>

<div class="box">
    <?php
        $ambulanceComing = false;
        $trafficLightColor = "green";
        $driveOn = true;

        if ($trafficLightColor == "green" && $ambulanceComing == false)
        {
            $driveOn = true;
        }
        else
        {
            $driveOn = false;
        }

        if ($driveOn == true)
        {
            echo ("<p class='green'>U mag doorrijden</p>");
        }
        else
        {
            echo ("<p class='red'>U moet stoppen");
        }
    ?>

</div>
</body>
</html>