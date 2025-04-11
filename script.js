const adultInput = document.getElementById("adultCount");
const childInput = document.getElementById("childCount");
const totalPrice = document.getElementById("totalPrice");

const ADULT_PRICE = 20;
const CHILD_PRICE = 10;

function updateTotal() {
  const adultCount = parseInt(adultInput.value) || 0;
  const childCount = parseInt(childInput.value) || 0;
  const total = (adultCount * ADULT_PRICE) + (childCount * CHILD_PRICE);
  totalPrice.textContent = `$${total}`;
}

adultInput.addEventListener("input", updateTotal);
childInput.addEventListener("input", updateTotal);

document.getElementById("bookingForm").addEventListener("submit", function(e) {
  e.preventDefault();
  alert("Booking complete!");
});
