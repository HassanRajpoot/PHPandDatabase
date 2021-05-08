<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grocery store</title>
    <link rel="stylesheet" href="style.css">
    <script src="login.js"></script>
  </head>
  <body>
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input id="username" type="text" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input id="password"  type="password" placeholder="Password">
  </div>

  <input onclick = "validate()"type="button" id="submit" class="btn" value="Sign in">
</div>
  </body>
</html>
