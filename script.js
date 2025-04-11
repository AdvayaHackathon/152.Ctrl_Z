document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("bookingForm");
  const adultInput = document.getElementById("adultCount");
  const childInput = document.getElementById("childCount");
  const totalPriceDisplay = document.getElementById("totalPrice");

  const adultPrice = 20;
  const childPrice = 10;

  // Live total calculation
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
    
    // Generate QR code in canvas
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
    doc.text("Tokyo Skytree", pageWidth / 2, y, { align: "center" });

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
