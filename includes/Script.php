
<?php
// PHP, Mnr Abu
// SQL, Mnr Van de Wetering
// ASP, Mnr van Meer
// JavaScript, Mnr Evers
// HTML/CSS, Mnr van Meer
// Modelleren, Mnr van Bijnen
// Nederlands, Mnr, Van den Ende
// Engels, Mnr van Giessen
// Computertekenen, Mnr Van den Berg
// Digitale vaardigheden, Mvr Pillage
// Loopbaan en burgerschap, Mvr de Ruiter

$courseName = 'PHP';
$teacherName = 'Mnr Abu';

switch ($courseName)
{
    case "SQL":
        $teacherName = "Mnr Van de Wetering";
        break;
    case "ASP":
        $teacherName = "Mnr van Meer";
        break;
    case "JavaScript":
        $teacherName = "Mnr Evers";
        break;
    case "HTML/CSS":
        $teacherName = "Mnr van Meer";
        break;
    case "Modelleren":
        $teacherName = "Mnr van Bijnen";
        break;
    case "Nederlands":
        $teacherName = "Mnr Van den Ende";
        break;
    case 'Engels':
        $teacherName = "Mnr van Giessen";
        break;
    case "Computertekenen":
        $teacherName = "Mnr Van den Berg";
        break;
    case "Digitale vaardigheden":
        $teacherName = "Mvr Pillage";
        break;
    case "Loopbaan en burgerschap":
        $teacherName = "Mvr de Ruiter";
        break;
}

echo "Voor het vak " .$courseName ." heb je " .$teacherName ." als docent.";
?>
