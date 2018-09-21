<?php
    $sql = mysql_query("
                SELECT 
                    *
                FROM
                    submenu
                WHERE
                    id_submenu='$_GET[id]'
            ")or die(mysql_error());
    $data = mysql_fetch_array($sql);
?>
<h2>Edit Submenu</h2>

<form name="edit" method="post" action="?tampil=submenu_editproses">
    <input type="hidden" name="id" value="<?php echo $data['id_submenu']; ?>">
    <table>
        <tr>
            <td>Judul Menu</td>
            <td><input type="text" name="judul" value="<?php echo $data['judul'];?>"></td>
        </tr>
        <tr>
            <td>Induk</td>
            <td>
                <select name="induk">
                    <?php
                        $sqlmenu = mysql_query("
                                        SELECT
                                            *
                                        FROM
                                            menu
                                    ");
                        while($datamenu=mysql_fetch_array($sqlmenu)){
                            if($datamenu['id_menu'] == $data['id_menu']){
                                echo "<option value='$datamenu[id_menu]' selected>$datamenu[id_menu]</option>";
                            }else{
                                echo "<option value='$datamenu[id_menu]'> $data[id_menu] </option>";
                            }
                        }
                    ?>
                </select>
            </td>
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