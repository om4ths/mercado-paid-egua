<?php 
include('php/verificar_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
		include('php/dados_cliente.php');
		include('php/dados_endereco.php');

	?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
	<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/modalfoto.css" rel="stylesheet">

>

	<!-- Vendor Stylesheets -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">



</head>
<body>

    



    <div class="dashboard-group">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="user-dt">
                        	<div class="user-img">
											<?php 
											if(isset($resultado['foto'])){
												echo "<img src=' ".$resultado['foto']." ' alt=''>";									
											}else{
												echo "<img src='images/avatar/img-5.jpg' alt=''>";
											};								 								
											?>

											<div class="img-add">
												<input type="checkbox" id="click">
												<label for="click" class="click-me-modal">
													<i class="uil uil-camera-plus"></i>
												</label>
												<div class="content-modal"> 
													<div class="header-modal">
														<h2>Selecione a sua foto</h2>
														<label for="click" class="fas fa-times"></label>
													</div>
													<label for="click" class="fas fa-check-modal"></label>
													<label for="click" class="close-btn"></label>

															<button id="select-image" class="btn-modal hover-btn"> 
															<input type="file" id="photo-file" name="imagem" onchange="previewImagem()">
														Carregar Foto
										</button>	
												

													<img id="photo-preview" draggable="false"
																style=
																"border-radius: 0; z-index:1;    
																width:93%;
																height:auto; 
																border-radius: 0px !important;
																border:0;
																margin-top:-436px;">
													
													<div id="selection-tool" > 
														
													
													</div>
													<div class="footer-modal">


													</div>
												
												</div> 
											</div> 
										</div>
										
							<h4><?php echo$resultado['nome']?></h4>
							<p><?php echo$resultado['telefone']?><a href="#"><i class="uil uil-edit"></i></a></p>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>       

    <script src="js/imagem-perfil.js"></script>
    <script src="js/deleteconfirm.js"></script>


    <!-- Javascripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		function previewImage(){
			var imagem = document.querySelector('input[name=imagem]').files[0];
			var preview = document.querySelector('img');

			var reader = new FileReader();

			reader.onloadend = function(){ 
				preview.src = reader.result;
			}
			if(imagme){
				reader.readAsDataURL(imagem);
			}
			else{
				preview.src = "";
			}
		}

	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
		
	<script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/scripts.js"></script>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
		<script src="js/night-mode.js"></script>
		<script src="js/recortar-foto.js"></script>

		

</body>
</html>