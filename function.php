<?php
    $passLength = intval($_GET['passLength']);

    function getPassword ($strLength) {
        $password = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#-?'),1,$strLength);
        header('Location: show.php');
        return $password;
    }
?>