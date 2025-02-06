import axios from "axios";

import { trans } from "../utils/translation";

export class AjaxUpload extends HTMLElement {
  constructor() {
    super();
    this.path = this.getAttribute("path");
    this.name = this.getAttribute("name") || "files";
    this.min = parseInt(this.getAttribute("min")) || 0;
    this.max = parseInt(this.getAttribute("max")) || 0;
    this.on("click", ".file-delete", this.remove);
    this.on("change", '[type="file"]', this.handleChange);
  }
  on(event_name, target, callback) {
    this.querySelectorAll(target).forEach((element) =>
      element.addEventListener(event_name, callback.bind(this, element))
    );
  }
  remove(el) {
    if (this.querySelectorAll(".file-item").length === this.min) {
      if (this.min > 1) {
        toast(
          "danger",
          trans("Il faut avoir au mois %min% fichiers", { min: this.min })
        );
      } else {
        toast("danger", trans("Il faut avoir au mois un fichier"));
      }
      return;
    } else if (
      confirm(trans("Êtes vous sûre de vouloir supprimer ce fichier ?"))
    ) {
      el.closest(".file-item")?.remove();
      this.querySelector(".file-add").style.display = "block";
    }
  }
  handleChange(target) {
    const icon = this.querySelector(".bi-plus");
    const spinner = this.querySelector(".spinner-border");
    icon.style.display = "none";
    spinner.style.display = "block";
    target.setAttribute("disabled", "");
    const formData = new FormData();
    formData.append("path", this.path);
    formData.append("file", target.files[0]);
    axios
      .post("/admin/file/upload", formData)
      .then((res) => {
        if (res.data.file_name !== undefined) {
          this.append(res.data);
        } else {
          toast(res.data.status, res.data.message);
        }
      })
      .catch((err) => toast("error", err.message))
      .then(() => {
        icon.style.display = "block";
        spinner.style.display = "none";
        target.removeAttribute("disabled");
        target.value = "";
      });
  }
  append(data) {
    const item = document.createElement("div");
    const value = `{"name": "${data.file_name}", "path": "${data.file_path}"}`;
    item.setAttribute("class", "col-sm-3 col-6 ps-1 mb-3 file-item");
    item.innerHTML = `<div class="card">
      <a href="/uploads/${data.file_path}" target="_blank" title="${
      data.file_name
    }">
        ${
          ["jpeg", "jpg", "png", "gif"].includes(data.extension)
            ? '<img src="/uploads/' + data.file_path + '" class="img-fluid">'
            : '<i class="bi bi-' + this.getIcon(data.extension) + '"></i>'
        }
      </a>
      <i class="bi bi-x-circle file-delete"></i>
      <input type="hidden" name="${this.name}[]" value='${value}' />
    </div>`;
    const addFile = this.querySelector(".file-add");
    addFile.parentNode.insertBefore(item, addFile);
    const deleteFile = item.querySelector(".file-delete");
    deleteFile.addEventListener("click", this.remove.bind(this, deleteFile));
    const countItems = this.querySelectorAll(".file-item").length;
    addFile.style.display =
      this.max === 0 || countItems < this.max ? "block" : "none";
  }
  getIcon(extension) {
    if (["jpeg", "jpg", "png", "gif"].includes(extension)) {
      return "file-image";
    }
    if (["doc", "docx"].includes(extension)) {
      return "file-word";
    }
    if (["xls", "xlsx"].includes(extension)) {
      return "file-excel";
    }
    if (extension === "pdf") {
      return "file-pdf";
    }
    return "file-richtext";
  }
}
