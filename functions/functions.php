<?php
function getRandonString($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&*+-./:;=?@\_|';
    $charactersLength = strlen($characters);
    $randomString = '';
 
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
 
    return $randomString;
    }

?>
