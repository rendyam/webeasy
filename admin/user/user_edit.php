<?php
    $sql = mysql_query("
                SELECT      
                    *
                FROM
                    user
            ")or die(mysql_error());
    $data = mysql_fetch_array($sql);
?>

<h2>Edit User</h2>

<form name="edit" method="post" action="?tampil=user_editproses">
    <input type="hidden" name="id" value="<?php echo $data['id_user']; ?>">
    <table>
        <tr>
            <td>Username</td>
            <td> <input type="text" name="username" value="<?php echo $data['username'];?>"></td>
        </tr>
        <tr>
            <td>Ganti Password</td>
            <td> <input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Ulang Password</td>
            <td> <input type="password" name="password_ulang"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="edit" value="Ubah"></td>
        </tr>
    </table>

</form>