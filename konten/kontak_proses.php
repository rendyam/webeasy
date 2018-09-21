<?php
    if(!defined("INDEX")) die("---");

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = addslashes($_POST['pesan']);

    $subjek = "Pesan dari pengunjung website";
    $dari = "auliarendy17@gmail.com";
    $tgl = date('Ymd');

    mail($email, $subjek, $pesan, $dari);

    mysql_query("
        INSERT INTO
            pesan
        SET
            nama = '$nama',
            email = '$email',
            pesan = '$pesan',
            tanggal = '$tgl'
    ")or die(mysql_error());

    echo "Pesan telah terkirim!";
    echo "<meta http-equiv='refresh' content='1;url=?tampil=kontak'>";
?>