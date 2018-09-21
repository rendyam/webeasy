<?php
    $data = mysql_fetch_array(mysql_query("
                SELECT 
                    *
                FROM 
                    galeri
                WHERE
                    id_galeri = '$_GET[id]'
            "));
    if($data['gambar'] != "")
        unlink("../gambar/galeri/$data[gambar]");
    
    mysql_query("
        DELETE FROM galeri
        WHERE
            id_galeri = '$_GET[id]'
    ")or die(mysql_error());
    
    echo "Data galeri telah dihapus!";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=galeri'>";
?>