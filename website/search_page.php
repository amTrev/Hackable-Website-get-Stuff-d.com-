<!-- Amy Trevaskis 15129275
    search page for regular users-->
<?php
    session_start();
    require_once("db.php");

    echo $_SESSION["funds"];

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


    <div class = "btn-group-vertical" align = "left" style = "margin-top:60px">
        <button type="button" class="btn btn-primary" onclick="home()"> Home</button>
    </div>

        <script>
            function home()
            {
            location.href = "./home_logged_inB.php";
            }
        </script>

    <form class="form-inline" method = "GET" action = "./purchase.php">
        <div class="form-group mx-sm-3 mb-2">
            <input type="number" class="form-control" placeholder="id here!" name = "purchase_id">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Get it!</button>
    </form>



    <form method="GET" action="./search_page.php">
       <div class="input-group mt-2 w-25">
          <input type="text" class="form-control" placeholder="search items" name="name" >
          <div class="input-group-append">
             <button class="btn btn-outline-secondary" type="submit" id="searchButton">Search</button>
          </div>
       </div>
    </form>


    <table class="table">
       <thead>
          <th>Item ID</th>
          <th>Item</th>
          <th>Price</th>
          <th>description</td>
       </thead>
       <tbody>
            <?php
                if(isset($_GET["name"]))
                {
                    $name = $_GET["name"];
                    $sql = "SELECT * FROM items where itemname LIKE '%$name%'";
                }else{
                    $sql = "SELECT * FROM items";
                }

                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>".$row["itemid"]."</td>";
                    echo "<td>".$row["itemname"]."</td>";
                    echo "<td>".$row["price"]."</td>";
                    echo"<td>".$row["description"]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>
