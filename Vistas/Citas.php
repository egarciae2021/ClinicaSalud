<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css' rel='stylesheet' />
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/es.js'></script> <!-- Archivo de idioma en español -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js'></script>
<script>
	$(document).ready(function() {

        fetch('https://38.25.76.156:2000/rest/src/citas.php')
                .then(response => response.json())
                .then(data => {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
			defaultDate: '2023-07-11',
				locale: 'es', // Configurar el idioma en español
				navLinks: true,
				editable: true,
				eventLimit: true,
				eventClick: function(calEvent, jsEvent, view) {
					$('#eventModal .modal-title').text(calEvent.title);
					$('#eventModal .modal-body').html('<p>Inicio: ' + calEvent.start.format('YYYY-MM-DD HH:mm:ss') + '</p><p>Fin: ' + (calEvent.end ? calEvent.end.format('YYYY-MM-DD HH:mm:ss') : '') + '</p>');
					$('#eventModal').modal('show'); // Abre el modal
				},
				events: data
			});
        })
		});
	</script>
	<style>
		body {
			margin: 40px 10px;
			padding: 0;
			font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
			font-size: 14px;
		}
		#calendar {
			max-width: 900px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div id='calendar'></div>
	<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="eventModalLabel"></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
				</div>
				<div class="modal-body">
				</div>
			</div>
		</div>
	</div>
</body>
</html>
