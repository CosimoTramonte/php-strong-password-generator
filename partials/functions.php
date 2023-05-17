<?php

function createPassword($passwordLength){

    $alfabetoMinuscolo = "abcdefghijklmnopqrstuvwxyz";
    $caratteriSpeciali = "!?&%$<>^+-*/()[]{}@#_=";
    $stringaGenerata ="";

    while (strlen($stringaGenerata) <= $passwordLength ) {
    $stringaGenerata .= $alfabetoMinuscolo[random_int(0, strlen($alfabetoMinuscolo) - 1)];
    $stringaGenerata .= mb_strtoupper($alfabetoMinuscolo[random_int(0, strlen($alfabetoMinuscolo) - 1)]);
    $stringaGenerata .= $caratteriSpeciali[random_int(0, strlen($caratteriSpeciali) - 1)];
    $stringaGenerata .= rand(0,9);
    };

    $stringaGenerata = substr($stringaGenerata, 0, $passwordLength);
    $randomString = str_shuffle($stringaGenerata);

    return $randomString;
}


?>