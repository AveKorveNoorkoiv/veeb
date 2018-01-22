<?php
/**
 * Created by PhpStorm.
 * User: Ave
 * Date: 12.01.2018
 * Time: 8:55
 */

function vorm(){
    $serveriArv = $_POST['serveriArv'];
    $serveriArv = isset($serveriArv) ?  $serveriArv: rand(1, 20);
    $kordadeArv = $_POST['kordadeArv'];
    $kordadeArv = isset($kordadeArv) ? ++$kordadeArv : 0;
//    echo $serveriArv.'<br />';
    echo '
    <form action="mang.php" method="post">
    <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    <input type="hidden" name="kordadeArv" value="'.$kordadeArv.'">
    <input type="text" name="kasutajaArv"><br />
    <input type="submit" value="Kontrolli">
    </form>
    ';
}
/**koodi kirjutades pigem kasutada GET,
 * siis on ribal näha, kas andmed läksid.
 * Kui rakendus juba kasutusse, siis POST,
 * siis ei ole näha ribal andmeid**/
function vormiAndmed(){
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/
    $korras = false;
    if(empty($_POST)){
//        echo 'Vorm ei saatnud andmed<br />';
    } else {
//        echo 'Andmed on saadetud<br />';
        if(empty($_POST['kasutajaArv'])){
//            echo 'Andmed peavad olema sisestatud<br />';
        } else {
//            echo 'Andmed on sisestatud<br />';
            $korras = true;
        }
    }
    return $korras;
}

/**
 * @param $kasutajaArv
 * @param $serveriArv
 */
function arvuKontroll($kasutajaArv, $serveriArv){
    if($kasutajaArv > $serveriArv){
        echo 'Pakutud väärtus on suurem<br />';
    }
    if($kasutajaArv < $serveriArv){
        echo 'Pakutud väärtus on väiksem<br />';
    }
    if(abs($serveriArv - $kasutajaArv) <= 5){
        if($kasutajaArv == $serveriArv){
            echo 'Õnnitleme! Arvasid ära!<br />'
                . 'Sul kulus '.++$_POST['kordadeArv'].' katset';
            exit;
        }
        echo 'Aga oled juba väga lähedal<br />';
    }
}
vorm();
//vormiAndmed();
if(vormiAndmed()){
    arvuKontroll($_POST['kasutajaArv'], $_POST['serveriArv']);
} else {
    echo 'Sisesta number vahemikus 1-20<br />';
}
