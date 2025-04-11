<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Histick</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <header>
    <div class="logo">HisTick</div>
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
  <section class="how-it-works">
  <h2>How It Works</h2>
  <div class="steps">
    <div class="step">
      <div class="circle">1</div>
      <h3>Search a Destination</h3>
      <p>Enter your destination, travel dates, and duration to get personalized recommendations.</p>
    </div>
    <div class="step">
      <div class="circle">2</div>
      <h3>Explore Top Attractions</h3>
      <p>Discover the most interesting places to visit with detailed information and history.</p>
    </div>
    <div class="step">
      <div class="circle">3</div>
      <h3>Plan Your Perfect Trip</h3>
      <p>Get insights on opening hours, local food, and traveler recommendations.</p>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="footer-content">
    <div class="footer-section brand">
      <h2><i class="fas fa-globe-americas icon"></i> <span>Histick</span></h2>
      <p>
        Discover the world's most amazing destinations with personalized itineraries and deep insights into local culture and history.
      </p>
      <div class="social-icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
      </div>
    </div>

    <div class="footer-section">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Destinations</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h3>Top Destinations</h3>
      <ul>
        <li>Paris, France</li>
        <li>Tokyo, Japan</li>
        <li>New York, USA</li>
        <li>Rome, Italy</li>
        <li>Bali, Indonesia</li>
      </ul>
    </div>

    <div class="footer-section">
      <h3>Contact</h3>
      <p><i class="fas fa-map-marker-alt"></i> 123 Tourism Street, Travel City, 10001</p>
      <p><i class="fas fa-phone-alt"></i> +1 234 567 8901</p>
      <p><i class="fas fa-envelope"></i> info@histick.com</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© 2025 Histick. All rights reserved.</p>
  </div>
</footer>



  <script src="script.js"></script>
</body>
</html>
