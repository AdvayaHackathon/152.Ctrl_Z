<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Bag</title>
  <link rel="stylesheet" href="styles.css">
  
  <style>
    .atb-body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: #f4f4f4;
    }

    .atb-h1 {
      text-align: center;
      color: #333;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 40px;
    }

    .card {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 300px;
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
      text-align: center;
    }

    .remove-btn {
      background-color: #ff4d4d;
      color: white;
      border: none;
      padding: 10px 20px;
      margin-top: 10px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
    }

    .remove-btn:hover {
      background-color: #e60000;
    }
    .btn-book {
      background-color: #4a72f4;
      color: white;
      border: none;
      padding: 10px 20px;
      margin-top: 10px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
    }

    .btn-book:hover {
      background-color: #1762ec;
    }
  </style>
</head>
<body class="atb-body">
  <?php include"header.php"; ?>
  <h1 class="atb-h1">Your Bag</h1>
  <div class="card-container" id="bagItems"></div>

  <script>
    function renderBag() {
      const bagItems = JSON.parse(localStorage.getItem('bag')) || [];
      const container = document.getElementById('bagItems');
      container.innerHTML = '';

      bagItems.forEach((item, index) => {
        const card = document.createElement('div');
        card.className = 'card';

        card.innerHTML = `
          <img src="${item.image}" alt="${item.name}" />
          <div class="card-content">
            <h3>${item.name}</h3>
            <button class="remove-btn" onclick="removeFromBag(${index})">Remove</button>
            <a href="booking.php"><button class="btn-book">Book</button></a>
          </div>
          
        `;

        container.appendChild(card);
      });
    }

    function removeFromBag(index) {
      let bag = JSON.parse(localStorage.getItem('bag')) || [];
      bag.splice(index, 1);
      localStorage.setItem('bag', JSON.stringify(bag));
      renderBag();
    }

    // On page load
    renderBag();
  </script>
</body>
</html>