<?php
    $tomb = array(1 ,5, 8, 17, 25);
    for( $i = 0 ; $i < count( $tomb ) ; ++$i )
    {
        echo "{$tomb[$i]}\n";
    }

    foreach($tomb as $szamok)
    {
        if ($szamok % 2 == 0)
        {
            echo "\nPáros szám(ok):{$szamok}\n";
        }
    }
    foreach(array_reverse($tomb) as $szam)
    {
            echo "\n{$szam}";      
    }
    $sum = array_sum($tomb);
    echo "\nÖsszeg: {$sum}\n";

    $average = array_sum($tomb)/count($tomb);
    echo "Átlag: {$average}"
?>