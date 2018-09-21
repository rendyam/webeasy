<?php
    mail(
        $_POST['email'], $_POST['subjek'], $_POST['pesan'], "From: auliarendy17@gmail.com"
    );
    echo "Pesan telah dibalas!";
    echo "<meta http-equiv='refresh' content='1;url=?tampil=pesan'>";
?>