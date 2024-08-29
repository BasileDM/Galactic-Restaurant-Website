document.addEventListener("DOMContentLoaded", () => {
  async function checkAvailability() {
    try {
      const date = new Date(datePicker.value);
      const dateString = date.toISOString().slice(0, 10);

      const response = await fetch("getSeatsAvailability?date=" + dateString);
      if (!response.ok) {
        throw new Error("Network response error.");
      }
      const seatsLeft = await response.json();
      updateAvailabilityDisplay(seatsLeft);
    } catch (error) {
      console.error("Fetch error:", error);
    }
  }

  function updateAvailabilityDisplay(seatsLeft) {
    const availableSpotsElement = document.getElementById("available-seats");
    if (seatsLeft <= 0) {
      document.getElementById("form-reservation-button-final").disabled = true;
      document.getElementById("form-reservation-button-final").style.cursor = "not-allowed";
      availableSpotsElement.style.color = "red";
      availableSpotsElement.textContent = "Il n'y a plus de places disponibles pour cette date.";
      return;
    } else {
      document.getElementById("form-reservation-button-final").disabled = false;
      document.getElementById("form-reservation-button-final").style.cursor = "pointer";
      availableSpotsElement.style.color = "black";
      availableSpotsElement.textContent = `Places restantes: ${seatsLeft}`;
      return;
    }
  }

  let datePicker = document.getElementById("date");
  datePicker.addEventListener("change", checkAvailability);
  checkAvailability();
});
