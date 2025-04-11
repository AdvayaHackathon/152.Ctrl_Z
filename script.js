document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("bookingForm");
  const adultInput = document.getElementById("adultCount");
  const childInput = document.getElementById("childCount");
  const totalPriceDisplay = document.getElementById("totalPrice");

  const ADULT_PRICE = 20;
  const CHILD_PRICE = 10;

  // Calculate total amount
  function updateTotalPrice() {
    const adults = parseInt(adultInput.value) || 0;
    const children = parseInt(childInput.value) || 0;
    const total = adults * ADULT_PRICE + children * CHILD_PRICE;
    totalPriceDisplay.textContent = `₹${total}`;
  }

  adultInput.addEventListener("input", updateTotalPrice);
  childInput.addEventListener("input", updateTotalPrice);

  form.addEventListener("submit", async function (e) {
    e.preventDefault();

    const fullName = form.elements["fullName"].value;
    const email = form.elements["email"].value;
    const phone = form.elements["phone"].value;
    const adults = parseInt(adultInput.value);
    const children = parseInt(childInput.value);
    const date = form.querySelector('input[type="date"]').value;
    const timeSlot = form.querySelector("select").value;
    const total = adults * ADULT_PRICE + children * CHILD_PRICE;

    // Booking data string
    const bookingDetails = `
      Name: ${fullName}
      Phone: ${phone}
      Date: ${date}
      Total: ₹${total}
    `;

    // Generate QR code in a temporary div
    const qrDiv = document.createElement("div");
    const qrCode = new QRCode(qrDiv, {
      text: bookingDetails,
      width: 128,
      height: 128
    });
    // Show success animation
document.getElementById("successMessage").classList.remove("hidden");

// Optionally hide the form
document.getElementById("bookingForm").style.display = "none";


    // Wait a bit for QR code to render
    setTimeout(() => {
      const qrImg = qrDiv.querySelector("img");

      // Create PDF
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF();

      doc.setFontSize(12);
      doc.text("Booking Confirmation", 20, 20);
      doc.text(`Name: ${fullName}`, 20, 30);
      doc.text(`Phone: ${phone}`, 20, 40);
      doc.text(`Date: ${date}`, 20, 50);
      doc.text(`Total Amount: ₹${total}`, 20, 60);

      if (qrImg) {
        doc.addImage(qrImg.src, "PNG", 20, 70, 50, 50);
      }

      doc.save("Booking-Confirmation.pdf");
    }, 500);
  });

  // Initialize price
  updateTotalPrice();
});

