<?php
    mysql_query("
        DELETE FROM halaman
        WHERE id_halaman = '$_GET[id]'
    ")or die(mysql_error());

    echo "Data halaman berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='1 ;url=?tampil=halaman'>";
?>