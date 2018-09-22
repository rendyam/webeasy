<h2 class="sub-header">Data Galeri</h2>
<a href="?tampil=galeri_tambah" class="btn btn-primary btn-sm">Tambah Galeri</a><br><br>

<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Judul Foto</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        
        <?php
            $no=1;
            $tampil = mysql_query("
                        SELECT
                            *
                        FROM
                            galeri
                    ")or die(mysql_error());
            while($data=mysql_fetch_array($tampil)){
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><img src="../gambar/galeri/<?php echo $data['gambar']; ?>" width="100"</td>
            <td><?php echo $data['judul'];?></td>
            <td><?php echo $data['tanggal'];?></td>
            <td>
                <a href="?tampil=galeri_edit&id=<?php echo $data['id_galeri'];?>" class="btn btn-primary"> EDIT </a> |
                <a href="?tampil=galeri_hapus&id=<?php echo $data['id_galeri'];?>" class="btn btn-danger"> HAPUS </a>
            </td>
        </tr>

        <?php
            $no++;
            }
        ?>
    </table>
</div>