<?php
    if(!defined("INDEX")) die("---");

    mysql_query("
        UPDATE artikel
        SET 
            hits = hits+1
        WHERE 
            id_artikel = '$_GET[id]'
    ");

    $artikel = mysql_query("
                    SELECT 
                        * 
                    FROM 
                        artikel
                    WHERE
                        id_artikel = '$_GET[id]'
                ");
    $data = mysql_fetch_array($artikel);
    $isi = $data['isi'];
?>

<div class="artikel">
    <h2 class="judul"> <?php echo $data['judul']; ?> </h2>
    <p>
        <?php if($data['gambar']!="")?>
            <img src="gambar/artikel/<?php echo $data['gambar']; ?>" class="gambar-artikel" width="350">
        <?php echo $isi; ?>
    </p>
</div>

<!--Bagian 1-->
<?php
    $komentar = mysql_query("
                SELECT
                    *
                FROM
                    komentar
                WHERE
                    id_artikel = '$_GET[id]'
                ");
    $jmlkomentar = mysql_num_rows($komentar);
?>
    <h3> <?php echo $jmlkomentar; ?> Komentar</h3>
    <hr>
    <?php
        while($datakomen = mysql_fetch_array($komentar)){
    ?>
        <div class="komentar">
            <h4> <?php echo $datakomen['nama']; ?> - <?php echo $datakomen['tanggal']; ?> </h4>
            <p>
                <?php 
                    echo $datakomen['komentar'];
                ?>
            </p>
        </div>
    <?php   
        }
    ?>

<!-- Bagian 2-->
<h3>Isi Komentar</h3>
<form method="post" action="?tampil=komentar_proses" id="formkomentar" class="form-horizontal well">
    <input type="hidden" name="id" value="<?php echo $data['id_artikel']; ?>">
    <div class="form-group">
        <label for="nama" class="control-label col-md-2">Nama</label>
        <div class="col-md-10">
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="control-label col-md-2">Email</label>
        <div class="col-md-10">
            <input type="text" name="email" id="email" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="komentar" class="control-label col-md-2">Email</label>
        <div class="col-md-10">
            <textarea name="komentar" id="komentar" rows="8" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10 col-md-offset-2">
            <input type="submit" value="Kirim Pesan" clas="btn btn-primary">
        </div>
    </div>
</form>