<?php
    $tampil = mysql_query("
                SELECT
                    *
                FROM
                    galeri
                WHERE
                    id_galeri = '$_GET[id]'
            ")or die(mysql_error());
    $data = mysql_fetch_array($tampil);
?>

<h2 class="sub-header">Edit Galeri</h2>
<form name="edit" method="post" action="?tampil=galeri_editproses" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $data['id_galeri'];?>">
    <div class="form-group">
        <label class="label-control col-md-2">Judul Galeri</label>
        <div class="col-md-4">
            <input type="text" name="judul" size="50" value="<?php echo $data['judul'];?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Gambar</label>
        <div class="col-md-4">
            <img src="../gambar/galeri/<?php echo $data['gambar']; ?>" width="100">
            <br>
            <br>
            <input type="file" name="gambar" class="form-control-file"> 
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="edit" value="Edit" class="btn btn-primary">
        </div>
    </div>
</form>