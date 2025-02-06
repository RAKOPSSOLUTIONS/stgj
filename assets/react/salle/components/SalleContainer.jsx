import React, { useState, useMemo } from "react";
import axios from "axios";
import styled from "styled-components";
import moment from "moment";
moment.locale("fr-FR");

import SalleReservations from "./SalleReservations";

const Header = styled.div`
  margin: 0px;
  padding: 15px 5px 20px;
  min-height: 93px;
  background-color: var(--color-primary);
`;
const HeaderTitle = styled.h1`
  color: #fff;
  margin-bottom: 0px;
  font-size: 2.5rem;
`;
const Clock = styled.div`
  color: #fff;
  font-size: 4rem;
  font-weight: 600;
  line-height: 3.5rem;
`;
const FullDate = styled.div`
  color: #fff;
  font-size: 1.5rem;
  font-weight: 600;
  margin-left: 15px;
  line-height: 1.8rem;
`;

export default function SalleContainer() {
  const [salles, setSalles] = useState(window.SALLES);
  const [isAssigning, setAssigning] = useState(false);
  const [currentTime, setCurrentTime] = useState(moment().format("HH:mm"));

  const tabletteUID =
    window.TABLETTE_UID ||
    localStorage.getItem("tablette_uid") ||
    window.RANDOM_UID;

  const salle = useMemo(
    () => salles.find((salle) => salle.tablette_uid === tabletteUID),
    [salles, tabletteUID]
  );

  const handleAssignSalle = (e) => {
    e.preventDefault();
    setAssigning(true);
    const formData = new FormData();
    const salle_id = parseInt(document.getElementById("salle_id").value);
    formData.append("salle_id", salle_id);
    formData.append("tablette_uid", tabletteUID);
    formData.append("email", document.getElementById("email").value);
    formData.append("password", document.getElementById("password").value);
    axios
      .post("/salle/assign/tablette", formData)
      .then((response) => {
        if (response.data.status === "success") {
          const newSalles = salles.map((salle) => {
            if (salle.id === salle_id) {
              salle.tablette_uid = tabletteUID;
            }
            return salle;
          });
          setSalles(newSalles);
          localStorage.setItem("tablette_uid", tabletteUID);
        } else {
          toast("error", response.data.message);
        }
      })
      .catch((error) => toast("error", error.message))
      .then(() => setAssigning(false));
  };

  return (
    <div className="container-fluid p-0">
      <Header className="row">
        <div className="col-sm-6 d-flex align-items-center">
          <HeaderTitle>
            {salle ? salle.name : "Affecter cette tablette à une salle"}
          </HeaderTitle>
        </div>
        <div className="col-sm-6 d-flex justify-content-end align-items-center">
          <Clock>{currentTime}</Clock>
          <FullDate>
            <span className="text-capitalize">{moment().format("dddd")}</span>
            <br />
            {moment().format("Do MMMM YYYY")}
          </FullDate>
        </div>
      </Header>
      {salle ? (
        <SalleReservations
          tabletteUID={tabletteUID}
          currentTime={currentTime}
          setCurrentTime={setCurrentTime}
        />
      ) : (
        <div style={{ margin: "20px auto", width: "100%", maxWidth: "350px" }}>
          <form onSubmit={handleAssignSalle}>
            <div className="mb-3">
              <label htmlFor="tablette_uid" className="form-label">
                Tablette UID
              </label>
              <input
                type="text"
                className="form-control"
                id="tablette_uid"
                value={tabletteUID}
                required
                readOnly
              />
            </div>
            <div className="mb-3">
              <label htmlFor="salle_id" className="form-label">
                Salle
              </label>
              <select
                name="salle_id"
                className="form-control"
                id="salle_id"
                required
              >
                <option></option>
                {salles &&
                  salles.map((s) => (
                    <option key={s.id} value={s.id}>
                      {s.name}
                      {s.tablette_uid && " (Affecté)"}
                    </option>
                  ))}
              </select>
            </div>
            <h3>Se connecter</h3>
            <div className="mb-3">
              <label htmlFor="email" className="form-label">
                Email
              </label>
              <input
                type="email"
                className="form-control"
                id="email"
                required
              />
            </div>
            <div className="mb-3">
              <label htmlFor="password" className="form-label">
                Mot de passe
              </label>
              <input
                type="password"
                className="form-control"
                id="password"
                required
              />
            </div>
            <div className="text-center">
              <button
                type="submit"
                className="btn btn-primary shadow-none rounded-pill px-5"
                disabled={isAssigning}
              >
                {isAssigning ? (
                  <span className="spinner-border spinner-border-sm fs-6"></span>
                ) : (
                  "Affecter"
                )}
              </button>
            </div>
          </form>
        </div>
      )}
    </div>
  );
}
