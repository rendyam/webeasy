<form name="tambah" method="post" action="?tampil=artikel_tambahproses" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Judul Artikel</td>
            <td><input type="text" name="judul" size="50"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="gambar"></td>
        </tr>
        <tr>
            <td>Isi Artikel</td>
            <td><textarea name="isi" cols="80" rows="15"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tambah" value="Tambah"></td>
        </tr>
    </table>
</form>