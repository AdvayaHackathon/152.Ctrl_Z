<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Somnathapur</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    .som-body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ffffff;
      margin: 0;
      padding: 30px;
      color: #333;
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    /* header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 40px;
      background-color: transparent;
      width: 100%;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #007bff;
    }

    nav {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
      padding: 0;
      margin: 0;
    }

    nav a {
      text-decoration: none;
      color: #000;
      font-weight: bold;
      font-size: 16px;
    }

    .logout-btn {
      background-color: #ff4d4d;
      padding: 10px 16px;
      margin-right: 40px;
      border-radius: 8px;
      border: none;
      color: white;
      font-weight: bold;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .logout-btn:hover {
      background-color: #ff1a1a;
    } */

    .place-hero {
      width: 100%;
      height: 90vh;
      position: relative;
      /* overflow: hidden; */
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
      background-color: rgba(0, 0, 0, 0.4);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .place-overlay h1 {
      color: white;
      font-size: 2.5rem;
    }

    .som-container {
      display: flex;
      gap: 30px;
    }

    .photos-section {
      flex: 2;
    }

    .photos-section h2 {
      margin-bottom: 10px;
    }

    .photo-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px;
    }

    .photo-grid img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
    }

    .practical-info {
      flex: 1;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .tabs {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
      flex-wrap: wrap;
    }

    .tab {
      padding: 5px 10px;
      background-color: #eef3f5;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
      color: #333;
      transition: background 0.3s;
    }

    .tab:hover {
      background-color: #d4e9ff;
    }

    .tab.active {
      background-color: #007bff;
      color: white;
      font-weight: bold;
      border: none;
    }

    .info-group {
      margin-bottom: 15px;
    }

    .info-group strong {
      display: block;
      margin-bottom: 5px;
    }

    .info-group button{
        padding: 10px;
        margin: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
    }

    .map-container {
      margin-top: 10px;
      display: none;
    }

    iframe {
      width: 100%;
      height: 250px;
      border: none;
      border-radius: 10px;
    }

    .tab-content {
      background: #f0f5f7;
      padding: 15px;
      border-radius: 10px;
      display: none;
    }

    .tab-content.active {
      display: block;
    }

    .section {
      margin-top: 50px;
      background: #ffffff;
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .audio-section {
      max-width: 900px;
      margin: 0 auto;
    }

    .content-box {
      padding: 20px;
      background: #fff;
      border-radius: 0 0 20px 20px;
      border-top: 2px solid #d8eefe;
      width: 100%;
      box-sizing: border-box;
      min-height: 220px;
    }

    audio {
      margin-top: 15px;
      width: 100%;
      border-radius: 10px;
    }

    .audio-section iframe {
      width: 100%;
      height: 315px;
      border-radius: 10px;
      border: none;
    }

    .hidden {
      display: none;
    }

    .card-row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .card {
      background-color: #ffffff;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
      padding: 20px;
      flex: 1;
      min-width: 260px;
      max-width: 400px;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      color: #1f3a5f;
      margin-top: 15px;
      margin-bottom: 10px;
    }

    .card-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 12px;
    }

    @media screen and (max-width: 768px) {
      .card-row {
        flex-direction: column;
      }
    }
    .new-btn{
            display: flex;
      justify-content: center;
      align-items: center;
      height: 20vh;
        }
        .new-btn1{
            margin-right: 40px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            border:none;
            background-color: #007bff;
            color: white;
        }
        .new-btn2{
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            border:none;
            background-color: #007bff;
            color: white;
        }
  </style>
</head>
<body class="som-body">
<?php include"header.php"; ?>
  <section class="place-hero">
    <img src="images/somnathpur/somnathpur_3.jpg" alt="Bangalore" />
    <div class="place-overlay">
      <h1>Explore Somnathapur</h1>
    </div>
  </section>

  <div class="som-container">
    <div class="photos-section">
      <h2>Photos</h2>
      <div class="photo-grid">
        <img src="images/somnathpur/somnathpur_1.jpg">
        <img src="images/somnathpur/somnathpur_2.jpg">
        <img src="images/somnathpur/somnathpur_3.jpg">
        <img src="images/somnathpur/somnathpur_4.jpg">
        <img src="images/somnathpur/somnathpur_5.jpg">
        <img src="images/somnathpur/somnathpur_6.jpg">
      </div>
      <div class="new-btn">
        <button class="new-btn1">Add To Bag</button>
        <button class="new-btn2">Favourites</button>
    </div>
    </div>

    <div class="practical-info">
      <h2>Practical Information</h2>
      <div class="tabs">
        <div class="tab active" onclick="showPracticalTab('details')">Details</div>
        <div class="tab" onclick="showPracticalTab('hours')">Opening Hours</div>
      </div>

      <div id="details" class="tab-content active">
        <div class="info-group">
          <strong>Address</strong>
          Mysuru, Somanathapura, Somanathapura - 571120
        </div>
        <div class="info-group">
          <strong>Location</strong>
          Bangalore, Karnataka, India<br><br>
          <button onclick="toggleMap()">View on Map</button>
          <div class="map-container" id="map">
            <iframe src="https://www.google.com/maps?q=Chennakesava+Temple,+Somanathapura,+Karnataka,+India&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
        </div>
        <div class="info-group">
          <strong>Average Visit Duration</strong>
          1 - 2 hours
        </div>
        <div class="info-group">
          <strong>Best Time to Visit</strong>
          Avoid peak midday sun.
        </div>
        <div class="info-group">
          <strong>Price Range</strong>
          ₹20 - ₹250
        </div>
      </div>

      <div id="hours" class="tab-content">
        <p><strong>Opening Hours:</strong><br>
          Monday : 8:30 AM to 5:30 PM<br>
          Tuesday : 8:30 AM to 5:30 PM<br>
          Wednesday : 8:30 AM to 5:30 PM<br>
          Thursday : 8:30 AM to 5:30 PM<br>
          Friday : 8:30 AM to 5:30 PM<br>
          Saturday : 8:30 AM to 5:30 PM<br>
          Sunday : 8:30 AM to 5:30 PM
        </p>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Overview</h2>
    <p>The Chennakesava Temple in Somanathapura, Karnataka, is a stunning example of Hoysala architecture, built in 1258 CE by Somanatha Dandanayaka under King Narasimha III. Dedicated to Lord Vishnu, the trikuta (three-shrined) temple features intricate carvings and friezes depicting scenes from Hindu epics. Built on a star-shaped platform, it showcases exceptional craftsmanship with elaborately carved pillars and ceilings. Though damaged over time, it was restored by the Vijayanagara Empire and later by the Mysore government. In 2023, it was recognized as a UNESCO World Heritage Site as part of the “Sacred Ensembles of the Hoysalas,” celebrating its cultural and architectural significance.</p>
  </div>

  <div class="section audio-section">
    <h2>History & Culture</h2>
    <div class="tabs">
      <div class="tab active" onclick="showHistoryTab('text')">Text</div>
      <div class="tab" onclick="showHistoryTab('video')">AI Video</div>
    </div>
    <div class="content-box" id="textContent">
      <p>The Chennakesava Temple, also known as the Keshava Temple, is a remarkable example of Hoysala architecture located in Somanathapura, Karnataka, India. Situated on the banks of the River Kaveri, approximately 35 kilometers east of Mysuru, this temple stands as a testament to the artistic and cultural achievements of the Hoysala Empire.​

        Historical Background
        
        The temple was commissioned in 1258 CE by Somanatha Dandanayaka, a general under Hoysala King Narasimha III. Somanatha established the town of Somanathapura and sought to create an agrahara—a settlement for Brahmins—by granting land and resources for religious and educational purposes. The Chennakesava Temple was the centerpiece of this initiative, dedicated to Lord Keshava, a form of Vishnu .​
        
        Architectural Significance
        
        The temple exemplifies the intricate craftsmanship characteristic of Hoysala architecture. Built on a raised star-shaped platform, the temple features a trikuta (three-shrined) layout, with each sanctum housing a deity: Keshava (now missing), Janardhana, and Venugopala—all manifestations of Vishnu. The sanctums are connected by a common hall (sabha-mandapa), supported by elaborately carved pillars.​
        
        The exterior walls are adorned with detailed friezes depicting scenes from Hindu epics such as the Ramayana, Mahabharata, and Bhagavata Purana. The ceilings and inner walls showcase intricate carvings of deities, musicians, dancers, and floral motifs, reflecting the artisans' exceptional skill .​
        
        Historical Challenges and Restoration
        
        Over the centuries, the temple faced periods of decline and damage. In the 14th century, invasions led to the destruction of many structures in the region. The Chennakesava Temple suffered damage but was later restored in the 16th century with support from the Vijayanagara Empire. Further repairs were undertaken in the 20th century by the Mysore government, ensuring the preservation of this architectural gem .​
        
        UNESCO World Heritage Recognition
        
        In 2023, the Chennakesava Temple, along with the Hoysaleswara Temple at Halebidu and the Chennakeshava Temple at Belur, was inscribed as a UNESCO World Heritage Site under the collective title "Sacred Ensembles of the Hoysalas." This recognition highlights the temple's outstanding universal value and its significance in the cultural heritage of India .​
        
        Conclusion
        
        The Chennakesava Temple of Somanathapura stands as a remarkable example of Hoysala artistry and devotion. Its intricate carvings, architectural innovation, and historical resilience make it a significant monument in India's rich cultural tapestry. Visitors to the temple can experience the grandeur of a bygone era and appreciate the enduring legacy of the Hoysala dynasty</p>
      <audio controls>
        <source src="history.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
    </div>
    <div class="content-box hidden" id="videoContent">
      <iframe src="AI videos - Histic/Chennakesava Temple - Somnathapur.mp4" allowfullscreen></iframe>
    </div>
  </div>

  <div class="section">
    <h2>The Culture Experiences</h2>
    <div class="card-row">
      <div class="card">
        <img src="https://rukminim2.flixcart.com/image/850/1000/xif0q/dress/h/k/g/l-lw-9102-b-tilton-original-imagjup95gdv5cec.jpeg?q=90" alt="Traditional Dress" class="card-img">
        <h3>Traditional Dress</h3>
        <p>Japan’s traditional attire includes the kimono, worn during ceremonies and festivals. Each pattern and color holds cultural significance.</p>
      </div>
      <div class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Japanese_lacquerware.jpg" alt="Local Crafts" class="card-img">
        <h3>Local Crafts</h3>
        <p>Explore intricate handmade crafts like origami, pottery, and lacquerware that reflect centuries of artistic heritage.</p>
      </div>
    </div>

    <div class="card-row">
      <div class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Kendama.jpg" alt="Traditional Games" class="card-img">
        <h3>Traditional Games</h3>
        <p>Games like Kendama and Koma (spinning tops) showcase Japanese creativity and skill, enjoyed across generations.</p>
      </div>
      <div class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/06/Taiko_drum.jpg" alt="Dance & Music" class="card-img">
        <h3>Dance & Music</h3>
        <p>Classical dances such as Noh and Kabuki, and musical instruments like shamisen and taiko drums, bring Japan’s stories to life.</p>
      </div>
    </div>
  </div>

  <script>
    function showHistoryTab(tab) {
      const textTab = document.querySelector('.audio-section .tab:nth-child(1)');
      const videoTab = document.querySelector('.audio-section .tab:nth-child(2)');
      const textContent = document.getElementById('textContent');
      const videoContent = document.getElementById('videoContent');

      if (tab === 'text') {
        textTab.classList.add('active');
        videoTab.classList.remove('active');
        textContent.classList.remove('hidden');
        videoContent.classList.add('hidden');
      } else {
        videoTab.classList.add('active');
        textTab.classList.remove('active');
        videoContent.classList.remove('hidden');
        textContent.classList.add('hidden');
      }
    }

    function toggleMap() {
      const map = document.getElementById('map');
      map.style.display = map.style.display === 'block' ? 'none' : 'block';
    }

    function showPracticalTab(tabId) {
      const tabs = document.querySelectorAll('.practical-info .tab');
      tabs.forEach(tab => tab.classList.remove('active'));

      const contents = document.querySelectorAll('.practical-info .tab-content');
      contents.forEach(content => content.classList.remove('active'));

      document.getElementById(tabId).classList.add('active');
      document.querySelector(`.practical-info .tab[onclick="showPracticalTab('${tabId}')"]`).classList.add('active');
    }
    document.querySelector('.new-btn1').addEventListener('click', function () {
    const place = {
        name: 'Somnathpur',
        image: 'images/somnathpur/somnathpur_3.jpg'
    };

    let bag = JSON.parse(localStorage.getItem('bag')) || [];
    bag.push(place);
    localStorage.setItem('bag', JSON.stringify(bag));

    alert('Added to bag!');
});
  </script>
</body>
</html>
