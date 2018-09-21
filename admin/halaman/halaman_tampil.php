<h2>Data Halaman</h2>
<a href="?tampil=halaman_tambah">Tambah Halaman</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No</th>
        <th>Judul Halaman</th>
        <th>Link Halaman</th>
        <th>Aksi</th>
    </tr>
    <?php
        $no=1;
        $tampil = mysql_query("
                    SELECT
                        *
                    FROM
                        halaman
                ")or die(mysql_error());
        while($data=mysql_fetch_array($tampil)){
    ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['judul'];?></td>
                <td>?tampil=halaman&id=<?php echo $data['id_halaman'];?></td>
                <td>
                    <a href="?tampil=halaman_edit&id=<?php echo $data['id_halaman'];?>"> EDIT </a> | 
                    <a href="?tampil=halaman_hapus&id=<?php echo $data['id_halaman'];?>"> HAPUS </a>
                </td>
            </tr>

    <?php
        $no++;
        }
    ?>
</table>