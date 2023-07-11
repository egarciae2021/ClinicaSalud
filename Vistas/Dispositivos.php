<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tabla de Smartwatches</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
</head>
<body>
  <div class="container" >
    <h1>Tabla de Smartwatches</h1>
    <table id="smartwatchesTable" class="table table-striped table-bordered" >
      <thead>
        <tr>
          <th>ID Dispositivo</th>
          <th>Nombre del Modelo</th>
        
          <th>Año de Lanzamiento</th>
          <th>País de Comercialización</th>
        </tr>
      </thead>
    </table>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
  <script>
  $(document).ready(function() {
  $.ajax({
    url: 'smartwatches.json',
    dataType: 'json',
    success: function(data) {
      console.log(data); // Imprime los datos en la consola para verificar
      $('#smartwatchesTable').DataTable({
        data: data,
        columns: [
          { data: 'id_dispositivo' },
          { data: 'nombre_modelo' },
          { data: 'anio_lanzamiento' },
          { data: 'pais_comercializacion' }
        ]
      });
    }
  });
});

  </script>
</body>
</html>
