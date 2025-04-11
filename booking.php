<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Tickets | HisTick</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body class="ticket-body">
    <?php include"header.php"; ?>
  <div class="tic-container">
    <!-- <button class="back-btn"><i class="fas fa-arrow-left"></i> Back</button> -->

    <h1 class="tic-h1">Book Tickets</h1>

    <form class="booking-form" id="bookingForm">
      <div class="section-header">
        <h2><i class="fas fa-ticket-alt"></i> Book Your Tickets</h2>
        <p>Fill in the details to secure your visit</p>
      </div>

      <!-- Visitor Information -->
      <h3 class="tic-h3">Visitor Information</h3>
      <div class="row">
        <div class="input-group">
          <label><i class="fas fa-user"></i> Full Name</label>
          <input type="text" name="fullName" required>
        </div>
        <div class="input-group">
          <label><i class="fas fa-envelope"></i> Email</label>
          <input type="email" name="email" required>
        </div>
      </div>

      <div class="input-group">
        <label><i class="fas fa-phone"></i> Phone Number</label>
        <input type="tel" name="phone" required>
      </div>

      <!-- Ticket Details -->
      <h3>Ticket Details</h3>
      <div class="row">
        <div class="input-group">
          <label>Number of Adults</label>
          <input type="number" id="adultCount" min="0" value="1" required>
        </div>
        <div class="input-group">
          <label>Number of Children</label>
          <input type="number" id="childCount" min="0" value="0" required>
        </div>
      </div>

      <div class="row">
        <div class="input-group">
          <label>Date of Visit</label>
          <input type="date" required>
        </div>
        <div class="input-group">
          <label>Time Slot</label>
          <select required>
            <option value="">Select Time</option>
            <option>Morning (9AM - 12PM)</option>
            <option>Afternoon (12PM - 3PM)</option>
            <option>Evening (3PM - 6PM)</option>
          </select>
        </div>
      </div>

      <!-- Total Amount Display -->
      <div class="total-amount">
        Total Amount: <strong id="totalPrice">₹20</strong>
      </div>

      <button type="submit" class="submit-btn">Complete Booking</button>
    </form>
    <div id="successMessage" class="success-message hidden">
  <div class="checkmark">&#10004;</div>
  <h2>Booking Successful!</h2>
  <p>Your ticket has been booked and saved as a PDF.</p>
</div>

  </div>

  <script src="script.js"></script>
  <!-- QR Code Generator -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<!-- jsPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</body>
</html>
