import { updateEndDate } from "../utils/reservation";

const initReservationDaysElements = () => {
  const elements = [
    '[id$="type"] [type="radio"]',
    "input.start_date",
    "input.end_date",
    '[id$="jours_recurrente"] [type="checkbox"]',
    "select.capacite",
    "select.salle",
  ];
  elements.forEach((selector) => {
    document
      .querySelectorAll(selector)
      ?.forEach((element) =>
        element.addEventListener("change", fetchReservationDays)
      );
  });
  fetchReservationDays();
};

export const fetchReservationDays = () => {
  if (document.querySelector("reservation-days") === null) {
    return;
  }
  if (
    document.querySelector('[id$="type"] input:checked').value === "all_day"
  ) {
    updateEndDate();
  }

  const startDate = $("input.start_date")
    .data("DateTimePicker")
    ?.date()
    .toDate();
  const endDate = $("input.end_date").data("DateTimePicker")?.date().toDate();

  const days = [];
  document
    .querySelectorAll('[id$="jours_recurrente"] [type="checkbox"]:checked')
    .forEach((input) => days.push(input.value));

  var params = {
    rid: document.querySelector("input.reservation_id").value || 0,
    sid: document.querySelector("select.salle").value || 0,
    days: days.join(","),
    start: moment(startDate).format("YYYY-MM-DD HH:mm:00"),
    end: moment(endDate).format("YYYY-MM-DD HH:mm:00"),
  };

  document
    .querySelector("reservation-days")
    .dispatchEvent(new CustomEvent("refresh", { detail: params }));
};

window.addEventListener("ajax.modal.ready", initReservationDaysElements);
window.addEventListener("ajax.form.ready", initReservationDaysElements);
