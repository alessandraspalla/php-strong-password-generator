<?php

    $lettersMin = range('a', 'z');
    $lettersCap = range('A', 'Z');
    $numbers = range(0, 9);
    $special = [...range("!", "/"), ...range(":", "@"), ...range("{", "~")];

    $lng = $_GET['length'];

    $lettersUser = $_GET['letters'];
    $numbersUser = $_GET['numbers'];
    $symbolsUser = $_GET['symbols'];
    $riptetitionUser = $_GET['ripetition'];

    if ($lng === null || $lng === "") return;

    if ($lettersUser === null 
        && $numbersUser === null 
        && $symbolsUser === null) 
        return;
    $selected = [];

    if ($lettersUser == "on") {
        for ($x=0;$x<count($lettersMin); $x++) {
            $selected[] = $lettersMin[$x];
        }
        for ($x=0;$x<count($lettersCap); $x++) {
            $selected[] = $lettersCap[$x];
        }
    }

    if ($numbersUser == "on") {
        for ($x=0;$x<count($numbers); $x++) {
            $selected[] = $numbers[$x];
        }
    }

    if ($symbolsUser == "on") {
        for ($x=0;$x<count($special); $x++) {
            $selected[] = $special[$x];
        }
    }

    if ($riptetitionUser == null && $lng > count($selected)) return;

    $res = "";
    while(strlen($res) < $lng) {
        $rndInd = rand(0, count($selected) - 1);
        $rndChr = $selected[$rndInd];
        if ($riptetitionUser == 'on' || !str_contains($res, $rndChr)) {
            $res .= $rndChr;
        }
    }

    session_start();
    $_SESSION["password"] = $res;
    header("Location: show.php");
?>