import Toast from "bootstrap/js/src/toast";

window.toast = (type = "info", message, delay = 3000) => {
  const toast =
    document.getElementById("chm-toast") || document.createElement("div");
  toast.setAttribute("class", `toast ${type}`);
  toast.setAttribute("id", "chm-toast");
  document.body.appendChild(toast);
  toast.innerHTML = `<div class="d-flex">
      <div class="toast-body">${message}</div>
      <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>`;
  new Toast(toast, { delay }).show();
  toast.addEventListener("hide.bs.toast", () => {
    document.getElementById("chm-toast")?.remove();
  });
};
