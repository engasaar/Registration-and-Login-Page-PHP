<?php

if(isset($_COOKIE['loggedin']))
{
    $cookie_value=$_COOKIE['loggedin'];
    echo "Welcome $cookie_value to your personal page";
    echo "<br> <a href='logout.php'>logout</a>";
}
else
{
    echo "you are not logged in";
    }
?>