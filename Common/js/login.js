
$(document).ready(function() {

  $("#Logear").click(function(event) {
    event.preventDefault(); // Prevenir el envío tradicional del formulario
    
    var  usu = document.getElementById('correo').value
    var pass =  document.getElementById('contras').value
    
    const url = 'http://38.25.76.156:2000/rest/src/Login.php?usu=' + (usu) + '&pass=' + (pass);

    // exitoRegistro()
  
     // Enviar los datos mediante fetch
     fetch(url)
      .then(response => {
        if (response.ok) {
          // El formulario se envió correctamente
          alert('¡Login exitoso!');
          LoginExitoso();
         } else {
          console.log('Hubo un error al enviar el formulario. Por favor, intenta nuevamente.');
        }
      })
      .catch(error => {
        // Error de red u otro error
        console.log('Hubo un error al enviar el formulario. Por favor, verifica tu conexión de red e intenta nuevamente.');
      });
  
});
});


function LoginExitoso(){
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
        window.location.href = 'Index.php'; // Reemplaza 'https://www.example.com' con la URL a la que deseas redirigir
      });
}