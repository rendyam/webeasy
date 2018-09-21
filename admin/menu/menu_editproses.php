<?php
    mysql_query("
        UPDATE
            menu
        SET
            judul='$_POST[judul]',
            link='$_POST[link]',
            urutan='$_POST[urutan]'
        WHERE
            id_menu='$_POST[id]'
    ")or die(mysql_error());

    echo "Data berhasil diedit!";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=menu'>";
?>