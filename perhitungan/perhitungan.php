<?php
function hitung($ulayer, $umobil)
{
    // rumus ....

    $mobil_kecil = mobil_kecil($umobil);
    $mobil_sedang = mobil_sedang($umobil);
    $mobil_besar = mobil_besar($umobil);


    $layer_sedikit = layer_sedikit($ulayer);
    $layer_sedang = layer_sedang($ulayer);
    $layer_banyak = layer_banyak($ulayer);



    // gagal
    if ($mobil_kecil > $mobil_sedang) {
        // # code...
        $text = "mobil Kecil";
        // $text = $mobil_kecil;
    } elseif ($mobil_sedang > $mobil_kecil) {
        $text = "mobil sedang";
    } elseif ($mobil_sedang > $mobil_besar) {
        $text = "mobil sedang";
        // $text = $mobil_sedang;
    } elseif ($mobil_besar > $mobil_sedang) {
        $text = "mobil besar";
        // $text = $mobil_besar;
    } else {
        $text = "crash";
        // $text = "mobil besar" + 
        // $text = $mobil_besar;
    }
    echo $text;

    // return ($mobil_kecil);
}

function br()
{
    echo "<br>";
}


// Mobil

function mobil_kecil($umobil)
{
    // mobil kecil
    if ($umobil <= 14) {
        $mobil = 1;
    } elseif (14 <= $umobil && $umobil <= 17) {
        $mobil = (17 - $umobil) / (17 - 14);
    } elseif ($umobil >= 17) {
        $mobil = 0;
    }
    return ($mobil);
}

function mobil_sedang($umobil)
{
    // mobil sedang
    if ($umobil >= 14) {
        $mobil = 0;
    } elseif (14 <= $umobil && $umobil <= 16) {
        $mobil = ($umobil - 14) / (16 - 14);
    } elseif (16 <= $umobil && $umobil <= 18) {
        $mobil = (18 - $umobil) / (18 - 16);
    } elseif ($umobil >= 18) {
        $mobil = 0;
    }
    return ($mobil);
}

function mobil_besar($umobil)
{
    //mobil besar
    if ($umobil >= 15) {
        $mobil = 0;
    } elseif (15 <= $umobil && $umobil <= 18) {
        $mobil = ($umobil - 15) / (18 - 15);
    } elseif ($umobil >= 18) {
        $mobil = 0;
    }
    return ($mobil);
}


// layer
function layer_sedikit($ulayer)
{
    // layer kecil
    if ($ulayer <= 2) {
        $layer = 1;
    } elseif (2 <= $ulayer && $ulayer <= 3) {
        $layer = (3 - $ulayer) / (3 - 2);
    } elseif ($ulayer >= 3) {
        $layer = 0;
    }
    return ($layer);
}

function layer_sedang($ulayer)
{
    // mobil sedang
    if ($ulayer >= 2) {
        $layer = 0;
    } elseif (2 <= $ulayer && $ulayer <= 2.5) {
        $layer = ($ulayer - 2) / (3.5 - 2);
    } elseif (3.5 <= $ulayer && $ulayer <= 5) {
        $layer = (5 - $ulayer) / (5 - 3.5);
    } elseif ($ulayer >= 5) {
        $layer = 0;
    }
    return ($layer);
}

function layer_banyak($ulayer)
{
    //layer besar
    if ($ulayer >= 4) {
        $layer = 0;
    } elseif (4 <= $ulayer && $ulayer <= 6) {
        $layer = ($ulayer - 4) / (6 - 4);
    } elseif ($ulayer >= 6) {
        $layer = 0;
    }
    return ($layer);
}
