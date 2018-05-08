<?php
    include('session.php');
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home| Profile</title>
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
    <div>
        <b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a><b/>
    </div>
</body>
</html>