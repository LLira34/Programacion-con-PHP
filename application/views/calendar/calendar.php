<header class="page-header">
	<div class="pull-right form-inline">
		<div class="btn-group">
			<button class="btn btn-primary" data-calendar-nav="prev">Anterior</button>
			<button class="btn btn-default" data-calendar-nav="today">Hoy</button>
			<button class="btn btn-primary" data-calendar-nav="next">Siguiente</button>
		</div>

		<div class="btn-group">
			<button class="btn btn-warning" data-calendar-view="year">Año</button>
			<button class="btn btn-warning active" data-calendar-view="month">Mes</button>
			<button class="btn btn-warning" data-calendar-view="week">Semana</button>
			<button class="btn btn-warning" data-calendar-view="day">Día</button>
		</div>
		
		<div class="btn-group">
			<button class="btn btn-success" data-toggle='modal' data-target='#add_quote'>Añadir cita</button>
		</div>
	</div>
	<h3></h3>
</header>

	<?php if (isset($_GET["save"]) AND ($_GET["save"]=="ok")): ?>
			<div class="alert alert-success alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

				<p><span class="glyphicon glyphicon-info-sign"></span> El evento ha sido creado con éxito.</p>
			</div>
	<?php endif; ?>

	<?php if (isset($_GET["delete"]) && ($_GET["delete"]=="ok")): ?>
			<div class="alert alert-success alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

				<p><span class="glyphicon glyphicon-info-sign"></span> El evento ha sido eliminado con éxito.</p>
			</div>
	<?php endif; ?>

	<!-- Calendar -->
	<div class="row"> 
		<div id="calendar"></div> 
	</div> <br />

	<div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title">Evento</h3>
				</div>
				<div class="modal-body" style="height: 480px"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- // *** FORM SAVE CITA *** /// -->
	<div class="modal fade" id="add_quote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Agregar cita</h4>
				</div>
				<div class="modal-body">
					<form action="index.php?action=save" method="post">
						<div class="form-group">
							<label for="start">Fecha de inicio</label>
							<div class="input-group date" id="datetimepicker1">
								<input type="text" name="start" class="form-control" readonly />
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>

						<div class="form-group">
							<label for="end">Fecha de finalización</label>
							<div class="input-group date" id="datetimepicker2">
								<input type="text" name="end" class="form-control" readonly />
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>

						<div class="form-group">
							<label for="class">Area</label>
							<select required class="form-control" name="class">
								<option value="">Eliga una opción...</option>
								<option value="event-info">HIDROTERAPIA</option>
								<option value="event-success">MECANOTERAPIA</option>
								<option value="event-important">ELECTROTERAPIA</option>
								<option value="event-warning">ELECTRO / MECANO</option>
								<option value="event-special">VALORACIÓN</option>
								<option value="event-secondary">REINGRESO</option>
							</select>
						</div>
						
						<div class="form-group">	
							<label for="title">Expediente ID</label>
							<input type="text" name="title" id="title" class="form-control" placeholder="ESCRIBE NUMERO DE EXPEDIENTE" 
								autocomplete="off" required>
						</div>
						
						<div class="form-group">
							<label for="body">Nombre Completo</label>
							<input type="text" name="body" id="body" class="form-control" placeholder="Nombre completo" readonly>
						</div>
						
						<div class="form-group selector-therapist">
							<label for="id_terapeuta">Terapeuta</label>
							<select required class="form-control" name="id_terapeuta"></select>
						</div>
				</div>
				<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary"></span> Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>