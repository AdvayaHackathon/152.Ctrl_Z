<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bangalore - Histick</title>
  <link rel="stylesheet" href="styles.css" />

  <style>
    /* BANGALORE HERO IMAGE */
.place-hero {
  width: 100%;
  height: 90vh;
  position: relative;
  overflow: hidden;
}

.place-hero img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.place-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.4);
  display: flex;
  align-items: center;
  justify-content: center;
}

.place-overlay h1 {
  color: white;
  font-size: 2.5rem;
}

/* CARD SECTION */
.place-cards {
  padding: 60px 30px;
  background-color: #f9f9f9;
  text-align: center;
}

.place-cards h2 {
  font-size: 2rem;
  margin-bottom: 40px;
  color: #222;
}

.card-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 25px;
  justify-content: center;
}

.card {
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 4px 14px rgba(0,0,0,0.08);
  overflow: hidden;
  text-align: left;
  transition: transform 0.2s;
}

.card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.card h3 {
  padding: 15px 15px 5px;
  font-size: 1.1rem;
  color: #007acc;
}

.card p {
  padding: 0 15px 15px;
  color: #555;
  font-size: 0.9rem;
  line-height: 1.4;
}

.card:hover {
  transform: translateY(-5px);
}

  </style>
</head>
<body>

<?php include"header.php"; ?>

  <!-- Bangalore Banner -->
  <section class="place-hero">
    <img src="images/bangalore-img.jpg" alt="Bangalore" />
    <div class="place-overlay">
      <h1>Explore Bengaluru</h1>
    </div>
  </section>

  <!-- Card Section -->
  <section class="place-cards">
    <h2>Top Historical Places to Visit</h2>
    <div class="card-grid">
      <div class="card">
        <a href="bangalorepalace.php"><img src="images/bangalore_palace-img.jpg" alt="Place 1" /></a>
        <h3>Bangalore Palace</h3>
        <p>Enjoy lush greenery and historical glasshouse architecture.</p>
      </div>
      <div class="card">
        <a href="iskcontemple.php"><img src="images/iskcon-img.jpg" alt="Place 2" /></a>
        <h3>Iskcon Temple</h3>
        <p>A vast expanse of nature in the heart of the city.</p>
      </div>
      <div class="card">
        <a href="bergurfort.php"><img src="images/bergurfort-img.jpg" alt="Place 3" /></a>
        <h3>Bergur Fort</h3>
        <p>A Tudor-style palace with royal charm and history.</p>
      </div>
      <div class="card">
        <a href="arch.php"><img src="images/arch-img.jpg" alt="Place 4" /></a>
        <h3>Department of Archaeology and Museums</h3>
        <p>Interactive science displays and engineering marvels.</p>
      </div>
      <!-- Add more cards as needed -->
    </div>
  </section>

  <?php include"footer.php"; ?>

</body>
</html>