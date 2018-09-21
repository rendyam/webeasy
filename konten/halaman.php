<?php
    if(!defined("INDEX")) die("---");
    $artikel = mysql_query("
                    SELECT
                        *
                    FROM
                        halaman
                    WHERE
                        id_halaman = '$_GET[id]'
                ");
    $data = mysql_fetch_array($artikel);
    $isi = $data['isi'];
?>
<div class="halaman">
    <h2 class="judul"><?php echo $data['judul']; ?></h2>
    <p>
        <?php echo $isi; ?>
    </p>
</div>