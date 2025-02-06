import { fetchReservationDays } from "./reservation-days";

const initDatetimepicker = () => {
  if (
    !window.jQuery ||
    !document.querySelectorAll("input.datetimepicker").length
  ) {
    return;
  }
  document.querySelectorAll("input.datetimepicker").forEach((input) => {
    $(input)
      .datetimepicker({
        locale: "fr",
        stepping: 5,
        sideBySide: true,
        minDate: "2021-01-01",
        maxDate: "2030-12-31",
        format: "DD/MM/YYYY HH:mm",
      })
      .on("dp.change", fetchReservationDays);
  });
};

window.addEventListener("ajax.modal.ready", initDatetimepicker);
window.addEventListener("ajax.form.ready", initDatetimepicker);
