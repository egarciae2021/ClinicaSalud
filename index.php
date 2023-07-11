<?php require_once './Conf/bd.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title>Bienestar Total</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./Common/index.css">

</head>

<body>

  <div class="container text-center" style="margin-left:0px;height:80px;position: relative;width:100%;">
    <div id="titulo" class="row">
      <div id="logo">
        <img src="https://dragon.cloud/pqxgSznC_BSFWvOeBOw0Hg.png" alt="">
      </div>
    <div class="col align-self-center" ><b style="color:green;">Clinica</b> <b style="color:red;">Salud</b> </div>
    <div id="foto">
    <img src="https://cdn-icons-png.flaticon.com/512/1198/1198293.png" alt="">

      </div>
    
    </div>
  </div>

  <div class="d-flex" id="Content-2">
    <div class="sidebar">
      <div class="text-center mt-3">
        <button id="toggle-sidebar" class="btn btn-toggle-sidebar">
          <span>&#9776;</span>
        </button>
      </div>
      <div id="sidebar-content" style="margin-top:20px">
        <?php
        $result = getOpciones();
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

            $nombre = $row['opciones'];
            $data = explode(',', $nombre);

            foreach ($data as $item) {
              echo '<div class="sidebar-item" data-url="' . explode('/', $item)[1] . '">' . explode('/', $item)[0] . '</div>';
            }
          }
        } else {
          echo 'No se encontraron datos en la tabla perfil.';
        }
        $mysqli->close();
        ?>
      </div>
    </div>
    <div id="content" >
      <iframe src="" frameborder="0" id="frame" width="100%" height="100%"></iframe>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./Common/index.js"></script>

</body>

</html>