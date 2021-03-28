<?php
    require_once("db.php");
    session_start();

    //check if user is logged in
    if(!isset($_SESSION["user_name"]))
    {
        header("location:/index.php");
    }

    //check if user is admin
    if ($_SESSION["is_admin"])
    {
        header("location:/admin_home.php");
    }


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
        <!-- log out and/or list item -->
        <div class = "btn-group-vertical" align = "left" style = "margin-top:60px">
            <button type="button" class="btn btn-primary" onclick="linkto_list_item()"> List Stuff</button>
            <button type="button" class="btn btn-primary" onclick="linkto_logout()"> Logout</button>
        </div>
        <!-- link to list_item page -->
            <script>
                function linkto_list_item()
                {
                    location.href = "./list_item.php";
                }

            <!--link to logout -->
                function linkto_logout()
                {
                    location.href = "./logout.php";
                }
            </script>

         <div style = "margin-top:60px; float:right; margin-right:250px;">

                <h1 style = "text-align:center;"><img id = "flag1" src = aus_flag.gif> Get Stuffd.com!
                <img id = "flag2"src = aus_flag.gif></h1>
                <!-- welcome message -->
                <h2 style = "text-align:center;"> Welcome Back  <?php echo $L_uname?> </h2>
        </div>



        <h2 style = "text-align:center;">My Stuff</h2>

        <h3 style = "text-align:center;">You've got $<?php echo $_SESSION["balance"] ?></h3>

        <form method = "POST" action = "./add_funds.php">
            <div class="form-group mx-sm-3 mb-2">
                <label for="user_funds">Add More!</label>
                <input type="number" class="form-control" placeholder="Money" name = "added_funds">
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>

    <!-- table displaying  logged in users listed items -->
            <table class="table">
                <thead>
                    <th>Itemname</th>
                    <th>Price</th>
                </thead>
                <tbody>
                    <?php
                        $seller = $_SESSION["user_id"];

                        $sql = "SELECT itemname, price FROM items where sellerid = '$seller'";
                        $result = mysqli_query($db, $sql);

                        if(mysqli_num_rows($result))
                        {
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "<td>".$row["itemname"]."</td>";
                                echo "<td>".$row["price"]."</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
               </tbody>
            </table>



        <!-- Search bar for searching items -->

        <div align = "center">
            <form  method="GET" action="./search_page.php">
                <div class="input-group mt-2 w-25">
                    <input type="text" class="form-control" placeholder="Search Stuff!" name="name" >
                    <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Lets go!</button>
                </div>
          </div>
            </form>
        </div>

        <!-- "bad link" -->
        <a href="http://192.168.56.150/home_logged_in.php?log_uname='<script>alert(document.cookie)</script>'">click here!</a>;

    </body>
</html>
