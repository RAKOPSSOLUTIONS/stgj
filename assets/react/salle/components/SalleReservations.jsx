import React, { useState, useEffect, useMemo } from "react";
import axios from "axios";
import styled from "styled-components";
import moment from "moment";
moment.locale("fr-FR");

const Body = styled.div`
  --bs-gutter-x: 0px;
`;
const RoomAvailable = styled.div`
  height: calc(100vh - 93px);
  background-color: #198754;
`;
const RoomBooked = styled.div`
  height: calc(100vh - 90px);
  background-color: #dc3545;
`;
const Reservation = styled.div`
  padding: 20px;
  &:not(:last-child) {
    border-bottom: 1px solid #eee;
  }
  &.current:before {
    content: "\f231";
    font-size: 2.5rem;
    color: #dc3545;
    font-family: bootstrap-icons !important;
    position: absolute;
    margin-left: -39px;
    margin-top: 23px;
  }
`;

export default function SalleReservations({
  tabletteUID,
  currentTime,
  setCurrentTime,
}) {
  const [version, setVersion] = useState(null);
  const [loading, setLoading] = useState(true);
  const [entries, setEntries] = useState([]);
  const [buildVersion, setBuildVersion] = useState(null);

  const currentDate = moment().format("YYYY-MM-DD");

  const reservations = useMemo(() => {
    return entries.filter((e) => {
      return new Date(currentDate + "T" + e.end + ":00") > new Date();
    });
  }, [entries, currentDate]);

  const current = useMemo(() => {
    return (
      reservations.filter((e) => {
        return (
          Date.now() >= new Date(currentDate + "T" + e.start + ":00").getTime()
        );
      })[0] || []
    );
  }, [reservations]);

  const currentDuration = useMemo(() => {
    return current.id
      ? Math.round(
          (new Date(currentDate + "T" + current.end + ":00").getTime() -
            Date.now()) /
            1000 /
            60
        )
      : 0;
  }, [current]);

  const currentPercentage = useMemo(() => {
    return current.id ? 100 - (100 * currentDuration) / current.duration : 0;
  }, [current, currentTime, currentDuration]);

  const percentageToDegrees = (percentage) => {
    return (percentage / 100) * 360;
  };

  const getHumainTime = (duration) => {
    const hours = Math.floor(duration / 60);
    const minutes = duration % 60;
    let html = "";
    if (hours > 0) {
      html += `${hours}<span className="small">h</span>`;
    }
    if (hours > 0 && minutes > 0) {
      html += ":";
    }
    if (minutes > 0) {
      html += `${minutes}<span className="small">m</span>`;
    }
    return html;
  };

  useEffect(() => {
    axios
      .get(`/salles/${tabletteUID}/entries`)
      .then((response) => {
        setLoading(false);
        if ("entries" in response.data) {
          setEntries(response.data.entries);
          // refresh the page for new changes
          if (
            buildVersion !== null &&
            buildVersion !== response.data.buildVersion
          ) {
            window.location.reload();
          } else {
            setBuildVersion(response.data.buildVersion);
          }
        } else {
          setTimeout(() => setVersion(Math.random()), 15000);
        }
      })
      .catch(() => {
        setLoading(false);
        setTimeout(() => setVersion(Math.random()), 15000);
      });
  }, [currentTime, version]);

  // update clock every minute
  useEffect(() => {
    const interval = setInterval(() => {
      setCurrentTime(moment().format("HH:mm"));
    }, 10000);
    return () => clearInterval(interval);
  }, []);

  return (
    <Body className="row">
      {loading ? (
        <div className="d-flex flex-row justify-content-center align-items-center mt-5">
          <span className="spinner-border spinner-border-sm"></span>
          <span className="ms-2">Chargement en cours...</span>
        </div>
      ) : (
        <div className={reservations.length > 0 ? "col-sm-6" : "col-sm-12"}>
          {current.id ? (
            <RoomBooked className="d-flex flex-column justify-content-center align-items-center">
              <h2 className="text-white text-uppercase mb-4">
                Réunion en cours
              </h2>
              <div className="progress mx-auto">
                <span className="progress-left">
                  <span
                    className="progress-bar border-success"
                    style={{
                      transform:
                        currentPercentage > 0 &&
                        currentPercentage > 50 &&
                        "rotate(" +
                          percentageToDegrees(currentPercentage - 50) +
                          "deg)",
                    }}
                  ></span>
                </span>
                <span className="progress-right">
                  <span
                    className="progress-bar border-success"
                    style={{
                      transform:
                        currentPercentage > 0 && currentPercentage <= 50
                          ? "rotate(" +
                            percentageToDegrees(currentPercentage) +
                            "deg)"
                          : "rotate(180deg)",
                    }}
                  ></span>
                </span>
                <div className="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div
                    className="text-white h2 font-weight-bold"
                    dangerouslySetInnerHTML={{
                      __html: getHumainTime(currentDuration),
                    }}
                  />
                </div>
              </div>
              
              <h4 className="text-white">
                {current.start} <i className="bi bi-arrow-right"></i>{" "}
                {current.end}
              </h4>
              <p className="text-white mt-2 mb-0">
                <b>Réservé par: </b>
                {current.owner}
              </p>
              <p className="text-white mt-1 mb-0">
                <i className="bi bi-clock"></i> Durée:{" "}
                <span
                  dangerouslySetInnerHTML={{
                    __html: getHumainTime(current.duration),
                  }}
                />
              </p>
              <p className="text-white mt-1 mb-0">
                <i className="bi bi-people"></i> {current.participants}{" "}
                participants
              </p>
            </RoomBooked>
          ) : (
            <RoomAvailable className="d-flex flex-column justify-content-center align-items-center">
              <h2 className="text-white text-uppercase mb-4">Disponible</h2>
            </RoomAvailable>
          )}
        </div>
      )}
      {reservations && reservations.length > 0 && (
        <div className="col-sm-6">
          {reservations.map((r, k) => (
            <Reservation
              key={r.id}
              className={current.id && k === 0 && "current"}
            >
              <h5>
                {r.start} <i className="bi bi-arrow-right"></i> {r.end}
              </h5>
              <p className="d-flex mt-2 mb-0">
                <span>
                  <i className="bi bi-person"></i> {r.owner}
                </span>
                <span className="ms-3">
                  <i className="bi bi-people"></i> {r.participants} participants
                </span>
                <span className="ms-3">
                  <i className="bi bi-clock"></i>&nbsp;
                  <span
                    dangerouslySetInnerHTML={{
                      __html: getHumainTime(r.duration),
                    }}
                  />
                </span>
              </p>
            </Reservation>
          ))}
        </div>
      )}
    </Body>
  );
}
