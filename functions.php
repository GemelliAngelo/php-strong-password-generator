<?php

function randomPasswordGenerator($length, $alphabetic = "on", $numbers = "on", $symbols = "on") {

    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $allNumbers = '0123456789';
    $allSymbols = '!@#$%^&*()-_=+';
    $chars = '';
    $password = '';

if($alphabetic == "on"){
    $chars.= $alphabet;
}

if($numbers == "on"){
    $chars.= $allNumbers;
}

if($symbols == "on"){
    $chars.= $allSymbols;
}

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, strlen($chars) - 1)];
    }

var_dump($alphabetic);
var_dump($numbers);
var_dump($symbols);
var_dump($chars);

    return $password;
}

function getSession(){

    if (isset($_GET['passwordLength'])) {
        $_SESSION['password'] = randomPasswordGenerator($_GET['passwordLength'], $_GET['alphabetic'], $_GET['numbers'], $_GET['symbols']);
    }

}

?>