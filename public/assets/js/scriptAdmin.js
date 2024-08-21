let boutonssupPlat = document.getElementsByClassName("supPlat");
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