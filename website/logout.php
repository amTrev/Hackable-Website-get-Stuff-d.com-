<!--Amy Trevaskis 15129275
    logout page -->

<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie("user", "", time() - 3600);
    header("location:/index.php");

?>
