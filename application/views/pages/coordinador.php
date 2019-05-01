<?php
	if (isset($_SESSION['user'])) {
		if ($_SESSION['user']['rol'] == 'RECEPCION') {
			header("location: ?controller=user&&action=recepcion");
		}
		else if($_SESSION['user']['rol'] == 'FISIOTERAPEUTA'){
			header("location: ?controller=user&&action=user");
		}
		else if($_SESSION['user']['rol'] == 'ENSAIN'){
			header("location: ?controller=user&&action=ensain");
		}
		else if($_SESSION['user']['rol'] == 'ADMINISTRADOR'){
			header("location: ?controller=user&&action=admon");
		}
		
	}else {
		header("location: ?controller=user&&action=index");
	}
?>

<div class="container"> <!-- Div container -->	

	<div class="jumbotron">
		<div class="container text-center">
			<h1><b>Bienvenido</b> <?php echo $_SESSION['user']['nomUsu']; ?></h1>
			<p>Panel de control | 
				<span class="badge badge-info">
					<?php echo $_SESSION['user']['rol']; ?>
				</span>
			</p>
			<a href="https://www.facebook.com/uaq.mx" target="_blank"><img src="views/template/images/facebook.png"></a>
			<a href="https://twitter.com/UAQmx" target="_blank"><img src="views/template/images/twitter.png"></a>
			<a href="https://www.youtube.com/user/UAQmx" target="_blank"><img src="views/template/images/youtube.png"></a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
            <div class="bs-component">
				<div class="card mb-3">
					<h3 class="card-header text-center">Misión</h3>
					<div class="card-body">
						<h5 class="card-title">Universidad Autónoma de Querétaro</h5>
						<h6 class="card-subtitle text-muted">Historia clinica de fisioterapia</h6>
					</div>
					<img style="height: 200px; width: 100%; display: block;" src="views/template/images/mision.png" alt="Card image">
					<div class="card-body">
						<p class="card-text">
							La facultad de medicina debe cumplir con las exigencias de los clientes que ingresan a sus
							instalaciones, con el fin de satisfacer al usuario con la mejor calidad posible.
							Por lo cual, la Universidad Autónoma de Querétaro plantea la siguiente misión:
						</p>
						<p>
							Ofrecer servicios de calidad y calidez a la sociedad en los tres niveles de atención en
							salud, de forma óptima de acuerdo con las necesidades y expectativas de cada persona

							y así contribuir a mejorar la calidad de vida de los pacientes con un enfoque bio-psico-
							social, mediante personal calificado con equipo y tecnología de punta que coadyuven

							junto con el equipo multidisciplinario alcanzar los objetivos (Universidad Autónoma de
							Querétaro [UAQ], 2018).
						</p>
					</div>
				</div>
            </div>
		</div>

		<div class="col-lg-6">
            <div class="bs-component">
				<div class="card mb-3">
					<h3 class="card-header text-center">Visión</h3>
					<div class="card-body">
						<h5 class="card-title">Universidad Autónoma de Querétaro</h5>
						<h6 class="card-subtitle text-muted">Historia clinica de fisioterapia</h6>
					</div>
					<img style="height: 200px; width: 100%; display: block;" src="views/template/images/vision.png" alt="Card image">
					<div class="card-body">
						<p class="card-text">
							La facultad de enfermería tiene como propósito mejorar todos los servicios. Al mismo
							tiempo aumentar las capacidades de optimización que se tienen planteadas.
							Por su parte, Universidad Autónoma de Querétaro ha definido a futuro lo siguiente:
						</p>
						<p>
							El Sistema Universitario de Atención en Fisioterapia se proyecta en el 2018 como un
							sistema líder a nivel nacional por la capacidad de gestión con una estructura
							administrativa y financiera sólida, que garantice una óptima intervención de calidad a
							nuestros pacientes. Con base en los principios de responsabilidad social, empatía, ética
							y honestidad, apegados al modelo de intervención en fisioterapia. Respaldada por la
							actualización continua, buscando la excelencia (Universidad Autónoma de Querétaro
							[UAQ], 2018).
						</p>
					</div>
				</div>
            </div>
		</div>
		
		<div class="col-lg-6">
            <div class="bs-component">
				<div class="card mb-3">
					<h3 class="card-header text-center">Valores</h3>
					<div class="card-body">
						<h5 class="card-title">Universidad Autónoma de Querétaro</h5>
						<h6 class="card-subtitle text-muted">Historia clinica de fisioterapia</h6>
					</div>
					<img style="height: 200px; width: 100%; display: block;" src="views/template/images/united.png" alt="Card image">
					<div class="card-body">
						<p class="card-text">
							De acuerdo al logotipo oficial de la Universidad Autónoma de Querétaro, se ejercen
							principalmente dos valores, la verdad y honor.
						</p>
						<p>
							“En 1952 el Dr. Vasconcelos acuñó la frase Educo en la Verdad y en el honor que desde
							entonces es el lema y el símbolo de la Universidad Autónoma de Querétaro” (Universidad
							Autónoma de Querétaro [UAQ], 2018).
						</p>
					</div>
				</div>
            </div>
		</div>
	</div>
	
</div> <!-- End container -->