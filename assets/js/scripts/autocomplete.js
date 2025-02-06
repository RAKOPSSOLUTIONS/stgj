window.addEventListener("ajax.modal.ready", () => {
  if (
    window.jQuery &&
    document.querySelector("#course_adresse_ramassage").length &&
    document.querySelector("#course_adresse_livraison").length
  ) {
    $("#course_adresse_ramassage").autocomplete();
    $("#course_adresse_livraison").autocomplete();
  }
});
