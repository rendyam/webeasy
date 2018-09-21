<link rel="stylesheet" type="text/css" href="plugins/fancybox/fancybox/jquery.fancybox-1.3.4.css">
<script type="text/javascript" src="plugins/fancybox/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="plugins/fancybox/jquery-1.4.3.min.js"></script>

<?php
    if(!defined("INDEX")) die("---");
?>

<ul class="breadcrumb">
    <li>Home</li>
    <li class="active">Galeri Foto</li>
</ul>

<div class="galeri">
    <div class="row">
            <?php 
                $no = 1;
                $galeri = mysql_query("
                                SELECT
                                    *
                                FROM
                                    galeri
                                ORDER BY
                                    id_galeri DESC
                                limit 12
                            ");
                while($data = mysql_fetch_array($galeri)){
            ?>
            <div class="col-md-3">
                <a class="fancybox" href="gambar/galeri/<?php echo $data['gambar']; ?>" 
                    title="<?php echo $data['judul'] ?> ">
                    <img src="gambar/galeri/<?php echo $data['gambar'];?>" width="100%" class="thumbnail">
                    <p align="center"> <?php echo $data['judul'];?></p>
                </a>
            </div>

        <?php 
            if($no%4==0) echo "</div><div class='row'>";
            $no++;
            }
        ?>
    </div>
</div>