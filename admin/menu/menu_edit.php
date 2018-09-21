<?php
    $sql = mysql_query("
                SELECT 
                    *
                FROM
                    menu
                WHERE
                    id_menu='$_GET[id]'
            ")or die(mysql_error());
    $data = mysql_fetch_array($sql);
?>
<h2>Edit Menu</h2>

<form name="edit" method="post" action="?tampil=menu_editproses">
    <input type="hidden" name="id" value="<?php echo $data['id_menu']; ?>">
    <table>
        <tr>
            <td>Judul Menu</td>
            <td><input type="text" name="judul" value="<?php echo $data['judul'];?>"></td>
        </tr>
        <tr>
            <td>Link</td>
            <td><input type="text" name="link" value="<?php echo $data['link'];?>"></td>
        </tr>
        <tr>
            <td>Urutan</td>
            <td><input type="text" name="urutan" value="<?php echo $data['urutan'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="edit" value="Edit"></td>
        </tr>
    </table>
</form>