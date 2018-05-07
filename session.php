<?php 
//Establishing a connection with server by passing credentials
$connection = mysqli_connect("localhost","root","daniel123");

$db = mysqli_select_db("single_signon",$connection);
session_start();
$user_check = $_SESSION['login_user'];

$sess_sql = mysqli_query("select username from login where username='$user_check'", $connection);
$row = mysqli_fetch_assoc($sess_sql);
$login_session = $row['username'];
if(!isset($login_session)){
    mysqli_close($connection);
    header('Location: index.php');
}
?>