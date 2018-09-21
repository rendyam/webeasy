<?php
    session_start();

    if(!empty($_SESSION['username']) and !empty($_SESSION['password'])){

    include("../lib/koneksi.php");
    define("INDEX",true);
?>
<html>
    <head>
        <title>Halaman Administrator</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        <div id ="container">
            <div id="header"><h1 class="headers">Halaman Administrator</h1></div>
            
            <div id="menu">
                <?php include("menu.php");?>
            </div>

            <div id="content">
                <?php include("konten.php");?>
            </div>

            <div id="footer">
                <p>Copyright &copy; SILABUS</p>
            </div>
        </div>
    </body>
</html>

<?php
    }else{
        echo "Dilarang membuka halaman ini!";
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
?>