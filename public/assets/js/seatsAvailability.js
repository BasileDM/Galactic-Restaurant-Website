const API_URL = "/";

document.addEventListener("DOMContentLoaded", () => {
  async function checkAvailability() {
    try {
      const date = new Date(datePicker.value);
      const dateString = date.toISOString().slice(0, 10);

      const response = await fetch(API_URL + "getSeatsAvailability?date=" + dateString);
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
});
