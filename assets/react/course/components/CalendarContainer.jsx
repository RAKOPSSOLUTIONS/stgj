import React, { useState, useEffect, useMemo } from "react";
import axios from "axios";
import moment from "moment";
import { Calendar, momentLocalizer } from "react-big-calendar";
import "react-big-calendar/lib/css/react-big-calendar.css";

moment.locale("fr-FR");
const localizer = momentLocalizer(moment);

function Entry({ event }) {
  return (
    <div>
      <span>{event.objet ? event.objet : event.numero}</span>
      <span>- {event.demandeur}</span>
      <span>- {event.societe}</span>
    </div>
  );
}

function EntryAgenda({ event }) {
  return (
    <>
      <b>Numéro:</b> {event.numero}
      <br />
      <b>Demandeur:</b> {event.demandeur}
      <br />
      <b>Société:</b> {event.societe}
      <br />
      <b>Objet:</b> {event.objet}
      <br />
      <b>Adresse de récupération:</b> {event.adresse_ramassage}
      <br />
      <b>Adresse de livraison:</b> {event.adresse_livraison}
      <br />
      <b>Coursier:</b> {event.coursier}
      <br />
      <b>Statut:</b> {event.status}
      <br />
      <b>Degré d'urgence:</b> {event.degre_urgence}
    </>
  );
}

function eventStyleGetter() {
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
  event: "Course",
  work_week: "Semaine de travail",
  yesterday: "Hier",
  tomorrow: "Demain",
  noEventsInRange: "Aucune course n'a été trouvée dans cette plage.",
  showMore: (total) => `+ ${total} de plus`,
};

export default function CalendarContainer() {
  const [error, setError] = useState(null);
  const [loading, setLoading] = useState(true);
  const [entries, setEntries] = useState([]);

  // get year and month
  const startDate = useMemo(() => {
    const date = new Date();
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const annee = urlParams.get("annee") || date.getFullYear();
    const mois = urlParams.get("mois") || date.getMonth() + 1;
    return new Date(`${annee}-${("0" + mois).slice(-2)}-01`);
  }, []);
  const [selectedDate, setSelectedDate] = useState(startDate);

  useEffect(() => {
    axios
      .get("/admin/courses/calendar/entries" + window.location.search)
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
          <span>&nbsp;Chargement des courses...</span>
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
