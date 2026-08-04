const btnEnviar = document.getElementById('btn-enviar');
const respuesta = document.getElementById('respuesta');

btnEnviar.addEventListener('click', function () {
    respuesta.classList.remove('oculto');
    respuesta.textContent = 'gracias por tu solicitud samuel yujra nina';
});