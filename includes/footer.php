</div>
<div class="box">
<?php
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date('H');
    $year = date('Y');
    $moment = '';

    if($uur >= 0 && $uur < 5)
    {
        $moment = 'Goedennacht';
    }
    else if ($uur >= 5 && $uur < 12)
        {
            $moment = 'Goedenochtend';
        }
    else if($uur >= 12 && $uur < 17)
    {
        $moment = 'Goedenmiddag';
    }
    else if ($uur >= 17 && $uur < 24)
    {
        $moment = 'Goedeavond';
    }

    echo $moment . ' bezoeker, copyright Tim Bogers '. $year

?>
</div>
</body>
</html>