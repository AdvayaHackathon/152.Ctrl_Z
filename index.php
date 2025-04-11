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
  <?php include"footer.php"; ?>
</section>




  <script src="script.js"></script>
  <!-- QR Code Generator -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<!-- jsPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

</body>
</html>
