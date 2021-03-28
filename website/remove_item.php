<!--Amy Trevaskis 15129275
    Page for removing an item -->

<?php
    session_start();
    require_once("db.php");

    $item_to_remove = $_GET["item_to_remove"];

    $sql_item_remove = "DELETE FROM items WHERE itemid = '$item_to_remove'";


    if(mysqli_query($db, $sql_item_remove))
    {
        header("location:/admin_home.php");
    }

?>
