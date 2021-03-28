<!--Amy Trevaskis 15129275
    PHP page for adding funds
    to a user ?> -->


<?php
        require_once("db.php");
        session_start();

        $added_funds = $_POST["added_funds"];
        $uname = $_SESSION["user_name"];

        $sql_add_funds = "UPDATE users SET funds = (funds + $added_funds)
                         WHERE uname = '$uname'";

        mysqli_query($db, $sql_add_funds);

        $_SESSION["balance"] = $_SESSION["balance"] + $added_funds;
        //redirect to home page
        header("location:./home_logged_inB.php");

?>
