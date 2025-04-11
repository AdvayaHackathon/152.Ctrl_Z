<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Histick</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header>
    <div class="logo">Histick</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Destinations</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
      <?php session_start(); $isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
      ?>
    <div class="btn2" <?= $isLoggedIn ? 'style="display:none;"' : '' ?>>
      <a href="signin.php"><button class="signin-btn" id="show-signin">Sign In</button></a>
      <a href="signup.php"><button class="signup-btn" id="show-signup">Sign Up</button></a>
    </div>
    <?php if ($isLoggedIn): ?>
  <form method="POST" action="logout.php">
    <button type="submit" class="logout-btn">Log Out</button>
  </form>
<?php endif; ?>

  </header>

  <section class="hero">
    <div class="overlay">
      <h1>Discover Your Next Adventure</h1>
      <p>
        Explore the most amazing destinations with personalized
        recommendations and detailed insights into local history and culture.
      </p>

      <div class="search-box">
        <label for="location">Location</label>
        <input type="text" id="location" placeholder="Where do you want to go?" />
        <button onclick="search()">Explore</button>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
</body>
</html>
