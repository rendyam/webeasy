<?php
    if(!defined("INDEX")) die("---");
    $tgl = date('Ymd');

    mysql_query("
            INSERT INTO
                komentar
            SET
                id_artikel = '$_POST[id]',
                nama = '$_POST[nama]',
                email = '$_POST[email]',
                komentar = '$_POST[komentar]',
                tanggal = '$tgl'
            ")or die(mysql_error());
    echo "Komentar telah dikirim!";
    echo "<meta http-equiv='refresh' content='1;url=?tampil=artikel_detail&id=$_POST[id]'>";
?>