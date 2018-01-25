<?php
/**
 * Created by PhpStorm.
 * User: Ave
 * Date: 25.01.2018
 * Time: 10:47
 */
require_once 'tekst.php';

//loome teksti objeksti
$minuTekst = new tekst();
// määrame tekstile konkreetse susu
$minuTekst = new tekst('Tere Maailm!');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// prindime välja
$minuTekst->prindiTekst();
