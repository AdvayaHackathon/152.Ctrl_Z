<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mysore Palace</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    .my-body {
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

    .my-container {
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
  </style>
</head>
<body class="my-body">
<?php include"header.php"; ?>
  <section class="place-hero">
    <img src="images/mysore_palace/mysore_palace_4.jpg" alt="Bangalore" />
    <div class="place-overlay">
      <h1>Explore Mysore Palace</h1>
    </div>
  </section>

  <div class="my-container">
    <div class="photos-section">
      <h2>Photos</h2>
      <div class="photo-grid">
        <img src="images/mysore_palace/mysore_palace_1.jpg">
        <img src="images/mysore_palace/mysore_palace_2.jpg">
        <img src="images/mysore_palace/mysore_palace_3.jpg">
        <img src="images/mysore_palace/mysore_palace_4.jpg">
        <img src="images/mysore_palace/mysore_palace_5.jpg">
        <img src="images/mysore_palace/mysore_palace_6.webp">
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
          Agrahara, Chamrajpura, Mysuru, Karnataka 570004
        </div>
        <div class="info-group">
          <strong>Location</strong>
          Bangalore, Karnataka, India<br><br>
          <button onclick="toggleMap()">View on Map</button>
          <div class="map-container" id="map">
            <iframe  src="https://www.google.com/maps?q=Mysore+Palace,+Mysuru,+Karnataka,+India&output=embed"  width="600"  height="450" style="border:0;"  allowfullscreen=""  loading="lazy"  referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="info-group">
          <strong>Average Visit Duration</strong>
          2 - 3 hours
        </div>
        <div class="info-group">
          <strong>Best Time to Visit</strong>
          Avoid peak midday sun.
        </div>
        <div class="info-group">
          <strong>Price Range</strong>
          ₹120 - ₹1000
        </div>
      </div>

      <div id="hours" class="tab-content">
        <p><strong>Opening Hours:</strong><br>
          Monday : 10:00 AM to 5:30 PM<br>
          Tuesday : 10:00 AM to 5:30 PM<br>
          Wednesday : 10:00 AM to 5:30 PM<br>
          Thursday : 10:00 AM to 5:30 PM<br>
          Friday : 10:00 AM to 5:30 PM<br>
          Saturday : 10:00 AM to 5:30 PM<br>
          Sunday : 10:00 AM to 5:30 PM
        </p>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Overview</h2>
    <p>Mysore Palace, also known as Amba Vilas Palace, is a historic royal residence in Mysore, Karnataka. Once the seat of the Wadiyar dynasty, the current palace was built between 1897 and 1912 by British architect Henry Irwin after earlier structures were destroyed. Designed in Indo-Saracenic style, it blends Hindu, Islamic, Rajput, and Gothic elements. The palace features grand halls, intricately decorated interiors, and beautifully landscaped gardens. Notable areas include the Durbar Hall, Kalyana Mantapa, and Gombe Thotti. A major tourist attraction, it is especially famous for its stunning illumination during the Dasara festival, symbolizing Mysore’s cultural and architectural heritage.</p>
  </div>

  <div class="section audio-section">
    <h2>History & Culture</h2>
    <div class="tabs">
      <div class="tab active" onclick="showHistoryTab('text')">Text</div>
      <div class="tab" onclick="showHistoryTab('video')">AI Video</div>
    </div>
    <div class="content-box" id="textContent">
      <p>Mysore Palace, also known as Amba Vilas Palace, is a historical palace and a royal residence located in Mysore, Karnataka, India. It served as the official residence of the Wadiyar dynasty and was the seat of the Kingdom of Mysore. The palace is situated in the center of Mysore, facing the Chamundi Hills to the east. ​

        The original palace on this site was constructed in the 14th century by the Wadiyar family. However, it underwent several reconstructions due to damage from lightning in 1638, destruction by Tipu Sultan in 1739, and a fire in 1897 during a royal wedding. The current structure, the fourth iteration, was commissioned by Maharaja Krishnaraja Wodeyar IV and his mother Maharani Kempananjammanni Devi. They appointed British architect Henry Irwin to design the new palace, which was constructed between 1897 and 1912. ​
        
        Architecturally, Mysore Palace is a three-storied structure built in the Indo-Saracenic style, incorporating elements from Hindu, Islamic, Rajput, and Gothic styles. The palace features beautifully designed square towers at cardinal points, covered with domes. The central dome is gilded, and the façade includes arches, canopies, and bay windows. The palace is surrounded by well-maintained gardens and has four entrances: the 'Jaya Maarthaanda' (main entrance) to the East, 'Jayarama' to the North, 'Balarama' to the South, and 'Varaha' to the West. ​
        
        Inside, the palace houses several notable features, including the Durbar Hall (ceremonial meeting hall of the royal court), the Kalyana Mantapa (marriage hall) with its octagonal dome adorned with stained glass peacock motifs, and the Gombe Thotti (Dolls' Pavilion), which displays traditional dolls and artifacts. The palace complex also contains twelve Hindu temples, the oldest dating back to the 14th century. ​
        
        Mysore Palace is one of the most visited tourist attractions in India, drawing over three million visitors annually. It is especially renowned for its illumination during the Dasara festival, when the palace is lit up with thousands of lights, creating a spectacular sight. ​
        
        Today, Mysore Palace stands as a testament to the rich cultural heritage and architectural prowess of the Kingdom of Mysore, continuing to captivate visitors with its grandeur and historical significance.</p>
      <audio controls>
      <source src="audio_files/Mysore Palace.mp3" type="audio/mpeg">
      </audio>
    </div>
    <div class="content-box hidden" id="videoContent">
      <iframe src="AI videos - Histic/Mysore Palace.mp4" allowfullscreen></iframe>
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
        name: 'Mysore Palace',
        image: 'images/mysore_palace/mysore_palace_4.jpg'
    };

    let bag = JSON.parse(localStorage.getItem('bag')) || [];
    bag.push(place);
    localStorage.setItem('bag', JSON.stringify(bag));

    alert('Added to bag!');
});
  </script>
</body>
</html>
