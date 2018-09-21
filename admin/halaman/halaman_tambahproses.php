<?php
    $isi = addslashes($_POST['isi']);
    mysql_query("
        INSERT INTO halaman
        SET
            judul='$_POST[judul]',
            isi='$isi'
    ") or die(mysql_error());
    echo "Data halaman telah disimpan!";
    echo "<meta http-equiv='refresh' content='1;url=?tampil=halaman'>";
?>