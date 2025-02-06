const showSallesByCapacite = () => {
  const salle = document.querySelector("select.salle");
  const capacite = document.querySelector("select.capacite");
  capacite?.addEventListener("change", () => {
    salle.querySelectorAll("option:not(:first-child)").forEach((option) => {
      const capaciteValue = parseInt(capacite.value) || 0;
      const salleCapacite = parseInt(option.getAttribute("data-capacite"));
      if (capaciteValue > 0 && salleCapacite >= capaciteValue) {
        option.style.display = "block";
      } else {
        option.style.display = "none";
        if (salle.value === option.value) {
          salle.value = "";
        }
      }
    });
  });
};

window.addEventListener("ajax.modal.ready", showSallesByCapacite);
window.addEventListener("ajax.form.ready", showSallesByCapacite);
