<?php
    if(!defined("INDEX")) die("---");

    mysql_query("
        UPDATE artikel
        SET 
            hits = hits+1
        WHERE 
            id_artikel = '$_GET[id]'
    ");

    $artikel = mysql_query("
                    SELECT 
                        * 
                    FROM 
                        artikel
                    WHERE
                        id_artikel = '$_GET[id]'
                ");
    $data = mysql_fetch_array($artikel);
    $isi = $data['isi'];
?>

<div class="artikel">
    <h2 class="judul"> <?php echo $data['judul']; ?> </h2>
    <p>
        <?php if($data['gambar']!="")?>
            <img src="gambar/artikel/<?php echo $data['gambar']; ?>" class="gambar-artikel" width="350">
        <?php echo $isi; ?>
    </p>
</div>

<!--Bagian 1-->
<?php
    $komentar = mysql_query("
                SELECT
                    *
                FROM
                    komentar
                WHERE
                    id_artikel = '$_GET[id]'
                ");
    $jmlkomentar = mysql_num_rows($komentar);
?>
    <h3> <?php echo $jmlkomentar; ?> Komentar</h3>

    <?php
        while($datakomen = mysql_fetch_array($komentar)){
    ?>
        <div class="komentar">
            <h4> <?php echo $datakomen['nama']; ?> - <?php echo $datakomen['tanggal']; ?> </h4>
            <p>
                <?php 
                    echo $datakomen['komentar'];
                ?>
            </p>
        </div>
    <?php   
        }
    ?>

<!-- Bagian 2-->
<h3>Isi Komentar</h3>
<form method="post" action="?tampil=komentar_proses" class="formkomentar">
    <input type="hidden" name="id" value="<?php echo $data['id_artikel']; ?>">
    <table>
        <tr>
            <td width="25%"> Nama </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td valign="top">Komentar</td>
            <td><textarea name="komentar" cols="50" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kirim Komentar"></td>
        </tr>
    </table>

</form>