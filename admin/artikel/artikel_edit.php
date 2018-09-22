<?php
    $tampil = mysql_query("
                SELECT 
                    *
                FROM
                    artikel
                WHERE
                    id_artikel = '$_GET[id]'
            ")or die(mysql_error());
    $data = mysql_fetch_array($tampil);
?>
<h2 class="sub-header">Edit Artikel</h2>
<form name="edit" method="post" action="?tampil=artikel_editproses" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $data['id_artikel'];?>">
    <div class="form-group">
        <label class="label-control col-md-2">Judul Artikel</label>
        <div class="col-md-4">
            <input type="text" name="judul" size="50" value="<?php echo $data['judul'];?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Gambar</label>
        <div class="col-md-4">
            <img src="../gambar/artikel/<?php echo $data['gambar'];?>" width="100"><br>
            <input type="file" name="gambar" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Isi Artikel</label>
        <div class="col-md-9">
            <textarea name="isi" cols="80" rows="15" class="form-control"><?php echo $data['isi'];?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="edit" value="Edit" class="btn btn-primary">
        </div>
    </div>
</form>