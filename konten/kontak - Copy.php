<link rel="stylesheet" type="text/css" href="plugins/validity/validity/jquery.validity.css">
<script type="text/javascript" src="plugins/validity/validity/jquery.validity.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#formkontak').validity(function(){
            $('#nama').require(' Nama tidak boleh kosong!');
            $('#email').require(' Email tidak boleh kosong!') .match('email', 'Email tidak valid!');
            $('#pesan').require(' Pesan tidak boleh kosong');
        });
    });
</script>
<?php
    if(!defined("INDEX")) die("---");
?>

<h2>Kontak Kami</h2>

<form method="post" action="?tampil=kontak_proses" id="formkontak">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td valign="top">Pesan</td>
            <td>
                <textarea name="pesan" cols="50" rows="10" id="pesan"> 
                </textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Kirim Pesan">
            </td>
        </tr>
    </table>
</form>