<?php 

    session_start();
    require_once "../dbcontroller.php";
    $db = new DB;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Restoran</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">   
    <div class="row">          
        <div class="col-4 mx-auto mt-5">
            <div class="form-group"> 
                <div>
                
                    <h3>LOGIN RESTORAN</h3>
                
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
</div>
</body>
</html>

<?php 

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM tbluser WHERE email='$email' AND password='$password'";
        $count = $db->rowCOUNT($sql);

        if($count == 0){
            echo "<center><h3>Email atau Password Salah</h3></center>";
        }else {
            $sql = "SELECT * FROM tbluser WHERE email='$email' AND password='$password'";
            $row = $db->getITEM($sql);

            $_SESSION['user'] = $row['email'];
            $_SESSION['level'] = $row['level'];
            $_SESSION['iduser'] = $row['iduser'];

            header("location:index.php");
        }


    } 

?>