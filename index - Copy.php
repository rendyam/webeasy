<?php
    session_start();
    
    include("lib/koneksi.php");
    define("INDEX",true);
?>

<html>
    <head>
        <title>Properti</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		
    </head>
    <body>
    <script type="text/javascript">
        $('document').ready(function()){
            //skrip jQuery disini
        });
    </script>
    <script type="text/javascript">
        $(function()){
            //bisa juga seperti ini scriptnya
        });
    </script>
        <div id="container">
            <div id="header">
                
            </div>
            <div id="menu">
                <?php include("menu.php"); ?>
            </div>
            <div id="content">
                <div id="kiri">
                    <?php include("konten.php"); ?>
                </div>
                <div id="kanan">
                    <?php include("sidebar.php"); ?>
                </div>
            </div>
            <div id="footer">
                <p>Copyright &copy; Properti</p>
            </div>
        </div>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>