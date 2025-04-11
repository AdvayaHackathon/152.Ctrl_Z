<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Normally: validate user with DB
    $_SESSION['loggedin'] = true;
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In | Histick</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="sign-body">
  <div class="auth-container">
    <form method="POST">
      <h2>Welcome Back</h2>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Sign In</button>
      <a href="signup.php" class="form-link">Don't have an account? Sign up</a>
    </form>
    
  </div>
</body>
</html>
