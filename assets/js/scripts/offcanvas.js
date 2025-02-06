import Offcanvas from "bootstrap/js/src/offcanvas";

document.querySelectorAll('[data-bs-toggle="offcanvas"]').forEach((element) => {
  new Offcanvas(element);
});
