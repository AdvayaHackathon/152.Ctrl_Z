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
  <!-- header -->
  <?php include"header.php"; ?>
  <section class="hero" id="hero">
    <div class="overlay">
      <h1>Discover Your Next Adventure</h1>
      <p>
        Explore the most amazing destinations with personalized
        recommendations and detailed insights into local history and culture.
      </p>

      <div class="search-box">
        <label for="location">Location</label>
        <input type="text" id="location" placeholder="Where do you want to go?" />
        <a href="district.php"><button>Explore</button></a>
      </div>
    </div>
  </section>
  <section class="how-it-works" id="about">
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
<section id="contact">
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
        <li><a href="#hero">Home</a></li>
        <li><a href="#">Destinations</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact</a></li>
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
</section>




  <script src="script.js"></script>
</body>
</html>
