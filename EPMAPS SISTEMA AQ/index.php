<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login |Empresa Publica Metropolitana de Agua Potable y Saneamiento </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo2.PNG">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo.jpg" width="200" height="80" alt="Klorofil Logo"></div>
								<p class="lead">Ingrese a su cuenta</p>
							</div>
								<form class="form-signin" id="login" method="POST" action="Controlador/login.php">

								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" name="email" id="signin-email" placeholder="Correo">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">contraseña</label>
									<input type="password" name="contraseña" class="form-control" id="signin-password"  placeholder="Contraseña">
								</div>
								 <div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Recuérdame</span>
									</label>
								</div> 

								<button type="submit" class="btn btn-primary btn-lg btn-block">INGRESAR</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Olvidaste tu contraseña?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="clearfix"><img src="assets/img/lec.jpg" width="510" height="420" ></h1>
							<p></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
