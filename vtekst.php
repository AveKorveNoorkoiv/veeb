<?php
/**
 * Created by PhpStorm.
 * User: Ave
 * Date: 25.01.2018
 * Time: 11:10
 */

require_once 'tekst.php';
class vtekst extends tekst
{
// lisame värvi
var  $varv = '';

    /**
     * vtekst constructor.
     * @param string $varv
     */
    public function __construct($sone,$varv)
    {
        parent::__construct($sone);
        $this->varv = $varv;
    }

    function maaraVarv($varv) {
    $this->varv = $varv;
}
}