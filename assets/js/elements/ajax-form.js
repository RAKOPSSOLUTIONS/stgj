import axios from "axios";

import { trans } from "../utils/translation";

export class AjaxForm extends HTMLElement {
  connectedCallback() {
    window.dispatchEvent(new CustomEvent("ajax.form.ready"));
    this.querySelector("form").addEventListener(
      "submit",
      this.submit.bind(this)
    );
  }
  submit(e) {
    e.preventDefault();
    const form = this.querySelector("form");
    const formData = new FormData(form);
    const btn = form.querySelector('[type="submit"]');
    const btnHtml = btn.innerHTML;
    btn.innerHTML = `<span class="spinner-border spinner-border-sm fs-6"></span> ${trans(
      "Traitement en cours..."
    )}`;
    btn.setAttribute("disabled", "disabled");
    axios
      .post(form.getAttribute("action"), formData)
      .then((res) => {
        if (res.data.message !== undefined) {
          toast(res.data.status, res.data.message);
        }
        if (res.data.status === "success") {
          this.dispatchEvent(
            new CustomEvent("ajax.form.success", { detail: res })
          );
        }
      })
      .catch((err) => {
        toast("error", err.message);
      })
      .then(() => {
        btn.innerHTML = btnHtml;
        btn.removeAttribute("disabled");
      });
  }
}
