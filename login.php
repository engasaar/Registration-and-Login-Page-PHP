<?php
$cookie_name="loggedin";
$servername="localhost";
$username="root";
$password="12345";
$database="test";
$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Database connection failed ".mysqli_connect_error());
    }
if(isset($_POST['login']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $sql="SELECT * FROM users WHERE username='$user' AND password='$pass';";
    $result=mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);
    if($count == 1){
        $cookie_value=$user;
        setcookie($cookie_name, $cookie_value, time()+(180), "/");
        header("Location: personal.php");
    }
    else
    {
        echo "username or password is incorrect";
    }
}
else if(isset($_POST['register']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $sql="INSERT INTO users (id, username ,password) VALUES ('','$user','$pass') ";
    $result=mysqli_query($conn, $sql);
    
}
?>