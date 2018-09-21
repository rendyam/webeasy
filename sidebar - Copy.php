<script src="plugins/coolclock/coolclock.js" type="text/javascript"></script>
<script src="plugins/coolclock/moreskins.js" type="text/javascript"></script>

<?php
    if(!defined("INDEX")) die("---");
?>


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