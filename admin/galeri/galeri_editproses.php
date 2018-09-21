<?php
    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];
    $tipe_gambar = $_FILES['gambar']['type'];

    $tanggal = date('Ymd');

    if($lokasi_gambar==""){
        mysql_query("
            UPDATE galeri
            SET
                judul = '$_POST[judul]'
            WHERE
                id_galeri = '$_POST[id]'
        ")or die(mysql_error());
    }else{
        $data = mysql_fetch_array(mysql_query("
                    SELECT 
                        *
                    FROM
                        galeri
                    WHERE
                        id_galeri = '$_POST[id]'
                "));
        if($data['gambar']!="")
            unlink("../gambar/galeri/$data[gambar]");
        move_uploaded_file($lokasi_gambar, "../gambar/galeri/$nama_gambar");
        mysql_query("
            UPDATE galeri
            SET
                judul = '$_POST[judul]',
                gambar = '$nama_gambar'
            WHERE
                id_galeri='$_POST[id]'
        ")or die(mysql_error());
    }
    echo "Data galeri berhasil diedit!";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=galeri'>";
?>