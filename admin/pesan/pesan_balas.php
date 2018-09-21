<?php
    $tampil = mysql_query("
                SELECT
                    *
                FROM
                    pesan
                WHERE
                    id_pesan = '$_GET[id]'
            ")or die(mysql_error());
    $data = mysql_fetch_array($tampil);
?>

<h2>Balas Pesan</h2>

<form name="edit" method="post" action="?tampil=pesan_balasproses">
    <input type="hidden" name="id" value="<?php echo $data['id_pesan']; ?>">
    <table>
        <tr>
            <td>Kepada</td>
            <td><input type="text" name="email" size="50" value="<?php echo $data['email'];?>" ></td>
        </tr>

        <tr>
            <td>Subjek</td>
            <td> <input type="text" name="subjek" size="50" value="Re: <?php echo $data['subjek'];?>"> </td>
        </tr>

        <tr>
            <td>Pesan</td>
            <td>
                <textarea name="pesan" cols="80" rows="15"> 
                    <?php echo $data['pesan']; ?>
                </textarea>
            </td>
        </tr>

        <tr>
            <td>
            </td>
            <td> <input type="submit" name="edit" value="Balas"></td>
        </tr>

    </table>
</form>