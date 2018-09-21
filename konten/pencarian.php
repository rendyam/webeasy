<?php
    if(!defined("INDEX")) die("---");

    /*
    $hal = isset($_GET['hal']) ? $_GET['hal'] : 1;
    $batas = 5;
    $posisi = ($hal-1) * $batas;
    */

  
    $halaman = 5; //batasan halaman
    $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
    $sebelumnya = $page - 1;
    $berikutnya = $page + 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $query = mysql_query("select * from artikel LIMIT $mulai, $halaman");
    $sql = mysql_query("select * from artikel");
    $total = mysql_num_rows($sql);
    $pages = ceil($total/$halaman); 
    //$query = mysql_query("select * from tb_masjid LIMIT $mulai, $halaman")or die(mysql_error);
    $no =$mulai+1;

    $artikel = mysql_query("
                    SELECT
                        *
                    FROM
                        artikel
                    WHERE
                        isi LIKE '%$_POST[kata]%'
                    ORDER BY
                        id_artikel DESC LIMIT $mulai, $halaman
                ");
    $jmldata = mysql_num_rows($artikel);
    if($jmldata > 0){
        echo "Hasil pencarian dari <b> $_POST[kata] </b>";
    
                //LIMIT $posisi, $batas
    while($data=mysql_fetch_assoc($artikel)){
        $isi = substr($data['isi'],0,800);
        $isi = substr($data['isi'],0,strrpos($isi, " "));
?>
    <div class="artikel">
        <h2 class="judul"><?php echo $data['judul']; ?></h2>
        <p>
            <?php if($data['gambar']!="")?>
                <img src="gambar/artikel/<?php echo $data['gambar']; ?>" class="gambar-artikel" width="200">
            
            <?php echo $isi; ?>...
            <a href="?tampil=artikel_detail&id=<?php echo $data['id_artikel'];?>">
                Selengkapnya
            </a>
        </p>
    </div>
<?php
    }
    /*
    $semua = mysql_query("
                SELECT
                    *
                FROM
                    artikel
            ");
    $jmldata = mysql_num_rows($artikel);
    $jmlhal = ceil($jmldata/$batas);
    $sebelumnya = $hal - 1;
    $berikutnya = $hal + 1;

    echo "<div class='paging'>";
    bagian 1

    if($hal>1){
        echo "<span><a href='?tampil=home&hal=1'>Pertama</a></span>";
        echo "<span><a href='?tampil=home&hal=$sebelumnya'>Sebelumnya</a></span>";
    }else{
        echo "<span>Pertama</span>";
        echo "<span>Sebelumnya</span>";
    }

    bagian 2
    for($i=1; $i<=$jmlhal; $i++){
        if($i=$hal) echo "<span><b>$i</b></span>";
        else echo "<span><a href='?tampil=home&hal=$i'>$i</a></span>";
    }
    bagian 3

    if($hal < $jmlhal){
        echo "<span><a href='?tampil=home&hal=$berikutnya'>Berikutnya</a></span>";
        echo "<span><a href='?tampil=home&hal=$jmlhal'>Terakhir</a></span>";
    }else{
        echo "<span>Berikutnya</span>";
        echo "<span>Terakhir</span>";
    }
    echo "</div>";
    */
?>
<div class="paging">
    <?php 
        if($page>1){
            echo "<span><a href='?tampil=home&halaman=1'>Pertama</a></span>";
            echo "<span><a href='?tampil=home&halaman=$sebelumnya'>Sebelumnya</a></span>";
        }else{
            echo "<span>Pertama</span>";
            echo "<span>Sebelumnya</span>";
        }
    ?>
    <?php for ($i=1; $i<=$pages ; $i++){ ?>
        <span><a href='?halaman=<?php echo $i; ?>'><?php echo $i; ?> </a></span>
    <?php } ?>
    <?php
        if($page < $pages){
            echo "<span><a href='?tampil=home&halaman=$berikutnya'>Berikutnya</a></span>";
            echo "<span><a href='?tampil=home&halaman=$pages'>Terakhir</a></span>";
        }else{
            echo "<span>Berikutnya</span>";
            echo "<span>Terakhir</span>";
        }
    ?>
 </div>
 <?php
    }else{
        echo "Kata yang dicari tidak ada";
    }
 ?>
 

