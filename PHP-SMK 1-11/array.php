<?php 

// ARRAY DIMENSI

$nama = array("Joni","Tejo","Budi","Siti",100,2.5); 

var_dump($nama);

echo "<br><br>";

echo $nama[5];

echo "<br><br>";

// for ($i=0; $i<6; $i++){
//     //echo $1;
//     echo $nama[$i]."<br>";
// }

// foreach ($nama as $key) {
//     echo $key."<br>";
// }

// ARRAY ASOSIATIF

// $nama = array (
//     "Joni" => "Surabaya",
//     "Budi" => "Malang Raya",
//     "Tejo" => "Jakarta",
//     "Siti" => "Sidoarjo",
// );

$nama["Joni"]="Surabaya";
$nama["Budi"]="Malang Raya";
$nama["Tejo"]="Jakarta";
$nama["Siti"]="Sidoarjo";
$nama["Edi"]="Semarang";

var_dump($nama);

echo "<br><br>";

// echo $nama['Budi'];

foreach ($nama as $key => $value) {
    echo $key."=>".$value."<br>";
}

?>