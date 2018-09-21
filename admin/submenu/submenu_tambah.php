<h2>Tambah SubMenu</h2>
<form name="tambah" method="post" action="?tampil=submenu_tambahproses">
    <table>
        <tr>
            <td>Judul SubMenu</td>
            <td><input type="text" name="judul"></td>
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
                        while($datamenu = mysql_fetch_array($sqlmenu)){
                            echo "<option value='$datamenu[id_menu]'>$datamenu[judul]</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        
        <tr>
            <td>Link</td>
            <td><input type="text" name="link"></td>
        </tr>
        <tr>
            <td>Urutan</td>
            <td><input type="text" name="urutan"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tambah" value="Tambah"></td>
        </tr>
    </table>
</form>