<!-- Amy Trevaskis 15129275
    Homepage for user with
    admin status -->
<?php
    //get session variables and access database
    session_start();
    require_once("db.php");

    //redirect user to homepage if they are not admin
    if (!$_SESSION["is_admin"])
    {
        header("location:/index.php");
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

        <!-- block user by entering their ID -->
        <p> Enter the User ID to block them </p>
        <form class="form-inline" method = "GET" action = "./block_user.php">
            <div class="form-group mx-sm-3 mb-2">
                <input type="number" class="form-control" placeholder="Block User:" name = "userid">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Block user:</button>
        </form>

        <!-- Search bar for searching items -->
        <div align = "left">
            <form  method="GET" action="./search_page_admin.php">
                <div class="input-group mt-2 w-25">
                    <input type="text" class="form-control" placeholder="Search Stuff!" name="name" >
                    <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Lets go!</button>
                </div>
          </div>
            </form>
        </div>



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


        <!--search for a user -->
        <div class="container">
            <form method="GET" action="./admin_home.php">
                <div class="input-group mt-2 w-25">
                    <input type="text" class="form-control" placeholder="Search users" name="u_name" >
                    <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="searchButton">Search</button>
             </div>
          </div>
       </form>

       <!-- display results in a table -->
       <h2>Search users:</h2>
       <table class="table">
          <thead>
             <th>User Name</th>
             <th>User ID</th>
             <th>Status</th>
          </thead>
          <tbody>
             <?php

                if(isset($_GET["u_name"]))
                {
                   $u_name = $_GET["u_name"];
                   $sql = "SELECT * FROM users WHERE uname LIKE '%$u_name%'";
                }  else{

                   $sql = "SELECT * FROM users";
                }

                $result = mysqli_query($db, $sql);

                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>".$row["uname"]."</td>";
                    echo "<td>".$row["userid"]."</td>";
                    if($row["status"])
                    {
                        echo "<td>Active</td>";
                    } else
                    {
                        echo "<td>Blocked</td>";
                    }

                   echo "</tr>";
                }
             ?>

    </div>

    <!-- "bad link" -->
        <a href="http://192.168.56.150/home_logged_in.php?log_uname='<script>alert(document.cookie)</script>'">click here!</a>;

    </body>
</html>
