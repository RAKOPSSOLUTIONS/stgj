window.addEventListener("ajax.modal.ready", () => {
  const societe = document.getElementById("bureau_societe");
  const direction = document.getElementById("bureau_direction");
  societe?.addEventListener("change", () => {
    direction.querySelectorAll("option:not(:first-child)").forEach((option) => {
      const societeValue = parseInt(societe.value) || 0;
      const societeId = parseInt(option.getAttribute("data-societe"));
      if (societeValue === societeId) {
        option.style.display = "block";
      } else {
        option.style.display = "none";
        if (direction.value === option.value) {
          direction.value = "";
        }
      }
    });
  });
});
