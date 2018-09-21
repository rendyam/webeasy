<?php
    if(!defined("INDEX")) die("---");
?>

<ul class="nav">
    <?php
        $menu = mysql_query("
                SELECT
                    *
                FROM
                    menu
                ORDER BY
                    urutan
            ");
        while($data=mysql_fetch_array($menu)){
    ?>
    
    <li>
        <a href="<?php echo $data['link'];?>">
            <?php echo $data['judul']; ?>
        </a>
        <ul>
            <?php
                $submenu = mysql_query("
                                SELECT
                                    *
                                FROM
                                    submenu
                                WHERE
                                    id_menu='$data[id_menu]'
                            ");
                while($datasub=mysql_fetch_array($submenu)){
            ?>
                <li>
                    <a href="<?php echo $datasub['link']; ?>"><?php echo $datasub['judul'];?> </a>
                </li>
            <?php   
                }
            ?>
        </ul>
    </li>
    <?php
        }
    ?>
</ul>