import React, { useState, useEffect } from "react";
import axios from "axios";
import moment from "moment";
import { Popover, OverlayTrigger } from "react-bootstrap";
import { Calendar, momentLocalizer } from "react-big-calendar";
import "react-big-calendar/lib/css/react-big-calendar.css";

moment.locale("fr-FR");
const localizer = momentLocalizer(moment);

function Entry({ event }) {
  const types = {
    normal: "Résérvation normal",
    recurrente: "Résérvation récurrente",
    all_day: "Journée entière",
  };
  const popoverClickRootClose = (
    <Popover style={{ zIndex: 10000 }}>
      <table className="table table-basic mb-0">
        <tbody>
          <tr>
            <td>Salle</td>
            <td>{event.salle}</td>
          </tr>
          <tr>
            <td>Objet</td>
            <td>{event.title}</td>
          </tr>
          {event.message ? (
            <tr>
              <td>Message</td>
              <td>{event.message}</td>
            </tr>
          ) : null}
          <tr>
            <td>Type de résérvation</td>
            <td>{types[event.type]}</td>
          </tr>
          <tr>
            <td>Date début</td>
            <td>{event.start_date}</td>
          </tr>
          <tr>
            <td>Date fin</td>
            <td>{event.end_date}</td>
          </tr>
          <tr>
            <td>Réservé par</td>
            <td>{event.owner}</td>
          </tr>
          {event.participants ? (
            <tr>
              <td>Participants</td>
              <td>
                {event.participants &&
                  event.participants
                    .split(",")
                    .map((email) => <div key={email}>{email}</div>)}
              </td>
            </tr>
          ) : null}
        </tbody>
      </table>
    </Popover>
  );
  return (
    <OverlayTrigger
      rootClose
      container={this}
      placement="top"
      trigger={["hover", "focus"]}
      overlay={popoverClickRootClose}
    >
      {event.isOwner === "1" && new Date(event.start) > new Date() ? (
        <a
          href={`/admin/reservation/${event.id}/update`}
          class="text-decoration-none"
        >
          {event.title} - {event.salle}
        </a>
      ) : (
        <span>
          {event.title} - {event.salle}
        </span>
      )}
    </OverlayTrigger>
  );
}

function EntryAgenda({ event }) {
  return (
    <>
      <b>Objet:</b> {event.title}
      <br />
      <b>Salle:</b> {event.salle}
      <br />
      <b>Réservé par:</b> {event.owner}
    </>
  );
}

function eventStyleGetter(event) {
  const style = {
    backgroundColor: "#477626",
    color: "white",
  };
  return { style };
}

const messages = {
  allDay: "Journée",
  previous: "Précédent",
  next: "Suivant",
  today: "Aujourd'hui",
  month: "Mois",
  week: "Semaine",
  day: "Jour",
  agenda: "Agenda",
  date: "Date",
  time: "Heure",
  event: "Résérvation",
  work_week: "Semaine de travail",
  yesterday: "Hier",
  tomorrow: "Demain",
  noEventsInRange: "Aucune résérvation n'a été trouvée dans cette plage.",
  showMore: (total) => `+ ${total} de plus`,
};

export default function CalendarContainer() {
  const [error, setError] = useState(null);
  const [loading, setLoading] = useState(true);
  const [entries, setEntries] = useState([]);
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const startDate = urlParams.get("du")
    ? new Date(urlParams.get("du"))
    : new Date();
  const [selectedDate, setSelectedDate] = useState(startDate);
  useEffect(() => {
    axios
      .get("/admin/reservations/calendar/entries" + window.location.search)
      .then((response) => {
        setLoading(false);
        if ("entries" in response.data) {
          const entry = response.data.entries.map((entry) => {
            return {
              ...entry,
              start: new Date(entry.start),
              end: new Date(entry.end),
            };
          });
          setError(null);
          setEntries(entry);
        } else {
          setError(response.data.message);
        }
      })
      .catch((error) => {
        setLoading(false);
        setError(error.message);
      });
  }, []);

  return (
    <div className="calendar-container">
      {loading ? (
        <center className="mb-4">
          <span className="spinner-border spinner-border-sm"></span>
          <span>&nbsp;Chargement des réservations...</span>
        </center>
      ) : error ? (
        <div className="bd-callout bd-callout-danger">{error}</div>
      ) : (
        <Calendar
          localizer={localizer}
          events={entries}
          messages={messages}
          startAccessor="start"
          endAccessor="end"
          defaultView="month"
          tooltipAccessor={null}
          onSelectEvent={null}
          eventPropGetter={eventStyleGetter}
          style={{ height: 600, width: "100%" }}
          date={selectedDate}
          onNavigate={(date) => setSelectedDate(date)}
          components={{
            event: Entry,
            agenda: {
              event: EntryAgenda,
            },
          }}
        />
      )}
    </div>
  );
}
