<?php
    mysql_query("
        DELETE FROM pesan
        WHERE id_pesan='$_GET[id]'
    ")or die(mysql_error());
    echo "Data pesan berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=pesan'>";
?>