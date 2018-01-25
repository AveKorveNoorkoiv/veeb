<?php
/**
 * Created by PhpStorm.
 * User: Ave
 * Date: 25.01.2018
 * Time: 10:47
 */
require_once 'tekst.php';

//loome teksti objeksti

// määrame tekstile konkreetse susu
$minuTekst = new tekst('Tere Maailm!');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// prindime välja
$minuTekst->prindiTekst();

// loome veel ühe objekti
// ja määrame sisu

$mustTekst = new tekst('Must tekst');
echo '<pre>';
print_r($mustTekst);
echo '</pre>';
//prindime välja
$mustTekst->prindiTekst();

// nõuame kirjelduse faili
require_once 'vtekst.php';
//loome värvilise objekti
//määrame sisu
$punaneTekst = new vtekst('Punane tekst', '#FF0000');
echo '<pre>';
print_r($punaneTekst);
echo '</pre>';
$punaneTekst->prindiTekst();
