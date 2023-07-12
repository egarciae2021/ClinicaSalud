<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Recordatorios de Medicamentos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Recordatorios de Medicamentos</h1> <br>

    <button class="btn btn-success" data-toggle="modal" data-target="#reminderModal">Agregar Recordatorio</button>

    <table class="table table-bordered" style="margin-top:20px">
      <thead>
        <tr>
          <th>Medicamento</th>
          <th>Dosis</th>
          <th>Días</th>
          <th>Enviar SMS</th>
          <th>Enviar Correo</th>
        </tr>
      </thead>
      <tbody id="body_table"> 
      </tbody>
    </table>
  </div>

  <!-- Reminder Modal -->
  <div class="modal fade" id="reminderModal" tabindex="-1" role="dialog" aria-labelledby="reminderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reminderModalLabel">Agregar Recordatorio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="datepicker">Medicamento</label>
              <input type="text" class="form-control" id="medicamento" placeholder="Ingresa un medicamento" name="medicamento">
            </div>
            <div class="form-group">
              <label for="timepicker">Dosis</label>
              <input type="text" class="form-control" id="dosis" placeholder="Ingresa la dosis" name="dosis">
            </div>
            <div class="form-group">
              <label for="medication">Dias</label>
              <input type="text" class="form-control" id="dia" placeholder="Ingresa los dias" name="dia">
            </div> 
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="GuardarMedicamento">Guardar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>




  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="../Common/js/medicamento.js" ></script>
  <script>
    $( function() {
      $( "#datepicker" ).datepicker();


    } );
  </script>
</body>
</html>
