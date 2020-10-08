<h3>INSERT USER</h3>

<div class="form-group">
    <form action="" method="post">

    <!-- Form Pertama -->
    <div class="form-group w-50">
        <label for="">Nama User</label>
        <input type="text" name="user" required placeholder="Isi user" class="form-control">
    </div>

    <!-- Form Kedua -->
    <div class="form-group w-50">
        <label for="">Email</label>
        <input type="text" name="email" required placeholder="Email" class="form-control">
    </div>

    <!-- Form Ketiga -->
    <div class="form-group w-50">
        <label for="">Password</label>
        <input type="password" name="password" required placeholder="Password" class="form-control">
    </div>

    <!-- Form Keempat -->
    <div class="form-group w-50">
        <label for="">Konfirmasi Password</label>
        <input type="password" name="konfirmasi" required placeholder="Konfirmasi Password" class="form-control">
    </div>

    <!-- Combobox -->
    <div class="form-group w-50">
        <label for="">Level</label>
        <br>
        <select name="level" id="">
            <option value="admin">Admin</option>
            <option value="koki">Koki</option>
            <option value="kasir">Kasir</option>
        </select>
    </div>

    <!-- Button -->
    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </div>
    </form>
</div>

<?php 
    if (isset($_POST['simpan'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $level = $_POST['level'];

        if ($password == $konfirmasi) {
            $sql = "INSERT INTO tbluser VALUES('','$user','$email','$password','$level',1)";
            $db->runSQL($sql);
            header("location:?f=user&m=select");
        } else {
            echo '<h3>Password Tidak Sama!</h3>';
        }
    }
?>