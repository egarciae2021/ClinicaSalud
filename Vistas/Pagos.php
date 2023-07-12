<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Facturas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Facturas</h1>
    <table class="table table-bordered" style="margin-top:20px">
      <thead>
        <tr>
          <th>Factura</th>
          <th>Fecha</th>
          <th>Cliente</th>
          <th>Total</th>
          <th>Estado</th>
          <th>Pagar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>2023-01-01</td>
          <td>Cliente A</td>
          <td>$100.00</td>
          <td>Pendiente</td>
          <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Pagar</button></td>
        </tr>
        <tr>
          <td>002</td>
          <td>2023-02-01</td>
          <td>Cliente B</td>
          <td>$150.00</td>
          <td>Pendiente</td>
          <!-- <td><button class="btn btn-primary">Pagar</button></td> -->
          <td>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Pagar</button>
          </td>

        </tr>
        <tr>
          <td>003</td>
          <td>2023-03-01</td>
          <td>Cliente C</td>
          <td>$200.00</td>
          <td>Pagada</td>
          <td><button class="btn btn-secondary" disabled>Pagada</button></td>
        </tr>
      </tbody>
    </table>
  </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pasarela </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="../pasarela/index.html" width="100%" height="400px"></iframe>
      </div>
    </div>
  </div>
</div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
