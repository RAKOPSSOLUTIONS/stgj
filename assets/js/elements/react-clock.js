import React, { useState, useEffect } from "react";
import ReactDOM from "react-dom";
import moment from "moment";
moment.locale("fr-FR");

const ClockContainer = () => {
  const [currentTime, setCurrentTime] = useState(moment().format("HH:mm"));

  // update clock every minute
  useEffect(() => {
    const interval = setInterval(() => {
      setCurrentTime(moment().format("HH:mm"));
    }, 10000);
    return () => clearInterval(interval);
  }, []);

  return (
    <div className="d-flex flex-row">
      <div className="clock">{currentTime}</div>
      <div className="full-date">
        <span className="text-capitalize">{moment().format("dddd")}</span>
        <br />
        {moment().format("Do MMMM YYYY")}
      </div>
    </div>
  );
};

export class ReactClock extends HTMLElement {
  connectedCallback() {
    this.innerHTML = '<div id="react-clock"></div>';
    ReactDOM.render(<ClockContainer />, document.getElementById("react-clock"));
  }
}
