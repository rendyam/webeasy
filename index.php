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
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </header>

        <nav id="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include("menu.php"); ?>
                    </div>
                </div>
            </div>
        </nav>

        <content id ="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php include("konten.php"); ?>
                    </div>
                    <div class="col-md-4">
                        <?php include("sidebar.php"); ?>
                    </div>
                </div>
            </div>
        </content>
        
        <footer id ="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright &copy; Properti</p>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>