const btnMenu = document.getElementById('btn-menu');
const menu = document.getElementById('menu');

btnMenu.addEventListener('click', function() {
    menu.classList.toggle('mostrar');
});

const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#aviso-contacto");

function revisarContacto(event) {
  event.preventDefault();

  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#email").value;

  if (nombre === "") {
    avisoContacto.textContent = "Falta tu nombre, caserito.";
    
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
    avisoContacto.classList.remove("oculto"); 
    
  } else if (correo.includes("@") === false) {
    avisoContacto.textContent = "Ese correo no parece válido: le falta el @.";
    
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
    avisoContacto.classList.remove("oculto");
    
  } else {
    avisoContacto.textContent = "Mensaje enviado, gracias por contactarnos te responderemos lo mas antes posible.";
    
    avisoContacto.classList.add("exito");
    avisoContacto.classList.remove("error");
    avisoContacto.classList.remove("oculto");
  }
}

formularioContacto.addEventListener("submit", revisarContacto);