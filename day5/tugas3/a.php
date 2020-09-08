<?php 
    $InputProgram = 1;
    function luasSegitiga($tinggi, $alas){
        return $luas = 0.5 * $alas * $tinggi;
    }

    $output = luasSegitiga(5, 10);
    echo $output;

    function luasPersegi($sisi){
        return $luas = $sisi * $sisi;
    }

    $hitung = luasPersegi(8);
    echo $hitung;
?>