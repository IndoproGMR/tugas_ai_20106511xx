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
