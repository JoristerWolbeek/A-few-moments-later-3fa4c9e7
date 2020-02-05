<?php

$length = count($argv);
for($i=0; $i<=$length; $i++){
    $vorm = substr($argv[$i], -1);
    $tijd = (int)$argv[$i];
    switch($vorm){
        case "s":
            $totaal.=$tijd;
        break;
        case "m":
            $reken = $tijd*60;
            $totaal.=$reken;
        break;
        case "u":
            $tijd*3600;
            $totaal.=$reken ;
        break;
        case "d":
            $tijd*86400;
            $totaal.=$reken;
        break;
    }
}
echo("de tijd is: ".$totaal);