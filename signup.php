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
  <title>Sign Up | Histick</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="sign-body">
  <div class="auth-container">
    <form method="POST">
      <h2>Create Account</h2>
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Sign Up</button>
      <a href="signin.php" class="form-link">Already have an account? Sign in</a>
    </form>
    
  </div>
</body>
</html>
