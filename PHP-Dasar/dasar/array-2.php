<?php 

 $apel = ['manalagi', 'wasington', 'merah'];
 $buah = ['mangga'=> 200, 'jeruk'=>300, 'apel'=>$apel];

 var_dump($buah);

 echo "<br>";

 echo "<pre>";

 print_r($buah);

 echo "</pre>";

 echo $buah['apel'][0];

 echo "<br>";

 foreach ($buah as $key => $value) {
     if (!is_array($value)) {
        echo $key. "=>" . $value;
        echo "<br>";
     }
     else {
        echo $key;
        foreach ($value as $key => $value) {
            echo "<li>";
            echo $value;
            echo "</li>";
        }
     }
 }




?>