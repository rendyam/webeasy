<?php
    mysql_query("
        DELETE FROM submenu
        WHERE
            id_submenu='$_GET[id]'
    ")or die(mysql_error());
    echo "Data berhasil dihapus!";
    echo "<meta http-equiv='refresh', content='1; url=?tampil=submenu'>";
?>