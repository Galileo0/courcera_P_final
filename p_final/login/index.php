<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, content=height=device-height, initial-scale=1">
</head>
</head>

<body>

<div class="bg-img">
<form action="login.inc.php" method="POST">
    <div class="container">
      <h1>Login</h1>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Your Username" name="user_uid" required>
      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Your Password" name="user_pass" required>
      <button type="submit" name="login" class="btn">Login</button>
    </div>
  </form>
</div>
</body>
</html>
