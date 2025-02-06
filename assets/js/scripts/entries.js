window.addEventListener("ajax.form.ready", () => {
  // add item
  document.querySelectorAll("button.entry-add").forEach((button) => {
    button.addEventListener("click", function () {
      const time = new Date().getTime();
      const itemsContainer = document.getElementById(
        button.getAttribute("data-target")
      );
      const entry = itemsContainer.querySelector(".entry-item").cloneNode(true);
      entry
        .querySelectorAll(".form-control, .form-select")
        .forEach((control) => {
          if (control.getAttribute("id").endsWith("_id")) {
            control.value = "0";
          } else {
            control.value = "";
          }
          control.setAttribute(
            "id",
            control.getAttribute("id").replace(/_([0-9]+)_/, `_${time}_`)
          );
          control.setAttribute(
            "name",
            control.getAttribute("name").replace(/_([0-9]+)_/, `_${time}_`)
          );
        });
      entry.querySelectorAll(".image-item").forEach((image) => image.remove());
      entry.querySelectorAll("image-upload").forEach((upload) => {
        upload.setAttribute(
          "name",
          upload.getAttribute("name").replace(/_([0-9]+)_/, `_${time}_`)
        );
      });
      itemsContainer.append(entry);
      entry
        .querySelector("button.entry-delete")
        .addEventListener("click", function () {
          if (confirm("Êtes vous sûr ?")) {
            entry.remove();
            const callback = this.getAttribute("callback");
            if (callback !== null) {
              window[callback]();
            }
          }
        });
    });
  });
  // delete entry
  document.querySelectorAll("button.entry-delete").forEach((button) => {
    button.addEventListener("click", function () {
      if (
        button.closest(".entries").querySelectorAll(".entry-item").length > 1
      ) {
        if (confirm("Êtes vous sûr ?")) {
          button.closest(".entry-item").remove();
          const callback = button.getAttribute("callback");
          if (callback !== null) {
            window[callback]();
          }
        }
      } else {
        toast(
          "warning",
          "Veuillez ajouter d'autres éléments pour pouvoir supprimer cet élément"
        );
      }
    });
  });
});
