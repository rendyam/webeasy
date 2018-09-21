<h2>Data submenu</h2>
<a href="?tampil=submenu_tambah">Tambah submenu</a>
<br>
<br>

<table width="100%" cellspacing="0" class="data" border="1">
    <tr>
        <th>No.</th>
        <th>Judul Submenu</th>
        <th>Induk</th>
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
                        submenu 
                    ORDER BY
                        urutan
                ") or die(mysql_error());
        while($data=mysql_fetch_array($sql)){
			$sqlmenu = mysql_query("
							SELECT 
								*
							FROM
								menu
							WHERE
								id_menu = '$data[id_menu]'
						");
			$datamenu = mysql_fetch_array($sqlmenu);
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $datamenu['judul']; ?></td>
        <td><?php echo $data['link']; ?></td>
        <td><?php echo $data['urutan']; ?></td>
        <td>
            <a href="?tampil=submenu_edit&id=<?php echo $data['id_submenu'];?>">EDIT</a> 
                | 
            <a href="?tampil=submenu_hapus&id=<?php echo $data['id_submenu'];?>">HAPUS</a>
        </td>
    </tr>
    <?php
        $no++;
        }
    ?>
</table>