import axios from "axios";

import { trans } from "../utils/translation";

export class AjaxChart extends HTMLElement {
  constructor() {
    super();
    this.loading = false;
    this.type = this.getAttribute("type");
    this.url = this.getAttribute("url");
    this.params = JSON.parse(this.getAttribute("params")) || {};
    this.options = JSON.parse(this.getAttribute("options")) || {};
    this.render();
  }
  render() {
    if (this.loading) return;
    this.toggleLoading(true);
    axios
      .get(this.url, { params: this.params })
      .then((res) => {
        if (res.data.status === "success") {
          if (res.data.data.datasets[0].data.length > 0) {
            const config = {
              type: this.type,
              data: res.data.data || [],
              options: res.data.options || this.options,
            };
            const canvas = document.createElement("canvas");
            this.appendChild(canvas);
            new window.Chart(canvas.getContext("2d"), config);
          } else {
            this.draw(`<b>${trans("Aucun résultat n'a été trouvé")}</b>`);
          }
        } else {
          this.draw(`<b>${trans("Une erreur est survenue")}</b>`);
        }
      })
      .catch((err) => {
        this.draw(`<b>${err.message}</b>`);
      })
      .then(() => this.toggleLoading(false));
  }
  draw(content) {
    this.innerHTML = content;
  }
  toggleLoading(status) {
    this.loading = status;
    if (status) {
      this.draw(`<span class="spinner-border spinner-border-sm"></span>`);
    } else {
      this.querySelector(".spinner-border")?.remove();
    }
  }
}
