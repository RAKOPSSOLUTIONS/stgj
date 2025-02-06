import Popover from "bootstrap/js/src/popover";

window.addEventListener("ajax.table.ready", () => {
  document.querySelectorAll('[data-bs-toggle="popover"]').forEach((element) => {
    new Popover(element, { container: "body" });
  });
});

document.querySelectorAll('[data-bs-toggle="popover"]').forEach((element) => {
  new Popover(element, { container: "body" });
});
