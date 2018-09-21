<html>
    <head>
        <title>Login Administrator</title>
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <form method="post" action="ceklogin.php">
                <h3>Login Administrator</h3>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
            </form>
        </div>
    </body>
</html>