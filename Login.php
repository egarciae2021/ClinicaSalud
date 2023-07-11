<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Rizvi">
        <meta name="keyword" content="Php, Hospital, Clinic, Management, Software, Php, CodeIgniter, Hms, Accounting">
        <link rel="shortcut icon" href="uploads/favicon.png">

        <title>Login -</title>

        <!-- Bootstrap core CSS -->
        <link href="common/css/bootstrap.min.css" rel="stylesheet">
        <link href="common/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="common/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="common/css/style.css" rel="stylesheet">
        <link href="common/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-body">

        <div class="container">

            <style>


                form{

                    padding: 0px;
                    border: none;


                }


            </style>

            <form class="form-signin">
                 <h2 class="login form-signin-heading">Clinica Salud Total<br/><br/><img alt="" src="uploads/favicon.png"></h2>
                <div id="infoMessage"> </div>
                <div class="login-wrap">
                    <input type="text" class="form-control" name="correo" placeholder="Correo" autofocus id="correo">
                    <input type="password" class="form-control"  name="contras" placeholder="Contraseña" id="contras">
 
                   <p><a data-toggle="modal" href="#myModal"> ¿Olvidaste tu contraseña?</a></p>
                
                    
                    
                    <button class="btn btn-lg btn-login btn-block" type="submit" id="Logear">Ingresar</button>
  <style>
                        table, th, td {
                            border: 1px solid #f1f2f7;
                            border-collapse: collapse;
                        }
                        th, td {
                            padding: 5px;
                            text-align: left;
                            font-size:12px;
                        }
                        td,th,h4{
                            color:#aaa;
                            
                        }
                    </style>
          


                </div>



            </form>

        </div>



        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="index.php">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">¿Olvidaste tu contraseña?</h4>
                        </div>

                        <div class="modal-body">
                            <p>Ingresa tu correo para resetear tu contraseña.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <input class="btn detailsbutton" type="submit" name="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

 <!-- Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- SweetAlert JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="common/js/jquery.js"></script>
        <script src="common/js/bootstrap.min.js"></script>
        <script src="common/js/Login.js" ></script>

    </body>
</html>