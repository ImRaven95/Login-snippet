<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href='login.css'>
      <title>Login</title>
  </head>
  <body>
    <form action="authenticate.php" method="post">

      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="passsword"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container">
        <a href="home.php">
          <button type="button" class="backbtn">Back</button>
        </a>
      </div>
      <div class="container">
        <a href="register.php">
          <button type="button" class="registerbtn">Register</button>
        </a>
      </div>
    </form>
  </body>
</html>