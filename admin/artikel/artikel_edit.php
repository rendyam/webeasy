<?php
    $tampil = mysql_query("
                SELECT 
                    *
                FROM
                    artikel
                WHERE
                    id_artikel = '$_GET[id]'
            ")or die(mysql_error());
    $data = mysql_fetch_array($tampil);
?>
<h2>Edit Artikel</h2>
<form name="edit" method="post" action="?tampil=artikel_editproses" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data['id_artikel'];?>">
    <table>
        <tr>
            <td>Judul Artikel</td>
            <td><input type="text" name="judul" size="50" value="<?php echo $data['judul'];?>"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>
                <img src="../gambar/artikel/<?php echo $data['gambar'];?>" width="100"><br>
                <input type="file" name="gambar"></td>
            </td>
        </tr>
        <tr>
            <td>Isi Artikel</td>
            <td>
                <textarea name="isi" cols="80" rows="15"><?php echo $data['isi'];?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="edit" value="Edit"></td>
        </tr>
    </table>
</form>