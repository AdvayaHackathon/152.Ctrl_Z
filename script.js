function search() {
    const location = document.getElementById("location").value;
    if (location.trim()) {
      alert("Searching for: " + location);
    } else {
      alert("Please enter a location.");
    }
  }
  