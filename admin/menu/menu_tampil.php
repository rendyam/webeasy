<h2>Data Menu</h2>
<a href="?tampil=menu_tambah">Tambah Menu</a>
<br>
<br>

<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No.</th>
        <th>Judul Menu</th>
        <th>Link</th>
        <th>Urutan</th>
        <th>Aksi</th>
    </tr>
    <?php
        $no = 1;
        $sql = mysql_query("
                    SELECT 
                        * 
                    FROM 
                        menu 
                    ORDER BY
                        urutan
                ") or die(mysql_error());
        while($data=mysql_fetch_array($sql)){
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['link']; ?></td>
        <td><?php echo $data['urutan']; ?></td>
        <td>
            <a href="?tampil=menu_edit&id=<?php echo $data['id_menu'];?>">EDIT</a> 
                | 
            <a href="?tampil=menu_hapus&id=<?php echo $data['id_menu'];?>">HAPUS</a>
        </td>
    </tr>
    <?php
        $no++;
        }
    ?>
</table>