<?php
/**
 * Created by PhpStorm.
 * User: Ave
 * Date: 22.01.2018
 * Time: 16:35
 */
// n6uame andmebaasitootluse funkstioonid kasutusele
require_once 'db_fnk.php';
// tekitame yhendust andmebaasiga
$dbYhendus = yhendus();
// koostame sql lause ja saadame andmebaasi
$sql = 'SHOW TABLES';
$tulemus = annaAndmed($dbYhendus, $sql);
// uurime tulemuse sisu test kujul
echo '<pre>';
print_r($tulemus);
echo '</pre>';