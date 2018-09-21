<script src="plugins/coolclock/coolclock.js" type="text/javascript"></script>
<script src="plugins/coolclock/moreskins.js" type="text/javascript"></script>

<?php
    if(!defined("INDEX")) die("---");
?>

<ul class="nav nav-tabs">
    <li class="active">
        <a href="#konten1" data-toggle="tab">Terbaru</a>
        <a href="#konten2" data-toggle="tab">Populer</a>
        <a href="#konten3" data-toggle="tab">Komentar</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade in active" id="konten1">
        <?php
            $artikel = mysql_query("
                            SELECT
                                *
                            FROM
                                artikel
                            ORDER BY
                                id_artikel DESC LIMIT 5
                        ");
            while($data=mysql_fetch_array($artikel)){
                echo "<li><img src='gambar/artikel/$data[gambar]'><a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
            }
        ?>
    </div>
</div>

<div class="tab-pane fade" id="konten2">
    <ul>
        <?php
            $artikel = mysql_query("
                        SELECT
                            *
                        FROM
                            artikel
                        ORDER BY
                            hits DESC LIMIT 5
                    ");
            while($data=mysql_fetch_array($artikel)){
            echo "<li><img src='gambar/artikel/$data[gambar]'><a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
            }
        ?>
    </ul>
</div>

<div class="tab-pane fade" id="konten3">
    <ul>
        <?php 
            $komentar = mysql_query("
                                    SELECT
                                        *
                                    FROM
                                        komentar
                                    ORDER BY
                                        id_komentar
                                    DESC LIMIT 5
                                ");
            while($data=mysql_fetch_array($komentar)){
                echo "<li> <b>$data[nama]: </b> <a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[komentar]</a></li>";
            }
        ?>
    </ul>
</div>
</div>

<div class="box">
    <!--Search
        <h3 class="judul">Pencarian</h3>

        <form method="post" action="?tampil=pencarian">
            <input type="text" name="kata" placeholder="Cari disini...">
            <input type="submit" value="Cari">
        </form>
    -->
    <!--Jam-->
    <h3 class="judul">Jam</h3>

    <div class="clock" style="text-align: center;">
        <canvas class="CoolClock:fancy" width="130" height="130">
    </div>

    <!-- 1 -->
    <h3 class="judul">Video</h3>
    <video src="media/video.mp4" width="100%" controls></video>

    <!-- 2 -->
    <h3 class="judul">Artikel Terbaru</h3>
    <ul>
        <?php
            $artikel = mysql_query("
                            SELECT
                                *
                            FROM
                                artikel
                            ORDER BY
                                id_artikel DESC LIMIT 5
                        ");
            while($data=mysql_fetch_array($artikel)){
                echo "<li> <a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
            }
        ?>
    </ul>

    <!-- 3 -->
    <h3 class="judul">Artikel Terpopuler</h3>
    <ul>
        <?php
            $artikel = mysql_query("
                            SELECT
                                *
                            FROM
                                artikel
                            ORDER BY
                                hits DESC LIMIT 5
                        ");
            while($data=mysql_fetch_array($artikel)){
                echo "<li> <a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
            }
        ?>
    </ul>
</div>