<?php
    if($_POST['password'] == ""){
        mysql_query("
            UPDATE user
            SET
                username = '$_POST[username]'
        ")or die(mysql_error());
        echo "Profil berhasil diedit!";
    }else{
        if($_POST['password'] != $_POST['password_ulang']){
            echo "<p style='color:red'>Password dan Ulang Password tidak sama! </p>";
        }else{
            $password = md5($_POST['password']);
            mysql_query("
                UPDATE user
                SET
                    username = '$_POST[username]',
                    password = '$password'
            ")or die(mysql_error());
            echo "Profile berhasil diedit!";
        }
    }
    echo "<meta http-equiv='refresh' content='1; url=?tampil=user_edit'>";
?>