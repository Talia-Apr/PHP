<?php 

echo "<br>";
 echo "----------Array-----------";
 echo "<br><br>";
 $buah=['Apel','Mangga',100,'Jeruk',500,2.5];

 var_dump($buah);

 echo "<br><br>";

 echo $buah[5];

 echo "<br><br>";

 foreach ($buah as $key => $value) {
     echo $key . "=" . $value;
     echo "<br>";
 }

 echo "<br>";

//  Array asosiatif

 echo "----------Array Asosiatif-----------";
 echo "<br><br>";
 $harga=['Mangga'=>300,'Jeruk'=>100,'Apel'=>400];

 var_dump ($harga);

 echo "<br><br>";

 foreach ($harga as $key => $value) {
     echo $key. " harganya ". $value;
     echo "<br>";
 }

 echo "<br>";

 echo $harga['Mangga'];

 echo "<br><br>";

 $isi=array_keys($harga);

 var_dump ($isi);

 echo "<br><br>";

 echo $isi[0];



?>