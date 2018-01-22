<?php
/**
 * Created by PhpStorm.
 * User: Ave
 * Date: 22.01.2018
 * Time: 16:06
 */

/**
 * Koostada funktsioon nimega arvuSumma, mis võtab parameetrina suvalise numbri
 * ja  arvutab numbri arvude summa juhul, kui
 * on argumendina funktsioonile antud nr 123, siis
 * programm peab leidma 1+2+3 summa ehk 6
 * Koostada funktsioon nimega otsiNumber, mis
 * võtab parameetrina suvalise arvu ja
 * kindlaks määratud arvu ja arvutab mitu korda
 * määratud arv esineb suvalises numbris, näiteks
 * arv 5 esineb numbris 442158755745 neli korda.
 */

/*suvaline number suvalisest arvust*/
function arvuSumma($suvalineNumber){
    $summa = 0;
    while($suvalineNumber){
        $arv = $suvalineNumber % 10;
        $summa = $summa + $arv;
        $suvalineNumber = $suvalineNumber / 10;
    }
    return $summa;
}
$suvalineNumber = rand(100, 999);
echo $suvalineNumber.' summa on '.arvuSumma($suvalineNumber);
?><br><br><?php
function otsiNumber($suvalineNumber, $number){
    $korrad = 0;
    $arvutuseNumber = $suvalineNumber;
    while($arvutuseNumber){
        $arv = $arvutuseNumber % 10;
        if($arv == $number){
            $korrad++;
        }
        $arvutuseNumber = $arvutuseNumber / 10;
    }
    echo 'Number '.$number.' esineb arvus '.$suvalineNumber.' - '.$korrad.' korda';
}
$nr1 = rand(100000000000, 999999999999);
$nr2 = rand(1, 9);
otsiNumber($nr1, $nr2);

/*kindlast arvust kindel number*/
?><br><br><?php
function otsiNr($suvalineArv, $kindelArv){
    echo 'Number '.$kindelArv.' esineb arvus '.$suvalineArv;
    $mituKorda = 0;
    while($suvalineArv != 0){
        $arv = $suvalineArv % 10;
        if($arv == $kindelArv){
            $mituKorda++;
        }
        $suvalineArv = $suvalineArv / 10;
        settype($suvalineArv, 'integer');
    }
    echo ' '.$mituKorda.' korda<br />';
}
otsiNr(47507262747, 7);