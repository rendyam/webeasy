<?php
    session_start();
    include("../lib/koneksi.php");

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek = mysql_query("
                SELECT 
                    *
                FROM
                    user
                WHERE
                    username = '$username'
                    and password = '$password'
            ");
    $data = mysql_fetch_array($cek);
    $jumlah = mysql_num_rows($cek);

    if($jumlah > 0){
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        echo "Login Berhasil!";
        echo "<meta http-equiv='refresh' content='1; url=admin.php'>";
    }else{
        echo "<center>Gagal! Username atau Password Salah! <br> <b><a href='index.php'>ULANGI</a></b></center>";
    }

?>