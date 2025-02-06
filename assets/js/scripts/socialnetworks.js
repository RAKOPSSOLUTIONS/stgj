window.addEventListener("ajax.modal.ready", () => {
  // add item
  document.querySelectorAll("button.add-entry").forEach((button) => {
    button.addEventListener("click", function () {
      const time = new Date().getTime();
      const itemsContainer = button.previousElementSibling;
      const entry = itemsContainer.querySelector(".card-entry").cloneNode(true);
      entry
        .querySelectorAll(".form-control, .form-select")
        .forEach((control) => {
          control.value = "";
          control.setAttribute(
            "id",
            control.getAttribute("id").replace(/_([0-9]+)_/, `_${time}_`)
          );
          control.setAttribute(
            "name",
          control.getAttribute("name").replace(/_([0-9]+)_/, `_${time}_`)
          );
          /*control.setAttribute(
            "link",
            control.getAttribute("link").replace(/_([0-9]+)_/, `_${time}_`)
          );
          control.setAttribute(
            "folowersCount",
            control.getAttribute("folowersCount").replace(/_([0-9]+)_/, `_${time}_`)
          );*/
        });
          
      itemsContainer.append(entry);
      entry
        .querySelector("button.delete-entry")
        .addEventListener("click", () => {
          if (confirm("Êtes vous sûr ?")) {
            entry.remove();
          }
        });
    });
  });
  // delete entry
  document.querySelectorAll("button.delete-entry").forEach((button) => {
    button.addEventListener("click", function () {
      if (
        button.closest(".entries").querySelectorAll(".card-entry").length > 1
      ) {
        if (confirm("Êtes vous sûr ?")) {
          button.closest(".card-entry").remove();
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
