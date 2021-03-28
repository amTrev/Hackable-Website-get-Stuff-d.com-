<!--Amy Trevaskis 15129275
    default homepage -->

<?php
    //sesion data is destroyed as invalid logins are re-directed here
    session_start();
    session_destroy();
    require_once("db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="./js/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>getStuffd.com</title>

</head>
    <body>

            <div style = "align:center">

                <h1 style = "text-align:center;"><img id = "flag1" src = aus_flag.gif> Get Stuffd.com!
                <img id = "flag2"src = aus_flag.gif></h1>

                <h2 style = "text-align:center;"> Want stuff? </h2>
                <h2 style = "text-align:center;"> Got stuff? </h2>


                <p style = "text-align:center;">
                    Get stuff'dot com is a place for stuff<br>
                    weather you're here to sell stuff or buy stuff<br>
                    we've got all your stuff needs covered.<br>
                </p>

            </div>

                <h2 style = "font:Comic Sans MS" align = "center">Sign in</h2>

                <!-- Log in form -->
                <div class="container" style = "align:center">
                    <form action="/home_logged_in.php" method = "GET" width>
                          <div class="form-group">
                              <label for="log_uname">User name</label>
                              <input type="text" class="form-control" id="logu" placeholder="username" name="log_uname" required>
                          </div>
                          <div class="form-group">
                              <label for="log_pwd">Password:</label>
                              <input type="password" class="form-control" id="logp" placeholder="Enter password" name="log_pwd" required>
                          </div>
                          <button type="submit" class="btn">Sign in!</button>
                      </form>
                  </div>
                  <!-- link to create an avvount -->
                  <p>don't have an account? <a href="create_acc.php">create account</a></p>

    </body>
</html>
