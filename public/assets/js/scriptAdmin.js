let boutonssupPlat = document.getElementsByClassName("supPlat");
let boutonsedPlat = document.getElementsByClassName("edPlat");
if (boutonssupPlat) {
  Array.from(boutonssupPlat).forEach(function (element) {
    element.addEventListener("click", function (event) {
      event.preventDefault();
      let idDishASup = this.getAttribute("data-sup");
      if (confirm("Êtes-vous sûr de vouloir supprimer ce plat ?")) {
        supprimerDish(idDishASup);
      }
    });
  });
}

function supprimerDish(idDishASup) {
  fetch(HOME_URL + "supprimerDish", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ idDishASup: idDishASup }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert("Plat supprimé avec succès");
        window.location.href = HOME_URL + "admin";
      } else {
        alert("Erreur lors de la suppression du plat");
      }
    });
}

if (boutonsedPlat) {
  Array.from(boutonsedPlat).forEach(function (element) {
    element.addEventListener("click", function (event) {
      event.preventDefault();
      let idDishAEd = this.getAttribute("data-ed");
      console.log(idDishAEd);
      ouvrirEdDish(idDishAEd);
    });
  });
}

function ouvrirEdDish(idDishAEd) {
  fetch(HOME_URL + "ajoutPlat", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ idDishAEd: idDishAEd }),
  })
    .then((response) => {
      if (response.ok) {
        window.location.href = response.url + "?id=" + idDishAEd;
      } else {
        throw new Error("La requête a échoué.");
      }
    })
    .catch((error) => {
      console.error("Erreur:", error);
      alert("Erreur lors de la récupération des données de l'atelier");
    });
}

function ValidateReservation(reservation) {
  console.log(reservation);
  let idResa = reservation.getAttribute("data-val");
  let mail = reservation.getAttribute("data-mail");
  let time = reservation.getAttribute("data-time");
  let name = reservation.getAttribute("data-name");

  fetch(HOME_URL + "validateReservation", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      idResa: idResa,
      mail: mail,
      time: time,
      name: name
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status == "success") {
        alert("Reservation validée.");
        window.location.href = HOME_URL + "admin";
      } else {
        alert("Erreur lors de la validation de la reservation.");
      }
    });
}
