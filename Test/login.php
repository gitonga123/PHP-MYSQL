<?php 
session_start();//start session
$error = "";

var_dump($_POST['username']);
var_dump($_POST['password']);
if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $error = "Username or Password is invalid";
    }else{
        $username = mysqli_real_escape_string(stripslashes($_POST['username']));
        $password = mysqli_real_escape_string(stripslashes($_POST['password']));

        $connection = mysqli_connect("localhost","root","daniel123");

        //select database
        $db = mysqli_select_db("single_signon",$connection);

        $query = mysqli_query("select * from login where password='$password' and username='$username'",$connection);

        var_dump($query);

        $rows = mysqli_num_rows($query);

        if($rows == 1){
            $_SESSION['login_user'] = $username;
            header("location: profile.php");
        }else{
            $error = "username or Password is invalid";
        }
    mysqli_close($connection);

    }
}
?>