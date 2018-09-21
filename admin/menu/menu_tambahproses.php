<?php
    mysql_query("
            INSERT INTO menu
            SET
                judul = '$_POST[judul]',
                link = '$_POST[link]',
                urutan = '$_POST[urutan]'
        ")or die(mysql_error());
    echo "Data berhasil disimpan!";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=menu'>";
?>