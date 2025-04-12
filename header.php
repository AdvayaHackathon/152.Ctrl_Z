<header>
    <div class="logo"><img src="images/histrick.png" alt=""></div>
    <nav>
      <ul>
        <li><a href="index.php">Home🏠</a></li>
        <li><a href="http://localhost:8501">Translate⭐</a></li>
        <li><a href="addtobag.php">Travel Bag🛍️</a></li>
      </ul>
    </nav>
      <?php  $isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
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