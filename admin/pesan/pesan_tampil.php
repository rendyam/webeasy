<h2>Data Pesan</h2>
    <table width="100%" cellspacing="0" class="data" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Subjek</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        <?php
            $no = 1;
            $tampil = mysql_query("
                        SELECT
                            *
                        FROM
                            pesan
                    ")or die(mysql_error());
            while($data=mysql_fetch_array($tampil)){
        ?>
    
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['nama'];?> </td>
            <td><?php echo $data['email'];?> </td>
            <td>
                <a href='?tampil=pesan_balas&id=<?php echo $data['id_pesan']; ?>'>
                    <?php echo $data['subjek']; ?>
                </a>
            </td>
            <td><?php echo $data['tanggal']; ?> </td>
            <td><a href="?tampil=pesan_hapus&id=<?php echo $data['id_pesan']; ?>"> Hapus </td>
        </tr>

        <?php
            }
        ?>
    </table>