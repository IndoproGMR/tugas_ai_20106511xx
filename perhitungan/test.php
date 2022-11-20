<?php
// Variabel
$a = 13;
$b = 5;
// $b = 6;
$mk = 0;
$ms = 0;
$mb = 0;
$ls = 0;
$lse = 0;
$lb = 0;

// Penentuan Fuzzy di Ukuran Mobil
//Kecil
if ($a <= 14) {
    $mk = 1;
}
if ($a >= 14 && $a <= 17) {
    $mk = (17 - $a) / (17 - 14);
}
if ($a >= 17) {
    $mk = 0;
}
// Sedang
if ($a <= 14) {
    $ms = 0;
}
if ($a >= 14 && $a <= 16) {
    $ms = ($a - 14) / (16 - 14);
}
if ($a >= 16 && $a <= 18) {
    $ms = (18 - $a) / (18 - 16);
}
if ($a >= 18) {
    $ms = 0;
}
// Besar
if ($a <= 15) {
    $mb = 0;
}
if ($a >= 15 && $a <= 18) {
    $mb = ($a - 15) / (18 - 15);
}
if ($a >= 18) {
    $mb = 1;
}

//Penentuan Fuzzy di Layer
//Sedikit
if ($b <= 2) {
    $ls = 1;
}
if ($b >= 2 && $b <= 3) {
    $ls = (3 - $b) / (3 - 2);
}
if ($b >= 3) {
    $ls = 0;
}

// Sedang
if ($b <= 2) {
    $lse = 0;
}
if ($b >= 2 && $b <= 3.5) {
    $lse = ($b - 2) / (3.5 - 2);
}
if ($b >= 3.5 && $b <= 5) {
    $lse = (5 - $b) / (5 - 3.5);
}
if ($b >= 5) {
    $lse = 0;
}

// Banyak
if ($b <= 4) {
    $lb = 0;
}
if ($b > 4 && $b < 6) {
    $lb = ($b - 4) / (6 - 4);
}
if ($b > 6) {
    $lb = 1;
}

// Logika Fuzzy
// R1

$a1 = min($mk, $ls);
$z1 = 10 - ($a1 * (10 - 2));

// R2

$a2 = min($mk, $lse);
$z2 = 10 - ($a2 * (10 - 2));

//R3
$a3 = min($mk, $lb);
$z3 = 10 - ($a3 * (10 - 2));


// R4

$a4 = min($ms, $ls);
$z4 = 10 - ($a4 * (10 - 2));

// R5

$a5 = min($ms, $lse);
$z5 = 3.5;

// R6

$a6 = min($ms, $lb);
$z6 = 2 + ($a6 * (10 - 2));

// R7

$a7 = min($mb, $ls);
$z7 = 2 + ($a7 * (10 - 2));

// R8

$a8 = min($mb, $lse);
$z8 = 2 + ($a8 * (10 - 2));

// R9
$a9 = min($mb, $lb);
$z9 = 2 + ($a9 * (10 - 2));

$z = (($a1 * $z1) + ($a2 * $z2) + ($a3 * $z3) + ($a4 * $z4) + ($a5 * $z5) + ($a6 * $z6) + ($a7 * $z7) + ($a8 * $z8) + ($a9 * $z9)) / ($a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9);

echo "Ukuran Mobil = " . floatval($a) . "\n";
echo "Banyaknya Layer = " . floatval($b) . "\n";
echo "Hasil z = " . floatval($z) . "\n";
