<h2 class="sub-header">Tambah SubMenu</h2>
<form name="tambah" method="post" action="?tampil=submenu_tambahproses" class="form-horizontal">
    <div class="form-group">
        <label class="label-control col-md-2">Judul SubMenu</label>
        <div class="col-md-4">
            <input type="text" name="judul" size="50" class="form-control">
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
                    while($datamenu = mysql_fetch_array($sqlmenu)){
                        echo "<option value='$datamenu[id_menu]'>$datamenu[judul]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Link</label>
        <div class="col-md-4">
            <input type="text" name="link" size="50" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2">Urutan</label>
        <div class="col-md-4">
            <input type="text" name="urutan" size="50" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="label-control col-md-2"></label>
        <div class="col-md-4">
            <input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
        </div>
    </div>
</form>