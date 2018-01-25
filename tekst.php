<?php
/**
 * Created by PhpStorm.
 * User: Ave
 * Date: 25.01.2018
 * Time: 10:32
 */

class tekst
{ // classi algus
    // classi omadused-väljad-fields
    // klassi muutuja
    var $sone = ''; // teksti kirjeldavad sõnad

    /**
     * tekst constructor.
     * @param string $sone
     */
    public function __construct($sone)
    {
        $this->maaraTekst($sone);
    }
    // klassi tegevused
    // meetoditena
    //teksti määramine
    // maaraTekst(Tere Maailm!);
    function maaraTekst($sone) {
        $this->sone = $sone;
    }
    //teksit väljastamine
    function prindiTekst () {
        echo $this->sone.'<br/>';
    }

} // classi lõpp