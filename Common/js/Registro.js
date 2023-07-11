
$(document).ready(function() {
    const form = document.getElementById('FormRegistro');

  $("#registerButton").click(function(event) {
    event.preventDefault(); // Prevenir el envío tradicional del formulario
    const formData = [{
        correo: document.getElementById('correo').value,
        contras: document.getElementById('contras').value,
        edad: document.getElementById('edad').value,
        peso: document.getElementById('peso').value,
        altura: document.getElementById('altura').value,
        Enfermedades: document.getElementById('Enfermedades').value
      }];

    // exitoRegistro()
  
     // Enviar los datos mediante fetch
     fetch('http://38.25.76.156:2000/rest/src/Login.php', {
        method: 'POST',
        body: JSON.stringify(formData)

      })
      .then(response => {
        if (response.ok) {
          // El formulario se envió correctamente
          alert('¡El formulario se envió correctamente!');
          exitoRegistro();
          form.reset(); // Reiniciar el formulario si es necesario
        } else {
          // Hubo un error al enviar el formulario
          alert('Hubo un error al enviar el formulario. Por favor, intenta nuevamente.');
        }
      })
      .catch(error => {
        // Error de red u otro error
        alert('Hubo un error al enviar el formulario. Por favor, verifica tu conexión de red e intenta nuevamente.');
      });
  
});
});


function exitoRegistro(){
    Swal.fire({
        title: 'Registro exitoso',
        html: '<i class="fas fa-check-circle" style="color: green; font-size: 48px;"></i>',
        showCancelButton: false,
        showConfirmButton: false,
        timer: 2000,
        didOpen: () => {
          const icon = Swal.getPopup().querySelector('.fas');
          icon.classList.add('animate__animated', 'animate__rubberBand');
        },
        willClose: () => {
          const icon = Swal.getPopup().querySelector('.fas');
          icon.classList.remove('animate__animated', 'animate__rubberBand');
        }
      }).then(() => {
        window.location.href = 'Login.php'; // Reemplaza 'https://www.example.com' con la URL a la que deseas redirigir
      });
}