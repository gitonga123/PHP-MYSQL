<?php 
include('login.php');

if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home| Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
      body {
        font-family: 'Tangerine', serif;
        /* font-size: 48px; */
      }
    </style>
</head>
<body>
    <div id="main">
        <h1>Single SignOn</h1>
        <div>
            <h2>Login Form</h2>
            <form action="login.php" method="post">
                <label>UserName:</label>
                <input id="name" name="username" placeholder="username" type="text" />
                <label>Password</label>
                <input id="password" name="password" placeholder="password" type="password" />
                <input name="submit" type="submit" value=" Login " />
                <span><?php echo $error; ?></span>
            </form>
        </div>
    </div>
</body>
</html>