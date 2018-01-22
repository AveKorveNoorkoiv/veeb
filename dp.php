<?php
/**
 * Created by PhpStorm.
 * User: Ave
 * Date: 22.01.2018
 * Time: 16:35
 */
require_once 'db_fnk.php';
$dbYhendus = yhendus();
$sql = 'SHOW TABLES';
$tulemus = annaAndmed($dbYhendus, $sql);
echo '<pre>';
print_r($tulemus);
echo '</pre>';