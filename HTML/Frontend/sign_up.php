<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Mercado Pai D'égua - Cadastro</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/logo-1.png">
		
		<!-- CSS -->
		<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">
		<link href="css/step-wizard.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">	
		
		
	</head>

<body>
	
	<div class="sign-inup">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="sign-form">
						<div class="sign-inner">
							<div class="sign-logo" id="logo">
								<a href="index.php"><img src="images/logo.png" alt=""></a>
								<a href="index.php"><img class="logo-inverse" src="images/dark-logo.png" alt=""></a>
							</div>
							<div class="form-dt">
								<div class="form-inpts checout-address-step">
									<form method="POST" action="php/cadastro.php">
										<div class="form-title"><h6>Cadastro</h6></div>
										<div class="form-group pos_rel">
											<input id="full[name]" name="nome" type="text" placeholder="Nome Completo" class="form-control lgn_input" required="">
											<i class="uil uil-user-circle lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="email[address]" name="email" type="email" placeholder="Endereço de Email" class="form-control lgn_input" required="">
											<i class="uil uil-envelope lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="telefone" name="telefone" type="tel" placeholder="Número do Celular" class="form-control lgn_input" data-mask="(00) 00000-0000" required="">
											<i class="uil uil-mobile-android-alt lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="dtnascimento" name="dtnasc" type="tel" placeholder="Data de Nascimento" class="form-control lgn_input" data-mask="00/00/0000" required="">
											<i class="uil uil-user-circle lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="password1" name="senha" type="password" placeholder="Senha" class="form-control lgn_input" required="">
											<i class="uil uil-padlock lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="passwordconfirmation" name="confsenha" type="password" placeholder="Confirme sua Senha" class="form-control lgn_input" required="">
											<i class="uil uil-padlock lgn_icon"></i>
										</div>
										<div class="form-group pos_rel"></div>
										<button class="login-btn hover-btn" type="submit">Cadastrar Agora</button>
									</form>
								</div>
								<p class="error-validation template"></p>
								<div class="signup-link">
									<p>Já possui uma conta? <a href="sign_in.php">Entrar Agora</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="copyright-text text-center mt-3">
						<i class="uil uil-copyright"></i>Copyright 2021 <b>Mercado Pai D'égua</b> . All rights reserved
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Javascripts -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/OwlCarousel/owl.carousel.js"></script>
		<script src="vendor/semantic/semantic.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/product.thumbnail.slider.js"></script>
		<script src="js/offset_overlay.js"></script>
		<script src="js/night-mode.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
		<script src="js/validacaocadastro.js"></script>
		
	
</body>
</html>