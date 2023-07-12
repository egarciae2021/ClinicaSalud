$(document).ready(()=>{
  
  async function listadomedicamentos(){
    var text = '';
    fetch('https://38.25.76.156:2000/rest/src/medicamentos.php')
      .then(response =>  
           response.json()
        ).then(
        data => 
        {   for (const key in data) {
                 text += '<tr>' +
                  '<td>'+data[key].medicamento+' </td>' +
                  '<td>'+data[key].dosis+' </td>' +
                  '<td>'+data[key].dias+' </td>' +
                  '<td><button class="btn btn-primary">Enviar SMS</button></td>' +
                  '<td><button class="btn btn-primary">Enviar Correo</button></td>' +
                  '</tr>';
              } 
           document.getElementById("body_table").innerHTML=text
        } 

      ).catch(error => {
        // Error de red u otro error
        alert('Hubo un error al enviar el formulario. Por favor, verifica tu conexión de red e intenta nuevamente.');
      });
 
    }
    

    $("#GuardarMedicamento").click(function(event) {
        const formData = [{
            medicamentos: document.getElementById('medicamento').value,
            dosis: document.getElementById('dosis').value,
            dias: document.getElementById('dia').value
          }];
        fetch('https://38.25.76.156:2000/rest/src/medicamentos.php?',{
            method: 'POST',
            body: JSON.stringify(formData)}) .then(response => {
                if (response.ok) {
                  // El formulario se envió correctamente
                  alert('¡Registro exitoso!'); 
                 } else {
                  console.log('Hubo un error al enviar el formulario. Por favor, intenta nuevamente.');
                }
              })
              .catch(error => {
                // Error de red u otro error
                console.log('Hubo un error al enviar el formulario. Por favor, verifica tu conexión de red e intenta nuevamente.');
              });
    })


    listadomedicamentos()
})