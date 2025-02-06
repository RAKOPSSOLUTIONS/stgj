window.addEventListener("ajax.modal.ready", () => {
  const type = document.getElementById("setting_field_type");
  type?.addEventListener("change", function () {
    document.querySelectorAll("[data-field-type]").forEach((field) => {
      if (field.getAttribute("data-field-type") === this.value) {
        field.style.display = "block";
      } else {
        field.style.display = "none";
      }
    });
  });
  // add item
  document.querySelectorAll("button.addLine").forEach((button) => {
    button.addEventListener("click", function () {
      const keys = [];
      const itemsContainer = button.previousElementSibling;
      itemsContainer.querySelectorAll(".input-group input").forEach((input) => {
        keys.push(input.getAttribute("data-key"));
      });
      const key = keys.length > 0 ? Math.max(...keys) + 1 : 1;
      const item = document.createElement("div");
      item.setAttribute("class", "input-group");
      const fieldType = itemsContainer
        .closest("[data-field-type]")
        .getAttribute("data-field-type");
      item.innerHTML = `
          <input type="text" name="value[${fieldType}][${key}]" class="form-control" data-key="${key}">
          <button type="button" class="input-group-text bg-danger text-white deleteLine">
              <i class="bi bi-dash"></i>
          </button>
        `;
      itemsContainer.append(item);
      item
        .querySelector(".deleteLine")
        .addEventListener("click", () => item.remove());
    });
    // delete item
    document.querySelectorAll("button.deleteLine").forEach((button) => {
      button.addEventListener("click", function () {
        button.closest(".input-group").remove();
      });
    });
  });
});
