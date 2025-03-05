<?php

function randomPasswordGenerator($length = 12) {
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $password = '';
    $max = strlen($caratteri) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $caratteri[random_int(0, $max)];
    }

    return $password;
}

?>