import { AjaxTable } from "./elements/ajax-table";
import { AjaxForm } from "./elements/ajax-form";
import { AjaxModal } from "./elements/ajax-modal";
import { AjaxChart } from "./elements/ajax-chart";
import { SearchForm } from "./elements/search-form";
import { AjaxUpload } from "./elements/ajax-upload";
import { ReactClock } from "./elements/react-clock";
import { ReservationDays } from "./elements/reservation-days";

import "./scripts/toast";
import "./scripts/popover";
import "./scripts/tooltip";
import "./scripts/select2";
import "./scripts/salle";
import "./scripts/bureau";
import "./scripts/contacts";
import "./scripts/setting";
import "./scripts/entries";
import "./scripts/autocomplete";
import "./scripts/datetimepicker";
import "./scripts/consomation";
import "./scripts/reservation-type";
import "./scripts/reservation-days";
import "./scripts/socialnetworks";

import "bootstrap/js/src/tab";
import "bootstrap/js/src/dropdown";
import "bootstrap/js/src/collapse";
import "bootstrap/js/src/offcanvas";

import "../styles/global.scss";

// Custom Elements
customElements.define("ajax-table", AjaxTable);
customElements.define("ajax-form", AjaxForm);
customElements.define("ajax-modal", AjaxModal);
customElements.define("ajax-chart", AjaxChart);
customElements.define("search-form", SearchForm);
customElements.define("ajax-upload", AjaxUpload);
customElements.define("react-clock", ReactClock);
customElements.define("reservation-days", ReservationDays);
