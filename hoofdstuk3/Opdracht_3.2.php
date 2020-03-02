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
    <h1>Oefening 1</h1>
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
<h1>Oefening 2</h1>
    <?php
        $countryName = "Nederland";
        $currentAge = 18;

        if($countryName == 'Belgie')
            if ($currentAge < 16)
            {
                echo ("<p>Je mag geen alcohol drinken</p>");
            }
            else if ($currentAge >= 16 && $currentAge <= 17)
            {
            echo ("<p>Je mag hier lichte alchol drinken</p>");
             }
            else
            {
            echo ("<p>Je mag hier zware alcohol drinken</p>");
            }

        else if ($countryName == 'Bulgarije')
            if ($currentAge < 18)
            {
                echo ("<p>Je mag hier geen alcohol drinken</p>");
            }
            else
            {
            echo ("<p>Je mag hier alle alcohol drinken</p>");
             }

        else if ($countryName == 'Cyprus')
            if ($currentAge < 17)
            {
                echo ("<p>Je mag hier geen alcohol drinken</p>");
            }
            else
            {
                echo ("<p>Je mag hier alle alcohol drinken</p>");
            }

        else if ($countryName == 'Nederland')
            if ($currentAge < 18)
            {
                echo ("<p>Je mag hier geen alcohol drinken</p>");
            }
            else
            {
                echo ("<p>Je mag hier alle alcohol drinken</p>");
            }

        else if ($countryName == 'Zweden')
            if ($currentAge < 18)
            {
                echo ("<p>Je mag hier geen alcohol drinken</p>");
            }

            else if ($currentAge >= 18 && $currentAge <= 19)
            {
                echo ("<p>Je mag hier lichte alcohol drinken</p>");
            }

            else
            {
                echo ("<p>Je mag hier alle alcohol drinken</p>");
            }



    ?>
</div>
</body>
</html>