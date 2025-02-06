import axios from "axios";

import { trans } from "../utils/translation";

export class AjaxTable extends HTMLElement {
  constructor() {
    super();
    this.loading = false;
    this.id = this.getAttribute("id");
    this.url = this.getAttribute("url");
    this.entity_name = this.getAttribute("sortable");
    this.page = this.getAttribute("page") || 1;
    this.perpage = this.getAttribute("perpage") || 10;
    this.params = JSON.parse(this.getAttribute("params")) || {};
    if (this.querySelector("table")) {
      this.registerEvents();
    } else {
      this.spinner();
      this.render();
    }
    this.addEventListener("refresh", this.render);
  }
  spinner() {
    this.draw(
      `<div class="bd-callout bd-callout-info">
        <span class="spinner-border spinner-border-sm"></span>
        ${trans("Chargement de la table en cours...")}
      </div>`
    );
  }
  render(event) {
    if (this.loading) return;
    this.toggleLoading(true);

    // merge params from event
    if (typeof event?.detail === "object") {
      this.params = event.detail;
      this.page = 1;
    }

    const params = { page: this.page, perpage: this.perpage, ...this.params };

    axios
      .get(this.url, { params })
      .then((res) => {
        this.draw(res.data);
        if (res.data.includes("table")) {
          this.registerEvents();
        }
      })
      .catch((err) => {
        this.draw(
          `<div class="bd-callout bd-callout-danger">${err.message}</div>`
        );
      })
      .then(() => this.toggleLoading(false));
  }
  on(event_name, target, callback) {
    this.querySelectorAll(target).forEach((element) =>
      element.addEventListener(event_name, callback.bind(this, element))
    );
  }
  registerEvents() {
    this.on("click", ".bulk-actions", this.bulkActionsChange);
    this.on("click", ".bulk-apply", this.applyBulkAction);
    this.on("change", ".perpage", this.setPerpage);
    this.on("change", ".page-number", this.setPage);
    this.on("click", ".next-page", this.nextPage);
    this.on("click", ".prev-page", this.prevPage);
    this.on("change", ".cb-check-all", this.checkAll);
    this.on("change", ".cb-item", this.toggleCheckAll);
    window.dispatchEvent(new CustomEvent("ajax.table.ready"));
    // make table sortable
    if (window.jQuery && this.entity_name) {
      this.sortableItems();
    }
    this.setBadgeCount();
  }
  draw(content) {
    this.innerHTML = content;
  }
  toggleLoading(status) {
    this.loading = status;
    if (status && this.querySelector("table") !== null) {
      this.classList.add("loading");
    } else {
      this.classList.remove("loading");
    }
    this.querySelector("table").style.opacity = status ? 0.3 : 1;
    const btnLoading = this.querySelector(".btn-loading");
    if (btnLoading) {
      btnLoading.style.display = status ? "block" : "none";
    }
  }
  bulkActionsChange() {
    const action = this.querySelector(".bulk-actions")
      .querySelector("option:checked")
      .getAttribute("data-name");
    this.querySelectorAll(".cb-item").forEach((item) => {
      if (action !== null) {
        const dropdown = item.closest("tr").querySelector(".dropdown-menu");
        const exists = dropdown.querySelector(`.action-${action}`) !== null;
        item.disabled = !exists;
        item.checked = exists && item.checked;
      } else {
        item.disabled = false;
      }
    });
  }
  applyBulkAction() {
    const url = this.querySelector(".bulk-actions").value;
    if (url === "") {
      toast("warning", trans("Veuillez choisir une action"));
      return;
    }
    const items = [];
    this.querySelectorAll(".cb-item:checked").forEach((item) =>
      items.push(item.value)
    );
    if (items.length < 1) {
      toast("warning", trans("Vous devez choisir au moins une ligne"));
      return;
    }
    const btn = this.querySelector(".bulk-apply");
    const btnHtml = btn.innerHTML;
    btn.innerHTML = `<span class="spinner-border spinner-border-sm"></span>`;
    btn.setAttribute("disabled", "disabled");
    axios
      .post(url, null, { params: { items } })
      .then((res) => {
        if (res.data.status === "success") {
          this.render();
        }
        if (res.data.message !== undefined) {
          toast(res.data.status, res.data.message);
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
  setPerpage() {
    const perpage = parseInt(this.querySelector(".perpage").value);
    this.page = 1;
    this.perpage = perpage;
    this.render();
  }
  setPage() {
    const input = this.querySelector(".page-number");
    const page = parseInt(input.value);
    if (page > 0 && page <= input.getAttribute("max")) {
      if (page != this.page) {
        this.page = page;
        this.render();
      }
    } else {
      toast("warning", trans("Veuillez saisir un numéro de page valide"));
    }
  }
  prevPage() {
    const page = this.querySelector(".page-number").value;
    if (page > 1) {
      this.page = parseInt(page) - 1;
      this.querySelector(".page-number").value = this.page;
      this.render();
    }
  }
  nextPage() {
    const page = this.querySelector(".page-number").value;
    this.page = parseInt(page) + 1;
    this.querySelector(".page-number").value = this.page;
    this.render();
  }
  checkAll(cb) {
    this.querySelectorAll(".cb-item").forEach((item) => {
      if (!item.disabled) {
        item.checked = cb.checked;
      }
    });
    this.querySelectorAll(".cb-check-all").forEach(
      (item) => (item.checked = cb.checked)
    );
  }
  toggleCheckAll() {
    const unchecked = this.querySelectorAll(".cb-item").length;
    const checked = this.querySelectorAll(".cb-item:checked").length;
    this.querySelectorAll(".cb-check-all").forEach((item) => {
      item.checked = checked === unchecked;
      item.indeterminate = !item.checked && checked > 0;
    });
  }
  sortableItems() {
    const $table = $(this.querySelector("table"));
    $table.find("tbody").sortable({
      update: () => {
        const items_orders = {};
        $table.find("tbody tr").each((index, item) => {
          items_orders[$(item).data("pkv")] = index + 1;
          $(item)
            .find(".td_increment")
            .text(index + 1);
        });
        $table.css("opacity", "0.3");
        axios
          .post("/admin/sort/order/update", null, {
            params: { entity_name: this.entity_name, items_orders },
          })
          .then((res) => {
            if (res.data.status === "error") {
              toast("error", res.data.message);
            }
          })
          .catch(() => {
            toast("error", trans("Une erreur est survenue"));
          })
          .then(() => $table.css("opacity", 1));
      },
    });
  }
  setBadgeCount() {
    const count = this.querySelector(".chm-table-total")?.innerText || 0;
    document.querySelectorAll("[chm-table-total]").forEach((element) => {
      element.innerText = count;
    });
  }
}
