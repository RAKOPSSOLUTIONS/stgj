import { updateEndDate } from "../utils/reservation";

const initJoursRecurrente = () => {
  document
    .querySelectorAll('[id$="type"] [type="radio"]')
    .forEach((element) => {
      element.addEventListener("change", function () {
        const dateFin = document.getElementById("field_end_date");
        const joursRecurrente = document.querySelector(
          '[id$="jours_recurrente"]'
        );
        const jours = joursRecurrente.closest("#field-jours-recurrente");
        const days = joursRecurrente.querySelectorAll('[type="checkbox"]');
        days.forEach((cb) => (cb.checked = false));
        switch (this.value) {
          case "normal":
            jours.style.display = "none";
            dateFin.style.display = "block";
            break;
          case "all_day":
            jours.style.display = "none";
            dateFin.style.display = "none";
            updateEndDate();
            break;
          case "recurrente":
            dateFin.style.display = "block";
            jours.style.display = "block";
            break;
        }
      });
    });
};

window.addEventListener("ajax.modal.ready", initJoursRecurrente);
window.addEventListener("ajax.form.ready", initJoursRecurrente);
