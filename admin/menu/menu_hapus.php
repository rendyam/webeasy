<?php
    mysql_query("
        DELETE FROM menu
        WHERE
            id_menu='$_GET[id]'
    ")or die(mysql_error());
    echo "Data berhasil dihapus!";
    echo "<meta http-equiv='refresh', content='1; url=?tampil=menu'>";
?>