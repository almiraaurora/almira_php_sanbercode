<?php

    require_once 'Animal.php';
    require_once 'Ape.php';
    require_once 'Frog.php';
    $sheep = new Animal("shaun");

    echo "Name: " . $sheep->name . "<br>"; // "shaun"
    echo "legs: " . $sheep->legs . "<br>"; // 4
    echo "cold-blooded: " . $sheep->cold_blooded . "<br><br>"; // "no"

    $kodok = new Frog("buduk");
    echo "Name: " . $kodok->name . "<br>"; // "shaun"
    echo "legs: " . $kodok->legs . "<br>"; // 4
    echo "cold-blooded: " . $kodok->cold_blooded . "<br>" ; // "no"
    echo "jump: " . $kodok->jump() . "<br><br>"; // "hop hop"

    $sungokong = new Ape("kera sakti");
    echo "Name: " . $sungokong->name . "<br>"; // "shaun"
    echo "legs: " . $sungokong->legs . "<br>"; // 4
    echo "cold-blooded: " . $sungokong->cold_blooded . "<br>"; // "no"
    echo "yell: " . $sungokong->yell() ;// "Auooo"
?>