<?php 

    require_once "../function.php";

    // $id = 3;

    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";

    // $sql = "DELETE FROM tblkategori WHERE idkategori = 1";

    $result = mysqli_query($koneksi, $sql);

    header ("location:http://localhost/php/PHP-SMK%2017-22/restoran/kategori/select.php");


?>