export class SearchForm extends HTMLElement {
  constructor() {
    super();
    this.tableId = this.getAttribute("table");
    this.querySelector(".btn-reset").addEventListener(
      "click",
      this.reset.bind(this)
    );
    this.querySelector(".btn-search").addEventListener(
      "click",
      this.submit.bind(this)
    );
  }
  reset() {
    const url = window.location.origin + window.location.pathname;
    window.history.pushState(null, document.title, url);
    this.querySelectorAll('input:not([type="hidden"])').forEach((element) => {
      element.value = "";
      element.removeAttribute("value");
    });
    this.querySelectorAll("select").forEach((element) => {
      for (let i = 0; i < element.options.length; i++) {
        element.options[i].removeAttribute("selected");
      }
    });
    const table = document.getElementById(this.tableId);
    table.dispatchEvent(new CustomEvent("refresh", { detail: {} }));
  }
  submit(e) {
    e.preventDefault();
    const params = {};
    const form = e.target.closest("search-form").querySelector("form");
    const urlParams = new URLSearchParams(new FormData(form));
    urlParams.forEach((value, name) => {
      if (value !== "") {
        if (name.endsWith("[]")) {
          name = name.replace("[]", "");
          if (params[name] === undefined) {
            params[name] = [];
          }
          params[name].push(value);
        } else {
          params[name] = value;
        }
      }
    });
    let url = window.location.origin + window.location.pathname;
    if (urlParams) url += "?" + urlParams.toString();
    window.history.pushState(null, document.title, url);
    const table = document.getElementById(this.tableId);
    if (table !== null) {
      table.dispatchEvent(new CustomEvent("refresh", { detail: params }));
    } else {
      window.location.reload();
    }
  }
}
