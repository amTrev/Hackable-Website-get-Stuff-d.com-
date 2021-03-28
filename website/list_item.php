<!--Amy Trevaskis 15129275
    Page for listing an item -->

<?php
require_once("db.php");
session_start();

   function gen_item_id($db)
   {
        $sql_id = "SELECT MAX(itemid) FROM items";

        $result = mysqli_query($db,$sql_id);

        $row = mysqli_fetch_array($result);
        $item_id = $row[0] + 1;


       return $item_id;
    }

       $itemid = gen_item_id($db);
       $userID = $_SESSION["user_id"];


       $item_name = $_POST["item_name"];
       $price = $_POST["price"];
       $desc = $_POST["desc"];

       $sql_list = "INSERT INTO items (itemid, itemname, price, description, sellerid)
       VALUES ('$itemid', '$item_name', '$price', '$desc', '$userID')";

      if(mysqli_query($db, $sql_list))
      {
             header("location:/home_logged_inB.php");

      }


?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="./js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
    <body>



        <h1> List an item for sale </h1>

        <div class="container">
                  <form action="/list_item.php" method = "POST">
                      <div class="form-group">
                          <label for="Item name">Item name</label>
                          <input type="text" class="form-control" id = "item_name" placeholder="item_name" name="item_name" required>
                      </div>
                      <div class="form-group">
                          <label for="Item ID">Price</label>
                          <input type="number" class="form-control" id = "price" placeholder="Price" name="price" required>
                      </div>

                      <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" rows="3" id = "desc" name = "desc" required></textarea>
                      </div>


                  <button type="submit" class="btn">Submit</button>
               </form>
               </div>


               <div class = "btn" align = "left" style = "margin-top:60px">
                   <button type="button" class="btn btn-primary" onclick="home()">Home</button>
               </div>
               <!-- link to list_item page -->
                   <script>
                       function home()
                       {
                           location.href = "./home_logged_inB.php";
                       }
                   </script>



    </body>
</html>
