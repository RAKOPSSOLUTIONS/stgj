import { isValidEmail } from "../utils/email";

const initContacts = () => {
  if (
    !window.jQuery ||
    !jQuery.fn.select2 ||
    !document.querySelectorAll("select.contacts").length
  ) {
    return;
  }
  document.querySelectorAll("select.contacts").forEach((select) => {
    $(select).select2({
      ajax: {
        url: "/admin/contacts/search",
        type: "GET",
        dataType: "json",
        delay: 250,
        cache: true,
        data: (params) => ({ keywords: params.term }),
        processResults: (data) => {
          return {
            more: false,
            results: data.contacts.map((email) => ({ id: email, text: email })),
          };
        },
      },
      tags: true,
      multiple: true,
      language: "fr",
      tokenSeparators: [","],
      closeOnSelect: true,
      minimumInputLength: 1,
      dropdownParent: $(select).parent(),
      createTag: function (term) {
        var value = term.term;
        if (isValidEmail(value)) {
          return {
            id: value,
            text: value,
          };
        }
        return null;
      },
    });
  });
};

window.addEventListener("ajax.modal.ready", initContacts);
window.addEventListener("ajax.form.ready", initContacts);
