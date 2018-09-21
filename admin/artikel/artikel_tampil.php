<h2>Data Artikel</h2>
<a href="?tampil=artikel_tambah">Tambah Artikel</a>
<br>
<br>
<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No</th>
        <th>Judul Artikel</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php
        include("../lib/fungsi_tglindonesia.php");
        $no=1;
        $tampil=mysql_query("
                    SELECT 
                        *
                    FROM
                        artikel
                    ORDER BY
                        id_artikel DESC
                ")or die(mysql_error());
        while($data=mysql_fetch_array($tampil)){
            $tanggal= tgl_indonesia($data['tanggal']);
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['judul'];?></td>
            <td><?php echo $tanggal; ?></td>
            <td>
                <a href="?tampil=artikel_edit&id=<?php echo $data['id_artikel'];?>">EDIT</a> | 
                <a href="?tampil=artikel_hapus&id=<?php echo $data['id_artikel'];?>">HAPUS</a>
            </td>
        </tr>
    <?php
        $no++;
        }
    ?>
</table>