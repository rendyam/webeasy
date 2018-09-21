<?php
    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];
    $tipe_gambar = $_FILES['gambar']['type'];

    $tanggal = date('Ymd');
    $isi = addslashes($_POST['isi']);

    if($lokasi_gambar == ""){
        mysql_query("
            INSERT INTO artikel
            SET
                judul = '$_POST[judul]',
                isi = '$isi',
                tanggal = '$tanggal'
        ")or die(mysql_error());
    }else{
        move_uploaded_file($lokasi_gambar, "../gambar/artikel/$nama_gambar");
        mysql_query("
            INSERT INTO artikel
            SET
                judul = '$_POST[judul]',
                isi = '$isi',
                tanggal = '$tanggal',
                gambar = '$nama_gambar'
        ")or die(mysql_error());
    }
    echo "Data artikel berhasil disimpan!";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=artikel'>";
?>