const formCita = document.querySelector("#form-cita");
const avisoCita = document.querySelector("#aviso-cita");

function revisarCita(event) {
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "" || correo === "") {
    event.preventDefault(); 
    avisoCita.textContent = "Completa tu nombre y tu correo para reservar la cita.";
    avisoCita.classList.add("error");
    avisoCita.classList.remove("exito");
    
  } else if (correo.includes("@") === false) {
    event.preventDefault(); 
    avisoCita.textContent = "Ese correo esta mal escrito: le falta el arroba.";
    avisoCita.classList.add("error");
    avisoCita.classList.remove("exito");
    
  } else {
    avisoCita.textContent = "Cita reservada - te atiende Samuel David Yujra Nina";
    avisoCita.classList.add("exito");
    avisoCita.classList.remove("error");
  }
}

formCita.addEventListener("submit", revisarCita);