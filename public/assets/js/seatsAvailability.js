const API_URL = "/";

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("reservationForm");

  async function checkAvailability() {
    try {
      const response = await fetch(API_URL + "getSeatsAvailability");
      if (!response.ok) {
        throw new Error("Network response error.");
      }
      const data = await response.json();
      updateAvailabilityDisplay(data);
    } catch (error) {
      console.error("Fetch error:", error);
    }
  }

  function updateAvailabilityDisplay(data) {
    const availableSpotsElement = document.getElementById("available-seats");
    availableSpotsElement.textContent = `Places restantes: ${data}`;
  }

  let datePicker = document.getElementById("date");
  datePicker.addEventListener("change", checkAvailability);

  checkAvailability();
});
