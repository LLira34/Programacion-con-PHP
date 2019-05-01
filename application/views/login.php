<div class="container"> <!-- container - start -->
	
	<div class="Icon"><img id="loginImg" src="views/template/images/ensain.png" alt="Smiley face"></div>
	<!--<h5 align="center">Accede con...</h5>-->
	
	<div class="row">
		<div class="card">
			<div class="card-body">
				<form id="login" action="views/validate.php" method="post" enctype="application/x-www-form-urlencode">
					<div>
						<label><b>Usuario</b></label>
						<input class="form-control" type="text" name="user_txt" id="user_txt" autofocus required>
					</div> <br />
					<div>
						<label><b>Contraseña</b></label>
						<input class="form-control" type="password" name="password_txt" id="password_txt" required>
					</div> <br />
					<button id="btnEnter" type="submit" onclick="return validateLogin();" class="btn btn-success">Entrar</button>
				</form>
			</div>
			<div class="card-footer">
				<center>
					<p class="create-account-callout mt-3">
						¿Olvidaste tu contraseña?
						<a data-ga-click="Sign in, switch to sign up" href="#">Recuperala aqui</a>.
					</p>
				</center>
			</div>
		</div>									
	</div>
	
</div>