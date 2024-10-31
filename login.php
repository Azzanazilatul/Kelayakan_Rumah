<?php
session_start();
if (isset($_SESSION['login_username'])) {
    header("location:home.php");
}
include("inc_koneksi.php");
$username="";
$password="";
$err="";
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username==''or$password==''){
        $err.="Silahkan masukan username dan password";
    }
    if(empty($err)){
        $sql1="select*from login where username='$username'";
        $q1=mysqli_query($koneksi,$sql1);
        $r1=mysqli_fetch_array($q1);
        if($r1['password']!=md5($password)){
            $err.="<li>akun tidak ditemukan</li>";
        }
    }
    if (empty($err)) {
        $_SESSION['login_username'] = $username; 
        header("location:home.php");
        exit();
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><div id="app">
        <h1>Halaman Login</h1>
        <?php
        if($err){
            echo"<ul>$err</ul>";
        }
        ?>
        <form action="" method="post" class="btn btn-primary">
            <input type="text" value="<?php echo $username?>" name="username" class="input" placeholder="username"/><br/><br/>
            <input type="password" name="password" class="input" placeholder="Password"/><br/><br/>
            <input type="submit" name="login" value="Masuk ke Sistem"/><br/><br/>
        </form>
    </div></center>
</body>
</html>