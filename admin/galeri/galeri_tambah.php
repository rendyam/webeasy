<h2 class="sub-header">Tambah Galeri</h2>

    <form name="tambah" method="post" action="?tampil=galeri_tambahproses" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
            <label class="label-control col-md-2">Judul Galeri</label>
            <div class="col-md-4">
                <input type="text" name="judul" size="50" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="label-control col-md-2">Gambar</label>
            <div class="col-md-4">
                <input type="file" name="gambar" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="label-control col-md-2"></label>
            <div class="col-md-4">
                <input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
            </div>
        </div>
    </form>