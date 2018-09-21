<?php
    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];
    $tipe_gambar = $_FILES['gambar']['type'];

    $tanggal = date('Ymd');
    $isi = addslashes($_POST['isi']);

    if($lokasi_gambar == ""){
        mysql_query("
            UPDATE
                artikel
            SET 
                judul = '$_POST[judul]',
                isi = '$isi'
            WHERE
                id_artikel='$_POST[id]'
        ")or die(mysql_error());
    }else{
        $data=mysql_fetch_array(mysql_query("
            SELECT
                *
            FROM
                artikel
            WHERE
                id_artikel = '$_POST[id]'    
        "));
        if($data['gambar'] != "")
            unlink("../gambar/artikel/$data[gambar]");
        move_uploaded_file($lokasi_gambar, "../gambar/artikel/$nama_gambar");

        mysql_query("
            UPDATE
                artikel
            SET
                judul = '$_POST[judul]',
                isi = '$isi',
                gambar = '$nama_gambar'
            WHERE
                id_artikel = '$_POST[id]'
        ")or die(mysql_error());
    }
    echo "Data artikel berhasil diedit!";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=artikel'>";
?>