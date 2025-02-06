import Tooltip from "bootstrap/js/src/tooltip";

window.addEventListener("ajax.table.ready", () => {
  document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach((element) => {
    new Tooltip(element, { container: "body" });
  });
});

document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach((element) => {
  new Tooltip(element, { container: "body" });
});
