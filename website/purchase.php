<!--Amy Trevaskis 15129275
    Page for purchasing an item-->

<?php

    session_start();
    require_once("db.php");

    $purchase_id = $_GET["purchase_id"];

    $sql_buy = "SELECT price, sellerid FROM items
                WHERE itemid = '$purchase_id'";


    $purchase_result =  mysqli_query($db, $sql_buy);


    $purchase_row = mysqli_fetch_array($purchase_result);

    $seller_id = $purchase_row["sellerid"];
    $profit = $purchase_row["price"];

        if($_SESSION["balance"] >= $profit)
        {

            $sql_profit = "UPDATE users
            SET funds = (funds + $profit)
            WHERE userid = $seller_id";

            mysqli_query($db, $sql_profit);

            $buyer_id = $_SESSION["user_id"];

            $sql_expense = "UPDATE users
                            SET funds = (funds - $profit)
                            WHERE userid = $buyer_id";

            mysqli_query($db, $sql_expense);

            remove_item($db, $purchase_id);
            header("location:/home_logged_inB.php");

        }

        function remove_item($db, $purchase_id)
        {
            $sql = "DELETE FROM items WHERE itemid = '$purchase_id'";
            mysqli_query($db, $sql);
        }

?>
