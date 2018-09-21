<?php
    $tampil = mysql_query("
                SELECT
                    *
                FROM
                    galeri
                WHERE
                    id_galeri = '$_GET[id]'
            ")or die(mysql_error());
    $data = mysql_fetch_array($tampil);
?>

<h2>Edit Galeri</h2>
<form name="edit" method="post" action="?tampil=galeri_editproses" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data['id_galeri'];?>">
    <table>
        <tr>
            <td>Judul Galeri</td>
            <td><input type = "text" name="judul" size="50" value="<?php echo $data['judul']; ?>"> </td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>
                <img src="../gambar/galeri/<?php echo $data['gambar']; ?>" width="100">
                <br>
                <input type="file" name="gambar"> 
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="edit" value="Edit"</td>
        </tr>
    </table>
</form>