<!--Amy Trevaskis 15129275
    php file to block users -->

<?php
    session_start();

    require_once("db.php");
    $usr_to_block = $_GET["userid"];

    $sql_block = "UPDATE users SET status = '0' WHERE userid = '$usr_to_block'";
    if(mysqli_query($db, $sql_block))
    {   //redirect to home 
        header("location:/admin_home.php");
    }


?>
