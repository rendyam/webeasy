<html>
    <head>
        <title>Login Administrator</title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>
        <div id="container">
            <h3>Login Administrator</h3>
            <form method="post" action="ceklogin.php">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" autofocus></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="login" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>