const initSelect2 = () => {
  if (
    !window.jQuery ||
    !jQuery.fn.select2 ||
    !document.querySelectorAll(".chm-select2").length
  ) {
    return;
  }
  document.querySelectorAll(".chm-select2").forEach((element) => {
    $(element).select2({
      language: "fr",
      tags: true,
      dropdownParent: $(element).parent(),
    });
  });
};

window.addEventListener("ajax.modal.ready", initSelect2);
window.addEventListener("ajax.form.ready", initSelect2);
