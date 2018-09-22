<?php
    $sql = mysql_query("
                SELECT 
                    *
                FROM
                    submenu
                WHERE
                    id_submenu='$_GET[id]'
            ")or die(mysql_error());
    $data = mysql_fetch_array($sql);
?>
<h2 class="sub-header">Edit Submenu</h2>

<form name="edit" method="post" action="?tampil=submenu_editproses" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $data['id_submenu']; ?>">

    <div class="form-group">
        <label class="label-control col-md-2">Judul Menu</label>
        <div class="col-md-4">
            <input type="text" name="judul" size="50" value="<?php echo $data['judul'];?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Induk</label>
        <div class="col-md-4">
            <select name="induk" class="form-control">
                <?php
                    $sqlmenu = mysql_query("
                                    SELECT
                                        *
                                    FROM
                                        menu
                                ");
                    while($datamenu=mysql_fetch_array($sqlmenu)){
                        if($datamenu['id_menu'] == $data['id_menu']){
                            echo "<option value='$datamenu[id_menu]' selected>$datamenu[id_menu]</option>";
                        }else{
                            echo "<option value='$datamenu[id_menu]'> $data[id_menu] </option>";
                        }
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Link</label>
        <div class="col-md-4">
            <input type="text" name="link" value="<?php echo $data['link'];?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Urutan</label>
        <div class="col-md-4">
            <input type="text" name="urutan" value="<?php echo $data['urutan'];?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="edit" value="Edit" class="btn btn-primary">
        </div>
    </div>
</form>