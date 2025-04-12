<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pattadakal</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .patt-body {
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

        .patt-container {
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

        .info-group button {
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

<body class="patt-body">
<?php include"header.php"; ?>
    <section class="place-hero">
        <img src="images/pattadakal/pattadakal_1.jpg" alt="Bangalore" />
        <div class="place-overlay">
            <h1>Explore Pattadakal</h1>
        </div>
    </section>

    <div class="patt-container">
        <div class="photos-section">
            <h2>Photos</h2>
            <div class="photo-grid">
                <img src="images/pattadakal/pattadakal_1.jpg">
                <img src="images/pattadakal/pattadakal_2.jpg">
                <img src="images/pattadakal/pattadakal_3.jpg">
                <img src="images/pattadakal/pattadakal_4.jpg">
                <img src="images/pattadakal/pattadakal_5.jpg">
                <img src="images/pattadakal/pattadakal_6.jpg">
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
                        <iframe src="https://www.google.com/maps?q=Pattadakal,+Karnataka,+India&output=embed"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

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
                    ₹30 per person
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
        <p>Pattadakal, located in Karnataka's Bagalkot district, is a UNESCO World Heritage Site renowned for its 7th
            and 8th-century Hindu and Jain temples. Situated on the banks of the Malaprabha River, it served as the
            ceremonial coronation site for Chalukyan kings. The temple complex exemplifies a harmonious blend of
            northern Nagara and southern Dravidian architectural styles, reflecting the zenith of Chalukyan artistry.
            Notable temples include the Virupaksha Temple, commissioned by Queen Lokamahadevi, and the Mallikarjuna
            Temple, built by Queen Trailokya Mahadevi. The Jain Narayana Temple signifies the religious diversity of the
            period. Inscriptions in old Kannada and Sanskrit found here provide insights into the socio-political and
            religious milieu of the time. </p>
    </div>
    <div class="section audio-section">
        <h2>History & Culture</h2>
        <div class="tabs">
            <div class="tab active" onclick="showHistoryTab('text')">Text</div>
            <div class="tab" onclick="showHistoryTab('video')">AI Video</div>
        </div>
        <div class="content-box" id="textContent">
            <p>​Pattadakal, located in Karnataka's Bagalkot district, is a UNESCO World Heritage Site renowned for its
                remarkable ensemble of 7th and 8th-century CE Hindu and Jain temples. Situated on the banks of the
                Malaprabha River, this site exemplifies the zenith of Chalukyan architecture, showcasing a harmonious
                blend of northern Nagara and southern Dravidian styles.​

                Historically, Pattadakal was known by several names, including Kisuvolal ("valley of red soil") and
                Raktapura ("city of red"). The name "Pattadakal" itself translates to "place of coronation," reflecting
                its significance as the ceremonial site where Chalukyan kings were crowned. The Chalukyas of Badami
                (543–753 CE) established Pattadakal as a cultural and religious hub, constructing numerous temples to
                commemorate royal achievements and religious devotion.​

                The temple complex at Pattadakal comprises nine Hindu temples and a Jain sanctuary. Among these, the
                Virupaksha Temple stands out as a masterpiece, commissioned around 740 CE by Queen Lokamahadevi to
                celebrate her husband's victory over southern kings. Adjacent to it is the Mallikarjuna Temple, built by
                Queen Trailokya Mahadevi, mirroring the architectural grandeur of its counterpart. These temples are
                adorned with intricate carvings depicting scenes from epics like the Ramayana and Mahabharata, as well
                as various aspects of Hindu mythology.​

                The Jain Narayana Temple, constructed in the 9th century, signifies the religious diversity embraced by
                the Chalukyas. This temple features a square sanctum, a circumambulatory path, and a mantapa adorned
                with lathe-turned pillars, reflecting the architectural finesse of the period.​

                Pattadakal's significance extends beyond its architectural marvels. The site houses inscriptions in old
                Kannada and Sanskrit, providing valuable insights into the socio-political and religious milieu of the
                time. These inscriptions detail royal grants, temple constructions, and the evolution of script styles,
                underscoring Pattadakal's role as a center of cultural confluence.​

                Over the centuries, Pattadakal witnessed the rise and fall of various dynasties, including the
                Rashtrakutas, the Western Chalukyas, the Vijayanagara Empire, and the Adil Shahi dynasty. Despite
                periods of turmoil and conquest, the site's temples have endured, bearing testimony to the region's rich
                historical tapestry.​

                Today, Pattadakal stands as a symbol of India's architectural heritage, attracting scholars, historians,
                and tourists alike. Its temples not only exemplify the artistic and engineering prowess of ancient India
                but also reflect a period of religious tolerance and cultural synthesis that continues to inspire
                admiration worldwide.</p>
            <audio controls>
                <source src="history.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
        <div class="content-box hidden" id="videoContent">
            <iframe src="AI videos - Histic/Pattadakal - Bagalkote.mp4" allowfullscreen></iframe>
        </div>
    </div>

    <div class="section">
        <h2>The Culture Experiences</h2>
        <div class="card-row">
            <div class="card">
                <img src="https://rukminim2.flixcart.com/image/850/1000/xif0q/dress/h/k/g/l-lw-9102-b-tilton-original-imagjup95gdv5cec.jpeg?q=90"
                    alt="Traditional Dress" class="card-img">
                <h3>Traditional Dress</h3>
                <p>Japan’s traditional attire includes the kimono, worn during ceremonies and festivals. Each pattern
                    and color holds cultural significance.</p>
            </div>
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Japanese_lacquerware.jpg"
                    alt="Local Crafts" class="card-img">
                <h3>Local Crafts</h3>
                <p>Explore intricate handmade crafts like origami, pottery, and lacquerware that reflect centuries of
                    artistic heritage.</p>
            </div>
        </div>

        <div class="card-row">
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Kendama.jpg" alt="Traditional Games"
                    class="card-img">
                <h3>Traditional Games</h3>
                <p>Games like Kendama and Koma (spinning tops) showcase Japanese creativity and skill, enjoyed across
                    generations.</p>
            </div>
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/06/Taiko_drum.jpg" alt="Dance & Music"
                    class="card-img">
                <h3>Dance & Music</h3>
                <p>Classical dances such as Noh and Kabuki, and musical instruments like shamisen and taiko drums, bring
                    Japan’s stories to life.</p>
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
        name: 'Pattadakal',
        image: 'images/pattadakal/pattadakal_1.jpg'
    };

    let bag = JSON.parse(localStorage.getItem('bag')) || [];
    bag.push(place);
    localStorage.setItem('bag', JSON.stringify(bag));

    alert('Added to bag!');
});
    </script>
</body>

</html>