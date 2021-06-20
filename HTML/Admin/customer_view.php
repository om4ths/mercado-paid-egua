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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Mercado Pai D'égua admin</title>
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/admin-style.css" rel="stylesheet">
	
	<!-- Vendor Stylesheets -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

	<!-- Stylesheets endereço -->
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="/mercado-paid-egua/HTML/Frontend/css/style.css" rel="stylesheet">
	<link href="/mercado-paid-egua/HTML/Frontend/css/responsive.css" rel="stylesheet">
	<link href="/mercado-paid-egua/HTML/Frontend/css/night-mode.css" rel="stylesheet">
	<link href="/mercado-paid-egua/HTML/Frontend/css/step-wizard.css" rel="stylesheet">
	
	<!-- endereço #2 Stylesheets -->
	<link href="/mercado-paid-egua/HTML/Frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="/mercado-paid-egua/HTML/Frontend/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="/mercado-paid-egua/HTML/Frontend/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="/mercado-paid-egua/HTML/Frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/mercado-paid-egua/HTML/Frontend/vendor/semantic/semantic.min.css">
	
</head>



    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
            <a class="navbar-brand logo-brand" href="index.php">Mercado Pai D'égua</a>
			<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/index.php" class="frnt-link"><i class="fas fa-external-link-alt"></i>Inicio</a>
            <ul class="navbar-nav ml-auto mr-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item admin-dropdown-item" href="php/logout.php">Sair</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
				<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link active" href="index.php">
								<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Painel de Controle
							</a>
                             		
								
							
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
								<div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Categorias
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseCategories" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="category.php">Todas as Categorias</a>
									<a class="nav-link sub_nav_link" href="add_category.php">Adicionar Categoria</a>
								</nav>
                            </div>

							
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
								<div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Produtos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseProducts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="products.php">Todos os Produtos</a>
									<a class="nav-link sub_nav_link" href="add_product.php">Adicionar Produtos</a>
								</nav>
                            </div>
							<a class="nav-link" href="customers.php">
								<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Usuários
							</a>
							<a class="nav-link" href="mensagens.php">
								<div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
								Fale Conosco
							</a>
							
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Usuários</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Painel</a></li>
                            <li class="breadcrumb-item"><a href="customers.php">Usuários</a></li>
                            <li class="breadcrumb-item active">Visualizar Usuário</li>
                        </ol>
                        <div class="row">
							
							<div class="col-lg-5 col-md-6">
								<div class="card card-static-2 mb-30">
									<div class="card-body-table">
										<div class="shopowner-content-left text-center pd-20">
											<div class="customer_img">												
												<?php 
													if(isset($r_view_cli['foto'])){
														echo "<img src='../Frontend/".$r_view_cli['foto']." ' alt=''>";									
													}else{
														echo "<img src='images/avatar/img-5.jpg' alt=''>";
													};								 								
													?>	
											</div>
											<div class="shopowner-dt-left mt-4">
												<h4><?php echo $r_view_cli['nome'];  ?></h4>
												<span>Cliente</span>												
											</div>
										
											<div class="shopowner-dts">
												<div class="shopowner-dt-list">
													<span class="left-dt">Nome</span>
													<span class="right-dt"><?php echo $r_view_cli['nome'];  ?></span>
												</div>												
												<div class="shopowner-dt-list">
													<span class="left-dt">Email</span>
													<span class="right-dt"><?php echo $r_view_cli['email'];  ?></span>
												</div>
												<div class="shopowner-dt-list">
													<span class="left-dt">Telefone</span>
													<span class="right-dt"><?php echo $r_view_cli['telefone'];  ?></span>
												</div>
												<div class="shopowner-dt-list">
													<span class="left-dt">Data de Nascimento</span>
													<span class="right-dt"><?php  $date =$r_view_cli['data_nascimento']; echo $date= implode("/",array_reverse(explode("-",$date))); ?></span>
												</div>												
											</div>
										</div>

									</div>


									
								</div>
							</div>

							<div class="col-lg-9 col-md-8">
								<div class="dashboard-right-endereco">							
										<div class="col-md-12">
										</div>
										<div class="col-lg-12-end col-md-12">
											<div class="pdpt-bg">
		
												<div class="pdpt-title">
													<h4>Endereços</h4>
												</div>
												<div class="address-body">	
													<div class="address-item">
														<div class="address-icon1">
															<i class="uil uil-home-alt"></i>
														</div>
														<div class="address-dt-all">
														<?php 
															
														if(isset($r_end_casa))
														{	
															foreach($r_end_casa as $key => $r_end)
															{
																					
														?>
		 
															<h4><?php echo $r_end['tipo'];?></h4>
															<p><?php echo $r_end['bairro']?></p>
															<p><?php echo $r_end['rua'], ', ',$r_end['numero'];?></p>
															<p><?php echo $r_end['complemento']?></p>
															<p><?php echo $r_end['cidade'] , ', ',$r_end['cep'];?></p>
															<ul class="action-btns">
																<li><a href="#" class="action-btn"><i class="uil uil-edit"></i></a></li>
																<li><a href="#" class="action-btn"><i class="uil uil-trash-alt"></i></a></li>
															</ul>
														<?php
															};
														};
														?> 
														</div>
													</div>
		
													<div class="address-item">
														<div class="address-icon1">
															<i class="uil uil-home-alt"></i>
														</div>
														<div class="address-dt-all">
														<?php 
															
															if(isset($r_end_trab))
															{	
																foreach($r_end_trab as $key => $r_end)
																{
																						
															?>
		
																<h4><?php echo $r_end['tipo'];?></h4>
																<p><?php echo $r_end['bairro']?></p>
																<p><?php echo $r_end['rua'], ', ',$r_end['numero'];?></p>
																<p><?php echo $r_end['complemento']?></p>
																<p><?php echo $r_end['cidade'] , ', ',$r_end['cep'];?></p>																<ul class="action-btns">
																	<li><a href="#" class="action-btn"><i class="uil uil-edit"></i></a></li>
																	<li><a href="#" class="action-btn"><i class="uil uil-trash-alt"></i></a></li>
																</ul>
															<?php
																};
															};
														?> 
														</div>
													</div>
													<div class="address-item">
														<div class="address-icon1">
															<i class="uil uil-home-alt"></i>
														</div>
														<div class="address-dt-all">
														<?php 
															
															if(isset($r_end_out))
															{	
																foreach($r_end_out as $key => $r_end)
																{
																						
															?>
		
																<h4><?php echo $r_end['tipo'];?></h4>
																<p><?php echo $r_end['bairro']?></p>
																<p><?php echo $r_end['rua'], ', ',$r_end['numero'];?></p>
																<p><?php echo $r_end['complemento']?></p>
																<p><?php echo $r_end['cidade'] , ', ',$r_end['cep'];?></p>																<ul class="action-btns">
																	<li><a href="#" class="action-btn"><i class="uil uil-edit"></i></a></li>
																	<li><a href="#" class="action-btn"><i class="uil uil-trash-alt"></i></a></li>
																</ul>
															<?php
																};
															};
														?> 
														</div>							
													</div>
												</div>
											</div>
										</div>
									
								</div>
							</div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-footer mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted-1">© 2021 <b>Mercado Pai D'égua</b>'<a href="#"></a></div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
		
		<!-- Javascripts -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
		
    </body>
</html>
