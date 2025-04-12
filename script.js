const popularDestinations = [
  "Bangalore Palace, India", "Lalbagh Botanical Garden, Bangalore", "Cubbon Park, Bangalore",
  "Tipu Sultan's Summer Palace, Bangalore", "Vidhana Soudha, Bangalore", "Nandi Hills, Bangalore",
  "Mysore Palace, India", "Chamundi Hills, Mysore", "Brindavan Gardens, Mysore",
  "Hampi Ruins, Karnataka", "Charminar, Hyderabad", "Golconda Fort, Hyderabad"
];

const imageRecognitionMap = {
  palace: ["Bangalore Palace, India", "Mysore Palace, India", "Tipu Sultan's Summer Palace, Bangalore"],
  temple: ["ISKCON Temple, Bangalore", "Meenakshi Temple, Madurai", "Hampi Ruins, Karnataka"],
  garden: ["Lalbagh Botanical Garden, Bangalore", "Brindavan Gardens, Mysore", "Cubbon Park, Bangalore"],
  monument: ["Charminar, Hyderabad", "Vidhana Soudha, Bangalore", "India Gate, Delhi"],
  fort: ["Golconda Fort, Hyderabad", "Bangalore Fort", "Chitradurga Fort, Karnataka"],
  hill: ["Nandi Hills, Bangalore", "Chamundi Hills, Mysore", "Skandagiri, Karnataka"]
};

const destinationInput = document.getElementById('destinationInput');
const suggestionsList = document.getElementById('suggestionsList');
const searchForm = document.getElementById('searchForm');
const imageUpload = document.getElementById('imageUpload');
const dateInput = document.getElementById('dateInput');

// Initialize date picker
flatpickr("#dateInput", {
  mode: "range",
  dateFormat: "Y-m-d"
});

// Show suggestions
destinationInput.addEventListener('input', () => {
  const value = destinationInput.value.toLowerCase();
  if (value.length > 1) {
    const matches = popularDestinations.filter(dest => dest.toLowerCase().includes(value));
    suggestionsList.innerHTML = matches.map(dest => <li>${dest}</li>).join('');
    suggestionsList.classList.remove('hidden');
  } else {
    suggestionsList.classList.add('hidden');
  }
});

// Set selected suggestion
suggestionsList.addEventListener('click', (e) => {
  if (e.target.tagName === 'LI') {
    destinationInput.value = e.target.textContent;
    suggestionsList.classList.add('hidden');
  }
});

// Image analysis simulation
imageUpload.addEventListener('change', (e) => {
  const file = e.target.files[0];
  if (!file || !file.type.startsWith('image/')) {
    alert("Please upload an image file.");
    return;
  }

  alert("Analyzing image...");
  setTimeout(() => {
    const fileName = file.name.toLowerCase();
    let feature = Object.keys(imageRecognitionMap).find(keyword => fileName.includes(keyword));
    
    if (!feature) {
      // Fallback based on random selection
      feature = ['palace', 'garden', 'monument', 'hill'][Math.floor(Math.random() * 4)];
    }

    const possiblePlaces = imageRecognitionMap[feature] || ["Bangalore Palace, India"];
    const recognizedPlace = possiblePlaces[Math.floor(Math.random() * possiblePlaces.length)];
    destinationInput.value = recognizedPlace;
    alert(`Detected place: ${recognizedPlace}`);
  }, 1500);
});

// Handle form submit
searchForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const dest = destinationInput.value.trim();
  const dates = dateInput.value.trim();



  alert(`Redirecting to explore: ${dest} from ${dates}`);
  // Example redirect logic:
  // window.location.href = /explore?destination=${encodeURIComponent(dest)}&dates=${encodeURIComponent(dates)};
});

document.addEventListener("DOMContentLoaded", () => {
  // === Search Box Logic ===
  const searchButton = document.querySelector(".search-box button");
  if (searchButton) {
    searchButton.addEventListener("click", () => {
      const input = document.getElementById("searchInput").value.toLowerCase().trim();

      const pages = {
        "bangalore": "bangalore.php",
        "karnataka": "karnataka.php"
        // You can add more keywords and corresponding page links here
      };

      if (pages[input]) {
        window.location.href = pages[input];
      } else {
        alert("Page not found! Try typing: bangalore,karnataka");
      }
    });
  }

  // === Booking Form Logic ===
  const form = document.getElementById("bookingForm");

  if (!form) {
    // No booking form on this page — skip the rest
    return;
  }

  const adultInput = document.getElementById("adultCount");
  const childInput = document.getElementById("childCount");
  const totalPriceDisplay = document.getElementById("totalPrice");

  const adultPrice = 20;
  const childPrice = 10;

  function updateTotal() {
    const adults = parseInt(adultInput.value) || 0;
    const children = parseInt(childInput.value) || 0;
    const total = adults * adultPrice + children * childPrice;
    totalPriceDisplay.textContent = `₹${total}`;
    return total;
  }

  adultInput.addEventListener("input", updateTotal);
  childInput.addEventListener("input", updateTotal);

  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const fullName = form.fullName.value;
    const email = form.email.value;
    const phone = form.phone.value;
    const adults = parseInt(adultInput.value) || 0;
    const children = parseInt(childInput.value) || 0;
    const date = form.querySelector("input[type='date']").value;
    const time = form.querySelector("select").value;
    const total = updateTotal();

    const qrData = `Name: ${fullName}\nEmail: ${email}\nPhone: ${phone}\nDate: ${date}\nTime: ${time}\nAdults: ${adults}\nChildren: ${children}\nTotal: ₹${total}`;

    const qrContainer = document.createElement("div");
    document.body.appendChild(qrContainer);

    const qrCode = new QRCode(qrContainer, {
      text: qrData,
      width: 128,
      height: 128,
      correctLevel: QRCode.CorrectLevel.H,
    });

    setTimeout(() => {
      const qrImg = qrContainer.querySelector("img");
      if (qrImg) {
        generatePDF({
          name: fullName,
          date,
          time,
          adults,
          children,
          total,
        }, qrImg.src);
        qrContainer.remove();
        showSuccessAnimation();
      } else {
        alert("QR code generation failed.");
      }
    }, 500);
  });

  function generateConfirmationCode() {
    const chars = "ABCDEFGHJKLMNPQRSTUVWXYZ0123456789";
    let code = "TS-";
    for (let i = 0; i < 8; i++) {
      code += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return code;
  }

  function generatePDF(details, qrDataUrl) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    const pageWidth = doc.internal.pageSize.getWidth();
    let y = 20;

    doc.setFont("helvetica", "bold");
    doc.setFontSize(18);
    doc.text("Book Tickets", pageWidth / 2, y, { align: "center" });

    y += 8;
    doc.setFont("helvetica", "normal");
    doc.setFontSize(12);
    doc.text("E-Ticket Confirmation", pageWidth / 2, y, { align: "center" });

    y += 12;
    doc.setTextColor(33, 150, 243);
    doc.setFontSize(14);
    doc.text("Visitor Info", 20, y);
    y += 8;

    doc.setTextColor(0);
    doc.setFontSize(11);
    doc.text(`Name: ${details.name}`, 20, y);
    y += 6;
    doc.text(`Date: ${details.date}`, 20, y);
    y += 6;
    doc.text(`Time: ${details.time}`, 20, y);

    y += 12;
    doc.setFontSize(14);
    doc.setTextColor(33, 150, 243);
    doc.text("Ticket Details", 20, y);
    y += 8;

    doc.setTextColor(0);
    doc.setFontSize(11);
    doc.text(`Adults: ${details.adults}`, 20, y);
    y += 6;
    doc.text(`Children: ${details.children}`, 20, y);
    y += 6;
    doc.text(`Total: ₹${details.total}`, 20, y);

    y += 12;
    const code = generateConfirmationCode();
    doc.setFontSize(12);
    doc.setFont("helvetica", "bold");
    doc.text("Confirmation Code", pageWidth / 2, y, { align: "center" });
    y += 8;
    doc.setFont("helvetica", "normal");
    doc.text(code, pageWidth / 2, y, { align: "center" });

    y += 12;
    doc.addImage(qrDataUrl, "PNG", pageWidth / 2 - 25, y, 50, 50);
    y += 60;

    doc.setFontSize(10);
    doc.text(
      "Please present this ticket (printed or on your device) at the entrance.",
      pageWidth / 2,
      y,
      { align: "center" }
    );

    doc.save("Ticket.pdf");
  }

  function showSuccessAnimation() {
    const successDiv = document.createElement("div");
    successDiv.innerHTML = `
      <div style="
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0,0,0,0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;">
        <div style="
          background: white;
          padding: 30px;
          border-radius: 10px;
          text-align: center;
          box-shadow: 0 0 20px rgba(0,0,0,0.3);">
          <h2 style="color: green;">🎉 Booking Successful!</h2>
          <p>Your ticket has been downloaded.</p>
        </div>
      </div>
    `;
    document.body.appendChild(successDiv);

    setTimeout(() => {
      successDiv.remove();
    }, 3000);
  }
});
