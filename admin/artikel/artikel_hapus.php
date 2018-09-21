<?php
    $data = mysql_fetch_array(mysql_query("
                SELECT
                    *
                FROM
                    artikel
                WHERE
                    id_artikel = '$_GET[id]'
            "));
    if($data['gambar'] != "")
        unlink("../gambar/artikel/$data[gambar]");

    mysql_query("
        DELETE FROM artikel
        WHERE id_artikel = '$_GET[id]'
    ")or die(mysql_error());

    echo "Data artikel berhasil dihapus!";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=artikel'>";
?>