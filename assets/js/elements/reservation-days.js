import axios from "axios";

import { trans } from "../utils/translation";

export class ReservationDays extends HTMLElement {
  constructor() {
    super();
    this.loading = false;
    this.params = JSON.parse(this.getAttribute("params")) || {};
    this.render();
    this.addEventListener("refresh", this.render);
  }
  render(event) {
    // merge params from event
    if (event !== undefined && typeof event.detail === "object") {
      if (
        parseInt(this.params.rid) === parseInt(event.detail.rid) &&
        parseInt(this.params.sid) === parseInt(event.detail.sid) &&
        this.params.start === event.detail.start &&
        this.params.end === event.detail.end &&
        this.params.days === event.detail.days
      ) {
        this.toggleLoading(false);
        return;
      }
      this.params = { ...this.params, ...event.detail };
    }
    if (
      this.params.sid < 1 ||
      this.params.start === "" ||
      this.params.end === ""
    ) {
      this.draw("");
      this.toggleLoading(false);
      return;
    }
    this.toggleLoading(true);
    axios
      .get("/admin/reservations/days", { params: this.params })
      .then((res) => {
        if (res.data.content !== undefined) {
          this.draw(res.data.content);
        } else {
          this.draw(
            `<center class="mb-3"><b>${trans(
              "Une erreur est survenue"
            )}</b></center>`
          );
        }
      })
      .catch((err) => {
        this.draw(`<center class="mb-3"><b>${err.message}</b></center>`);
      })
      .then(() => this.toggleLoading(false));
  }
  draw(content) {
    this.innerHTML = content;
  }
  toggleLoading(status) {
    this.loading = status;
    if (status) {
      this.draw(
        `<center class="mb-3">
          <span class="spinner-border spinner-border-sm"></span>
          <b>${trans("Chargement en cours...")}</b>
        </center>`
      );
    } else {
      this.querySelector(".spinner-border")?.remove();
    }
  }
}
