<?php
# Kode Disini
# Array
echo "<h3>Ini Array</h3>";
// Cara 1
$myArr = array("Asus", "Acer", "ThinkPad", "Huawei", "HP");

var_dump($myArr[3]);
echo "<hr>";
// Cara 2 
$laptop = ["Asus", "Acer", "ThinkPad", "Huawei", "HP"];
var_dump($laptop[1]);
echo "<hr>";


#Operator
echo "<h2>Ini Operator Aritmatika</h2>";
// Penjumlahan 
$a = 5;
$b = 2;
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";
// Pengurangan
$a = 5;
$b = 2;
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";
// Perkalian
$a = 5;
$b = 2;
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";
// Pembagian 
$a = 5;
$b = 2;
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";
// Pemangakatan
$a = 5;
$b = 2;
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";
// Modulus
$a = 5;
$b = 2;
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

#Penugasan
echo "<h2>Ini Operator Penugasan</h2>";
// Ngisi nilai 
$a = 10;
echo "Ini adalah inisiasi $a";
echo "<hr>";
// Ngisi pertambahan 
$b = 10;
echo $b += 1;
echo "<br>";
// Ngisi pengurangan
$c = 10;
echo $c -= 1;
echo "<hr>";
// Ngisi perkalian
$d = 10;
echo $d *=2;
echo "<hr>";
// Ngisi pembagian
$e = 10;
echo $e /= 2;
echo "<hr>";
// Ngisi pemangkatan
$f = 10; 
echo $f **= 2;
echo "<hr>";
// Ngisi sisa Bagi
$g = 10;
echo $g %= 2;
echo "<hr>";
// Ngisi String
$h = 10;
echo $h .= ' Sepuluh';
echo "<hr>";

#Relasi
echo "<h3>Ini Operator Relasi</h3>";
$K = 10;
$P = 5;

// Menggunakan Operator Ralasi lebih besar
$L = $K > $P;
echo "Ini menggunakan op relasi lebih besar $K > $P = $L";
echo "<hr>";

// Menggunakan Operator Ralasi lebih kecil
$A = $K < $P;
echo "Ini menggunakan op relasi lebih kecil $K < $P = $A";
echo "<hr>";

// Ini menggunakan Operator Relasi lebih sama dengan
$A = $K == $P;
echo "Ini menggunakan op relasi lebih sama dengan $K == $P = $A";
echo "<hr>";

// Ini menggunakan Operator Relasi lebih tidak sama dengan
$A = $K !== $P;
echo "Ini menggunakan op relasi lebih sama dengan $K !== $P = $A";
echo "<hr>";

// Ini menggunakan Operator Relasi lebih besar sama dengan
$A = $K >= $P;
echo "Ini menggunakan op relasi lebih sama dengan $K >= $P = $A";
echo "<hr>";

// Ini menggunakan Operator Relasi lebih kecil sama dengan
$A = $K <= $P;
echo "Ini menggunakan op relasi lebih kecil sama dengan $K <= $P = $A";
echo "<hr>";

#Ternary Operator
echo "<h3>Ini Ternary Operator</h3>";
$suka = true;

$jawab = $suka ? "Iya" : "Tidak";

echo $jawab;
echo "<hr>";

// Tugas Ternary
echo "<h3>Contoh Ternary</h3>";

$belajar = true;
$result = $belajar ? "Semangat" : "Lemes";
echo "Ini Pake Ternary = $result";

echo "<br>";
if ( $belajar == true) {
    $result = "Semangat";
} else {
    $result = "Lemes";
}

echo "Ini Pake If-Else = $result";