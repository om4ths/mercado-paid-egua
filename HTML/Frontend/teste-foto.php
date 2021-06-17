<?php 
include('php/verificar_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
		include('php/dados_cliente.php');
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

    
<div id="foto-perfil" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
        
		<div class="modal-dialog category-area" role="document">
            <div class="category-area-inner">
                <div class="modal-header">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
						<i class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="category-model-content modal-content"> 
					<div class="cate-header">
						<h4>Adicionar Endereço</h4>
					</div>
					<div class="add-address-form">
						<div class="checout-address-step">
							<div class="row">
								<div class="col-lg-12">												
									<form class="" method="POST" action="php/endereco.php">
										<!-- Multiple Radios (inline) -->
										<div class="form-group">
											<div class="product-radio">
											
												
												<div class="col-lg-12 col-md-12">
													<div class="form-group mb-0">
														<div class="address-btns">
															<button class="save-btn14 hover-btn">Salvar</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

       

        <img id="photo-preview">



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
								<form method="POST" action="php/img_cliente.php" enctype="multipart/form-data"> 
									<input type="file" name="c_img" id="file">
									<label for="file" data-toggle="modal" data-target="#foto-perfil"><i class="uil uil-camera-plus"></i></label>
									<input type="submit" value="Enviar arquivo" />
									</div>
								</form > 
							</div>
							
							<h4>
								<?php echo$resultado['nome']?>
							</h4>
							<p>
								<?php echo$resultado['telefone']?><a href="#"><i class="uil uil-edit"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>



        


    <script src="js/imagem-perfil.js"></script>


    <!-- Javascripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
		
		<script src="vendor/OwlCarousel/owl.carousel.js"></script>
		<script src="vendor/semantic/semantic.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/product.thumbnail.slider.js"></script>
		<script src="js/offset_overlay.js"></script>
		<script src="js/night-mode.js"></script>
		<script src="js/deleteconfirm.js"></script>

        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




</body>
</html>