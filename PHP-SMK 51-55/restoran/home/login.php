<div class="row">          
    <div class="col-4 mx-auto mt-5">
        <div class="form-group"> 
            <div>
                <h3>LOGIN PELANGGAN</h3>
            </div>
            <form action="" method="post">

            <!-- Form Pertama -->
            <div class="form-group w-70">
                <label for="">Email</label>
                <input type="email" name="email" required placeholder="Masukkan Email Anda" class="form-control">
            </div>

            <!-- Form Kedua -->
            <div class="form-group w-70">
                <label for="">Password</label>
                <input type="password" name="password" required placeholder="Masukkan Password Anda" class="form-control">
            </div>

            <!-- Button -->
            <div>
                <input type="submit" name="login" value="login" class="btn btn-primary">
            </div>
            </form>
        </div>   
    </div>    
</div>

<?php 
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif = 1";
        $count = $db->rowCOUNT($sql);

        if($count == 0){
            echo "<center><h3>Email atau Password Salah</h3></center>";
        }else {
            $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif = 1";
            $row = $db->getITEM($sql);

            $_SESSION['pelanggan'] = $row['email'];
            $_SESSION['idpelanggan'] = $row['idpelanggan'];

            header("location:index.php");
        }

    } 
?>