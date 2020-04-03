
<?php
$task2 = "Lancering in: ";
$counter = 19;
while($counter > 0)
{
    $task2 .= $counter.',';
    $counter--;
}

// Taak 3

$task3 = "Lancering in: ";

for($counter = 19; $counter >0; $counter--)
    $task3 .= $counter.",";

// Taak 4

$task4 = "";
$counter2 = 1;
while($counter2 <=6)
{
    $task4 .= "<h$counter2>Dit is de ". $counter2. "e iteratie<h$counter2>";
    $counter2++;
}

// Taak 5

$task5 = " ";
$tableBegin = "<table>";
$tableEnd = "</table>";
$task5 = $tableBegin;

for($counter3 = 1; $counter3 <= 10; $counter3++)
{
    $task5 .= "<tr><td> Dit is de " . $counter3 . "e iteratie</td></tr>";
}
$task5 .= $tableEnd;

// taak 6

$task6 = " ";
$counter4 = 19;
$jaartal = 2020;

while($jaartal >= 2001)
{
    if ($counter4 == 19)
    {
        $task6 .= "<p> In " . $jaartal . " word ik " .$counter4 . " jaar oud</p>";
    }
    else
    {
        $task6 .= "<p> In " . $jaartal . " was ik " .$counter4 . " jaar oud</p>";
    }
    $counter4--;
    $jaartal--;
};

// taak 7

$task7 = " ";
$counter5 = 19;
$jaartal2 = 2020;

while($jaartal2 >= 2001)
{
    if($jaartal2 == 2020)
    {
        $task7 .= "<p> In " .$jaartal2 ." word ik " .$counter5 ." jaar oud </p>";
    }

    else if($jaartal2 == 2019)
    {
        $task7 .= "<p> In " .$jaartal2 ." was ik " .$counter5 ." jaar oud en werd ik een adolescent </p>";
    }

    else if($jaartal2 == 2013)
    {
        $task7 .= "<p> In " .$jaartal2 ." was ik " .$counter5 ." jaar oud en werd ik een puber </p>";
    }

    else if($jaartal2 == 2009)
    {
        $task7 .= "<p> In " .$jaartal2 ." was ik " .$counter5 ." jaar oud en werd ik een tiener </p>";
    }

    else if($jaartal2 == 2005)
    {$task7 .= "<p> In " .$jaartal2 ." was ik " .$counter5 ." jaar oud en werd ik een kleuter </p>";

    }

    else if($jaartal2 == 2003)
    {
        $task7 .= "<p> In " .$jaartal2 ." was ik " .$counter5 ." jaar oud en werd ik een peuter </p>";
    }

    else if($jaartal2 == 2001)
    {
        $task7 .= "<p> In " .$jaartal2 ." ben ik " .$counter5 ." geboren en was ik een baby </p>";
    }
    $counter5--;
    $jaartal2--;
}







?>
