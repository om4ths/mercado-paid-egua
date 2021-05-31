<?php
include('php/verificar_login.php');
?>
<!DOCTYPE html>
<html lang="en">
	<?php
	include('php/dados_cliente.php');
	?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Gambo Supermarket Admin</title>
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/admin-style.css" rel="stylesheet">
	
	<!-- Vendor Stylesheets -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	
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
                        <a class="dropdown-item admin-dropdown-item" href="edit_profile.html">Editar Perfil</a>
						<a class="dropdown-item admin-dropdown-item" href="change_password.html">Mudar Senha</a>
                        <a class="dropdown-item admin-dropdown-item" href="login.html">Sair</a>
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
                                Categories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseCategories" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="category.html">All Categories</a>
									<a class="nav-link sub_nav_link" href="add_category.html">Add Category</a>
								</nav>
                            </div>

							
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
								<div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseProducts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="products.html">All Products</a>
									<a class="nav-link sub_nav_link" href="add_product.html">Add Product</a>
								</nav>
                            </div>
							<a class="nav-link" href="orders.html">
								<div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div>
                                Orders
							</a>
							<a class="nav-link" href="customers.php">
								<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Customers
							</a>
							<a class="nav-link" href="offers.html">
								<div class="sb-nav-link-icon"><i class="fas fa-gift"></i></div>
                                Offers
							</a>

                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Customers</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Customers</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Todos Usuarios</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>														
														<th style="width:60px">ID</th>			
														<th>Nome</th>
														<th>E-mail</th>
														<th>Telefone</th>	
														<th>Data de Nascimento</th>													
													</tr>
												</thead>
												<tbody>

													<?php 
														
														if(isset($r_end_cli))
														{	
															foreach($r_end_cli as $key => $r_end)
															{																			
														?>		
															<tr>												
																<td><?php echo $r_end['id']?></td>	
																<td><?php echo $r_end['nome']?></td>
																<td><?php echo $r_end['email']?></td>
																<td><?php echo $r_end['telefone']?></td>
																<td><?php echo $r_end['data_nascimento']?></td>
															</tr>																										
														<?php
															};
														};
													?> 													
												</tbody>
											</table>
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
                            <div class="text-muted-1">© 2020 <b>Gambo Supermarket</b>. by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a></div>
                            <div class="footer-links">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/privacy_policy.html">Privacy Policy</a>
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
       
    </body>
</html>
