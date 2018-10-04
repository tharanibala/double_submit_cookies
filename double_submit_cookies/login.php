<!DOCTYPE html>
<html>

<head>
	<title>Double Submit Cookies in CSRF Protection</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>

<form action="post.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="thara" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="123" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
  
</form>

</body>

</html>