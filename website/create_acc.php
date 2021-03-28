<!-- Amy Trevaskis 15129275
    Page for creatinng
    an account-->

<?php
    require_once("db.php");

    //fucntion creates a userid
    function gen_uid($db)
    {
        $sql_usr = "SELECT MAX(userid) FROM users";

        $result = mysqli_query($db,$sql_usr);

        $row = mysqli_fetch_array($result);
        $usr_id = $row[0] + 1;

        return $usr_id;
    }

        $uid = gen_uid($db);

        //get query parameters
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $uname = $_POST["uname"];
        $passwd = md5($_POST["pwd"]);
        $funds = $_POST["user_funds"];

         $sql = "INSERT INTO users (userid, fname, lname, uname, funds, password, status, admin)
                VALUES ('$uid', '$fname', '$lname', '$uname', '$funds', '$passwd', '1', '0')";


        //take user to landing page
       if(mysqli_query($db,$sql))
        {
           header("location:/acc_success.html");
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
    </head>

  <body>
        <!--homepage link-->
        <a href="index.php">Home</a></p>
        <!-- Form/s for creating an account -->
        <div class="container">
            <h2 style = "font:Comic Sans MS">Create an Account</h2>
                <form action="/create_acc.php" method = "post">
                    <div class="form-group">
                        <label for="First name">Enter First name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Firstname" name="fname" required>
                    </div>
                    <div class="form-group">
                        <label for="Last name">Enter Last name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Lastname" name="lname" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Enter a User name</label>
                        <input type="text" class="form-control" id="user_name" placeholder="username" name="uname" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="user_funds">Add some funds:</label>
                        <input type="number" class="form-control" placeholder="add funds" name = "user_funds">
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
        </div>

         <!-- link to homepage -->
            <p>Already have an account? <a href="index.php">Login</a></p>



    </body>
</html>
