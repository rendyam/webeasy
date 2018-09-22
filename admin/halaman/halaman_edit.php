<?php
$tampil = mysql_query("
            SELECT
                *
            FROM
                halaman
            WHERE
                id_halaman = '$_GET[id]'
        ")or die(mysql_error());
$data = mysql_fetch_array($tampil);
?>
<h2 class="sub-header">Edit Halaman</h2>
<form name=edit method="post" action="?tampil=halaman_editproses" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $data['id_halaman'];?>">
    <div class="form-group">
        <label class="label-control col-md-2">Judul Halaman</label>
        <div class="col-md-4">
            <input type="text" name="judul" size="50" value="<?php echo $data['judul'];?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Isi Halaman</label>
        <div class="col-md-4">
            <textarea name="isi" cols="80" rows="15"><?php echo $data['isi'];?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="edit" value="Edit" class="btn btn-primary">
        </div>
    </div>
</form>
