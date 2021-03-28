<!--Amy Trevaskis 15129275
    Landing page in the event
    that a blocked user tries to
    log in -->

<?php
    //force log out
    session_start();
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html>
<!-- head -->
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <script src="./js/jquery.min.js"></script>
     <meta http-equiv="refresh" content="5;url=/index.php"/>
     <link rel="stylesheet" href="./css/bootstrap.min.css">
     <link rel="stylesheet" href="./css/fontawesome.css">
     <link rel="stylesheet" type="text/css" href="style.css">
 </head>
        <body>

            <!-- Message -->
            <h1 style = "text-align:center;"><img id = "flag1" src = aus_flag.gif> Whoops!
            looks like your Stuffed!
            <img id = "flag2"src = aus_flag.gif></h1>

            <p style = "text-align:center;">Sorry mate</p>

        </body>
 </html>
