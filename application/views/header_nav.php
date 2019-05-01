<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="container">
	
		<a class="navbar-brand" href="#">SUAF</a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="navbar-collapse collapse" id="navbarColor01" style="">
			<ul class="navbar-nav mr-auto">
		<?php if(!isset($_SESSION['user'])) { ?>
				<!-- Inicio de sesion -->
				<li class="nav-item">
					<a class="nav-link" href="?controller=user&&action=index">Iniciar sesión</a>
				</li>
				
		<?php } else { ?>
		<?php 	if($_SESSION['user']['rol'] == 'RECEPCION'){ ?>
					<!-- Recepcion -->
					<li class="nav-item">
						<a class="nav-link" href="?controller=user&&action=recepcion">Principal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=paciente&&action=register">Registro</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=paciente&&action=show">Lista</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="views/calendar/" target="_blank">Agendar cita</a>
					</li>
				
		<?php 	} 
				if($_SESSION['user']['rol'] == 'FISIOTERAPEUTA'){ ?>
					<!-- Fisio -->
					<li class="nav-item">
						<a class="nav-link" href="?controller=user&&action=user">Principal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=diagnostico&&action=register">Registro</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=diagnostico&&action=show">Lista</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=diagnostico&&action=event">Citas</a>
					</li>
		<?php 	}  
				if($_SESSION['user']['rol'] == 'ENSAIN'){ ?>
					<!-- Enfermería -->
					<li class="nav-item">
						<a class="nav-link" href="?controller=user&&action=ensain">Principal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=enfermeria&&action=register">Enfermería</a>
					</li>
		<?php 	} 
				if($_SESSION['user']['rol'] == 'COORDINADOR'){ ?>	
					<!-- Coordinador -->
					<li class="nav-item">
						<a class="nav-link" href="?controller=user&&action=coordinador">Principal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=coordinador&&action=showPacientes">Pacientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=coordinador&&action=showCitas">Citas</a>
					</li>
		<?php 	}  
				if($_SESSION['user']['rol'] == 'ADMINISTRADOR'){ ?>	
					<!-- Administrador -->
					<li class="nav-item">
						<a class="nav-link" href="?controller=user&&action=admon">Principal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Coordinador</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Recepcion</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">ENSAIN</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Fisio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=user&&action=register">Usuarios</a>
					</li>
		<?php 
				}
		?>
			</ul>
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="?controller=user&&action=exit">Salir</a>
				</li>
			</ul>
			
		<?php
			}
		?>
		</div>
	</div>
</nav>