<?php
    mysql_query("
        UPDATE
            submenu
        SET
            judul='$_POST[judul]',
            id_menu='$_POST[induk]',
            link='$_POST[link]',
            urutan='$_POST[urutan]'
        WHERE
            id_submenu='$_POST[id]'
    ")or die(mysql_error());

    echo "Data berhasil diedit!";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=submenu'>";
?>