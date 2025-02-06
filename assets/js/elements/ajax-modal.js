import axios from "axios";
import Modal from "bootstrap/js/src/modal";

import { trans } from "../utils/translation";

export class AjaxModal extends HTMLElement {
  constructor() {
    super();
    this.addEventListener("click", () => {
      // attributes
      this.url = this.getAttribute("url");
      this.width = this.getAttribute("width");
      this.params = JSON.parse(this.getAttribute("params")) || {};
      this.defaultLoadingMessage = trans("Chargement en cours...");
      this.message = this.getAttribute("message") || this.defaultLoadingMessage;
      // check if require confirmation
      if (
        this.getAttribute("confirm") === "1" &&
        !confirm(trans("Êtes vous sûre de vouloir executer cette action ?"))
      )
        return;
      // blocks
      this.title = `<span class="spinner-border" style="width: 1.4rem; height: 1.4rem;border-width: 0.15em;"></span> ${this.message}`;
      this.body = "";
      this.footer = "";
      this.content = "";
      // open modal
      this.containerId = "ajax-modal";
      this.element = document.getElementById(this.containerId);
      if (this.element === null) {
        this.element = document.createElement("div");
        this.element.setAttribute("class", "modal fade");
        this.element.setAttribute("id", this.containerId);
        this.element.setAttribute("tabindex", "-1");
        document.body.appendChild(this.element);
      }
      this.fetch();
    });
  }
  fetch() {
    this.open(true);
    axios
      .get(this.url, {
        params: this.params,
      })
      .then((res) => {
        if (res.data.message !== undefined) {
          this.close(res);
        } else {
          this.title = res.data.title || "";
          this.body = res.data.body || "";
          this.footer = res.data.footer || "";
          this.content = res.data.content || "";
          this.render();
          // trigger ready event
          window.dispatchEvent(new CustomEvent("ajax.modal.ready"));
          // close on form submited
          this.element
            .querySelector("ajax-form")
            ?.addEventListener("ajax.form.success", (event) =>
              this.close(event.detail)
            );
        }
      })
      .catch((err) => {
        this.title = `<i class="bi bi-exclamation-triangle"></i> ${err.message}`;
        this.body = "";
        this.footer = "";
        this.content = "";
        this.render();
      });
  }
  open(fetching = false) {
    this.render(fetching);
    new Modal(this.element, {
      backdrop: "static",
      keyboard: false,
    }).show();
    this.element.addEventListener("hide.bs.modal", () => {
      document.getElementById(this.containerId)?.remove();
    });
  }
  close(res) {
    if (res.data.content !== undefined) {
      this.content = res.data.content;
      this.render();
    } else if (res.data.status === "success") {
      // hide modal
      const modal = document.getElementById("ajax-modal");
      Modal.getInstance(modal).hide();
      modal.nextElementSibling?.remove();
      modal?.remove();
      // refresh the table
      if (res.data.tableId !== undefined) {
        const table = document.getElementById(res.data.tableId);
        if (table !== null) {
          table.dispatchEvent(new Event("refresh"));
        }
      }
    }
    // show alert
    if (res.data.message !== undefined) {
      toast(res.data.status, res.data.message);
    }
  }
  render(fetching = false) {
    let html = `
      <div 
        style="margin: 0px auto;width:${
          fetching
            ? "fit-content"
            : !isNaN(this.width)
            ? this.width + "px"
            : "auto"
        };"
        class="modal-dialog modal-dialog-centered ${
          !fetching &&
          (this.width && this.width.startsWith("modal")
            ? this.width
            : "modal-lg")
        }" 
      >
      <div class="modal-content">
    `;
    if (this.content) {
      html += this.content;
    }
    if (this.title) {
      html += `<div class="modal-header${!this.body && " borderless"}">
        <h5 class="modal-title">${this.title}</h5>
        <button 
          type="button" 
          class="btn-close rounded-0 shadow-none" 
          data-bs-dismiss="modal" 
          aria-label="${trans("Fermer")}"
        ></button>
      </div>`;
    }
    if (this.body) {
      html += `<div class="modal-body">${this.body}</div>`;
    }
    if (this.footer) {
      html += `<div class="modal-footer">${this.footer}</div>`;
    }
    html += "</div></div>";
    this.element.innerHTML = html;
  }
}
