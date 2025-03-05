<?php

function randomPasswordGenerator($length, $alphabetic = true, $numbers = true, $symbols = true) {

    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $allNumbers = '0123456789';
    $allSymbols = '!@#$%^&*()-_=+';


if(!$alphabetic){
    $alphabet= '';
}

if(!$numbers){
    $allNumbers= '';
}

if(!$numbers){
    $allSymbols= '';
}

    $caratteri = $alphabet . $allNumbers . $allSymbols;
    $password = '';
    $max = strlen($caratteri) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $caratteri[random_int(0, $max)];
    }

    var_dump($caratteri);

    return $password;
}

function getSession(){

    if (isset($_GET['passwordLength'])) {
        $_SESSION['password'] = randomPasswordGenerator($_GET['passwordLength'], $_GET['alphabetic'], $_GET['numbers'], $_GET['symbols']);
      }

}

?>