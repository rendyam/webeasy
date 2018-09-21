<link rel="stylesheet" type="text/css" href="plugins/fancybox/fancybox/jquery.fancybox-1.3.4.css">
<script type="text/javascript" src="plugins/fancybox/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="plugins/fancybox/jquery-1.4.3.min.js"></script>

<?php
    if(!defined("INDEX")) die("---");
?>

<h2>Galeri</h2>
<div class="galeri">
    <table cellpadding="5">
        <tr>
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
            <td align="center">
                <a rel="example_group" href="gambar/galeri/<?php echo $data['gambar'];?>">
					<img src="gambar/galeri/<?php echo $data['gambar']; ?>" width="150">
					<br>
					<?php echo $data['judul']; ?>
				</a>
            </td>
			
			
        <?php
            if($no%4==0) echo "</tr></tr>";
            $no++;
            }
        ?>
        </tr>
    </table>
</div>