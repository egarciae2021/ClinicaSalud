<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            margin-top: 100px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-register {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .terms-label {
            display: block;
            margin-top: 20px;
        }

        #termsModal {
            color: #333;
        }

        #termsModal .modal-body {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Registro</h1>
        <form id="FormRegistro">
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo" name="correo">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="contras" placeholder="Ingrese su contraseña" name="contras">
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input type="number" class="form-control" id="edad" placeholder="Ingrese su edad" name="edad">
            </div>
            <div class="form-group">
                <label for="weight">Peso</label>
                <input type="number" class="form-control" id="peso" placeholder="Ingrese su peso" name="peso">
            </div>
            <div class="form-group">
                <label for="height">Altura</label>
                <input type="number" class="form-control" id="altura" placeholder="Ingrese su altura" name="altura">
            </div>
            <div class="form-group">
                <label for="diseases">Enfermedades que padece o padecía</label>
                <textarea class="form-control" id="Enfermedades" rows="3" placeholder="Ingrese las enfermedades" name="Enfermedades"></textarea>
            </div>
            <p>Indicaciones para el registro:</p>
            <ul>
                <li>Complete todos los campos obligatorios.</li>
                <li>Proporcione información precisa y verídica.</li>
            </ul>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="termsCheck" required>
                <label class="form-check-label terms-label" for="termsCheck">
                    Acepto los <a data-toggle="modal" href="#termsModal">Términos y Condiciones</a>
                </label>
            </div>
            <button type="button" class="btn btn-register" id="registerButton">Registrarme</button>
        </form>
    </div>

    <!-- Terms and Conditions Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Términos y Condiciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>Términos y Condiciones de la Clínica Salud</h1>

                    <h2>1. Aceptación de los términos y condiciones</h2>
                    <p>Al acceder y utilizar el sitio web de la Clínica Salud, aceptas cumplir y estar sujeto a estos términos y condiciones. Si no estás de acuerdo con alguno de los términos aquí establecidos, te pedimos que no utilices nuestro sitio web.</p>

                    <h2>2. Uso del sitio web</h2>
                    <p>El sitio web de la Clínica Salud está diseñado para proporcionar información general sobre nuestros servicios de salud. No debe considerarse como un sustituto del asesoramiento médico profesional. Si tienes alguna preocupación médica, te recomendamos que consultes a un profesional de la salud calificado antes de tomar cualquier decisión basada en la información proporcionada en nuestro sitio web.</p>

                    <h2>3. Privacidad</h2>
                    <p>La Clínica Salud valora y respeta tu privacidad. Nuestra Política de Privacidad describe cómo recopilamos, utilizamos y protegemos la información personal que nos proporcionas. Te recomendamos leer nuestra Política de Privacidad para comprender cómo manejamos tus datos personales.</p>

                    <h2>4. Propiedad intelectual</h2>
                    <p>Todo el contenido y los materiales presentes en el sitio web de la Clínica Salud, incluyendo pero no limitado a textos, gráficos, logotipos, imágenes y software, están protegidos por derechos de autor y otras leyes de propiedad intelectual. No está permitida la reproducción, distribución, modificación o cualquier otro uso no autorizado de dicho contenido sin el consentimiento previo por escrito de la Clínica Salud.</p>

                    <h2>5. Enlaces a terceros</h2>
                    <p>Nuestro sitio web puede contener enlaces a sitios web de terceros. Estos enlaces se proporcionan únicamente como una conveniencia para ti y no implican el respaldo o la aprobación de dichos sitios web por parte de la Clínica Salud. No somos responsables de los contenidos, términos y condiciones o prácticas de privacidad de dichos sitios web.</p>

                    <h2>6. Limitación de responsabilidad</h2>
                    <p>La Clínica Salud no asume ninguna responsabilidad por daños directos, indirectos, incidentales, especiales o consecuentes que surjan del uso o la imposibilidad de utilizar nuestro sitio web, incluso si se nos ha notificado previamente la posibilidad de dichos daños.</p>

                    <h2>7. Modificaciones</h2>
                    <p>Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento. Cualquier cambio será efectivo inmediatamente después de la publicación de los términos y condiciones modificados en nuestro sitio web. Se recomienda revisar periódicamente estos términos y condiciones para estar al tanto de cualquier actualización.</p>

                    <p>Al utilizar el sitio web de la Clínica Salud, confirmas que has leído, entendido y aceptado estos términos y condiciones en su totalidad. Si no estás de acuerdo con alguno de los términos aquí establecidos, te pedimos que no utilices nuestro sitio web.</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>

    <script src="./Common/js/Registro.js"></script>
</body>

</html>