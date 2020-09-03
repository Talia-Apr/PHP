<?php 

// $nama = array('tejo','budi','siti',100);

// var_dump($nama);

// echo "<br>";

// foreach ($nama as $key ) {
//     echo $key;
// }

$nama = array (
    "tejo" => "surabaya",
    "budi" => "malang",
    "siti" => "sidoarjo",
);

echo "<br><br>";

var_dump($nama);

echo "<br><br>";

foreach ($nama as $a => $b){
    echo $a.'-'.$b;
    echo "<br>";
}

?>