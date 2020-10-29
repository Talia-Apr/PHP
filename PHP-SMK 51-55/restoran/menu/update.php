<?php 
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $sql = "SELECT * FROM tblmenu WHERE idmenu=$id";
            
            $item = $db->getITEM($sql);

            $idkategori = $item['idkategori'];
            $gambar = $item['gambar'];
        }

        $row = $db->getAll("SELECT *FROM tblkategori ORDER BY kategori ASC");
    ?>

<h3>UPDATE MENU</h3>

<div class="form-group">
    <form action="" method="post" enctype="multipart/form-data">

    <!-- Form Pertama(Combobox) -->
    <div class="form-group w-50">
        <label for="">Kategori</label>
        <br>
        <select name="idkategori" id="">
            <?php foreach ($row as $r): ?>
            <option 
                <?php if ($idkategori == $r['idkategori']) echo "Selected" ?>
                value="<?php echo $r['idkategori'] ?>">
                <?php echo $r['kategori'] ?>
            </option>
            <?php endforeach ?>
        </select>
    </div>

    <!-- Form Kedua -->
    <div class="form-group w-50">
        <label for="">Nama Menu</label>
        <input type="text" name="menu" required value="<?php echo $item['menu'] ?>" class="form-control">
    </div>

    <!-- Form Ketiga -->
    <div class="form-group w-50">
        <label for="">Harga Menu</label>
        <input type="text" name="harga" number required value="<?php echo $item['harga'] ?>" class="form-control">
    </div>

    <!-- Form Keempat -->
    <div class="form-group w-50">
        <label for="">Gambar Menu</label>
        <br>
        <input type="file" name="gambar">
    </div>

    <!-- Button -->
    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </div>

    </form>
</div>

<?php 
    if (isset($_POST['simpan'])) {
        $idkategori = $_POST['idkategori'];
        $menu = $_POST['menu'];
        $harga = $_POST['harga'];       
        $temp = $_FILES['gambar']['tmp_name'];

        if(!empty($temp)){
            $gambar = $_FILES['gambar']['name'];
            move_uploaded_file($temp,"../upload/".$gambar);
        }

        $sql = "UPDATE tblmenu SET idkategori='$idkategori', menu='$menu', gambar='$gambar', harga=$harga
                WHERE idmenu=$id";
        echo $sql;
        $db -> runSQL($sql);
        header("location:?f=menu&m=select");
        
    }
?>