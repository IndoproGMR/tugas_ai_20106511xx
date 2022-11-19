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



    if ($mobil_kecil > $mobil_sedang) {
        $text_mobil = "mobil_kecil";
    } elseif ($mobil_sedang > $mobil_besar) {
        $text_mobil = "mobil_sedang";
    } elseif ($mobil_besar > $mobil_sedang) {
        $text_mobil = "mobil_besar";
    } else {
        $text_mobil = "crash";
    }


    if ($layer_sedikit > $layer_sedang) {
        $text_layer = "Layer_sedikit";
    } elseif ($layer_sedang > $layer_banyak) {
        $text_layer = "Layer_sedang";
    } elseif ($layer_banyak > $layer_sedang) {
        $text_layer = "Layer_banyak";
    } else {
        $text_layer = "crash";
    }


    echo "Jenis Mobil: " . $text_mobil;
    br();
    echo "Jenis Layer: " . $text_layer;

    // Logika Harga

    // mobil_kecil R1~R3
    // R1
    $a1 = min($mobil_kecil, $layer_sedikit);
    $z1 = 10 - ($a1 * (10 - 2));

    // R2
    $a2 = min($mobil_kecil, $layer_sedang);
    $z2 = 10 - ($a2 * (10 - 2));

    // R3
    $a3 = min($mobil_kecil, $layer_banyak);
    $z3 = 10 - ($a3 * (10 - 2));


    // mobil_sedang R4~R6
    // R4
    $a4 = min($mobil_sedang, $layer_sedikit);
    $z4 = 10 - ($a4 * (10 - 2));

    // R5
    $a5 = min($mobil_sedang, $layer_sedang);
    // $z5 = 10 - ($a5 * (10 - 2));
    // $z5 = 3.5;
    $z5 = $a5;

    // R6
    $a6 = min($mobil_sedang, $layer_banyak);
    $z6 = 2 + ($a6 * (10 - 2));




    // mobil_besar R7~R9
    // R7
    $a7 = min($mobil_besar, $layer_sedikit);
    $z7 = 2 + ($a7 * (10 - 2));

    // R8
    $a8 = min($mobil_besar, $layer_sedang);
    $z8 = 2 + ($a8 * (10 - 2));

    // R9
    $a9 = min($mobil_besar, $layer_banyak);
    $z9 = 2 + ($a9 * (10 - 2));

    $zp = ($a1 * $z1 +
        $a2 * $z2 +
        $a3 * $z3 +
        $a4 * $z4 +
        $a5 * $z5 +
        $a6 * $z6 +
        $a7 * $z7 +
        $a8 * $z8 +
        $a9 * $z9);

    $zd = ($a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9);
    br();
    echo $zp;
    br();
    echo $zd;

    br();
    echo "Hasil z = " . floatval($zp / $zd) . "\n";

    // return ($text);
}



// Mobil
// ==========================================
function mobil_kecil($umobil)
{
    // mobil kecil
    if ($umobil <= 14) {
        $mobil_k = 1;
    } elseif (14 <= $umobil && $umobil <= 17) {
        $mobil_k = (17 - $umobil) / (17 - 14);
    } elseif ($umobil >= 17) {
        $mobil_k = 0;
    }
    return ($mobil_k);
}

function mobil_sedang($umobil)
{
    // mobil sedang
    if ($umobil <= 14) {
        $mobil_k = 0;
    } elseif (14 <= $umobil && $umobil <= 16) {
        $mobil_k = ($umobil - 14) / (16 - 14);
    } elseif (16 <= $umobil && $umobil <= 18) {
        $mobil_k = (18 - $umobil) / (18 - 16);
    } elseif ($umobil >= 18) {
        $mobil_k = 0;
    }
    return ($mobil_k);
}

function mobil_besar($umobil)
{
    $mobil_k = $umobil;
    // mobil besar
    if ($umobil <= 15) {
        $mobil_k = 0;
    } elseif (15 <= $umobil && $umobil <= 18) {
        $mobil_k = ($umobil - 15) / (18 - 15);
    } elseif ($umobil >= 18) {
        $mobil_k = 1;
    }
    return ($mobil_k);
}
// ==========================================



// layer
// ==========================================
function layer_sedikit($ulayer)
{
    // layer sedikit
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
    // layer sedang
    if ($ulayer <= 2) {
        $layer = 0;
    } elseif (2 <= $ulayer && $ulayer <= 3.5) {
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
    //layer banyak
    if ($ulayer <= 4) {
        $layer = 0;
    } elseif (4 <= $ulayer && $ulayer <= 6) {
        $layer = ($ulayer - 4) / (6 - 4);
    } elseif ($ulayer >= 6) {
        $layer = 1;
    }
    return ($layer);
}
// ==========================================

// Debug
// ==========================================
function debug_layer($layer)
{

    echo "Layer sedikit: ";
    echo layer_sedikit($layer);
    br();

    echo "Layer sedang: ";
    echo layer_sedang($layer);
    br();

    echo "Layer banyak: ";
    echo layer_banyak($layer);
    br();
}

function debug_mobil($umobil)
{

    echo "mobil kecil: ";
    echo mobil_kecil($umobil);
    br();

    echo "mobil sedang: ";
    echo mobil_sedang($umobil);
    br();

    echo "mobil besar: ";
    echo mobil_besar($umobil);
    br();
}


function br()
{
    echo "<br>";
}
// ==========================================
