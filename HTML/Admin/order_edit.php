<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Mercado Pai D'égua Admin</title>
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
                        <h2 class="mt-30 page-title">Ordens</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Painel</a></li>
                            <li class="breadcrumb-item active">Editar Ordem</li>
                        </ol>
                        <div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h2 class="title1458">Fatura</h2>
										<span class="order-id">Ordem #ORDR-123456</span> 
									</div>
									<div class="invoice-content">
										<div class="row">
											<div class="col-lg-6 col-sm-6">
												<div class="ordr-date">
													<b>Data da Ordem:</b> 29 May 2020
												</div>
											</div>
											<div class="col-lg-6 col-sm-6">
												<div class="ordr-date right-text">
													<b>Order Date :</b><br>
													#0000, St No. 8,<br>
													Shahid Karnail Singh Nagar,<br>
													MBD Mall,<br>
													Frozpur road,<br>
													Ludhiana,<br>
													141001<br>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="card card-static-2 mb-30 mt-30">
													<div class="card-title-2">
														<h4>Ordens Recentes</h4>
													</div>
													<div class="card-body-table">
														<div class="table-responsive">
															<table class="table ucp-table table-hover">
																<thead>
																	<tr>
																		<th style="width:130px">#</th>
																		<th>Item</th>
																		<th style="width:150px" class="text-center">Preços</th>
																		<th style="width:150px" class="text-center">Qtd</th>
																		<th style="width:100px" class="text-center">Total</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>1</td>
																		<td>
																			<a href="#" target="_blank">Product Title Here</a>
																		</td>
																		<td class="text-center">$15</td>
																		<td class="text-center">1</td>
																		<td class="text-center">$15</td>
																	</tr>
																	<tr>
																		<td>2</td>
																		<td>
																			<a href="#" target="_blank">Product Title Here</a>
																		</td>
																		<td class="text-center">$12</td>
																		<td class="text-center">1</td>
																		<td class="text-center">$12</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-7"></div>
											<div class="col-lg-5">
												<div class="order-total-dt">
													<div class="order-total-left-text">
														Sub Total
													</div>
													<div class="order-total-right-text">
														$27
													</div>
												</div>
												<div class="order-total-dt">
													<div class="order-total-left-text">
														Taxas de Entrega
													</div>
													<div class="order-total-right-text">
														$0
													</div>
												</div>
												<div class="order-total-dt">
													<div class="order-total-left-text fsz-18">
														Total
													</div>
													<div class="order-total-right-text fsz-18">
														$27
													</div>
												</div>
											</div>
											<div class="col-lg-7"></div>
											<div class="col-lg-5">
												<div class="select-status">
													<label for="status">Status*</label>
													<div class="input-group">
														<select id="status" name="status" class="custom-select">
															<option selected>Pendente</option>
															<option value="1">Cancelada</option>
															<option value="2">Processada</option>
															<option value="3">Completeda</option>
														</select>
														<div class="input-group-append">
															<button class="status-btn hover-btn" type="submit">Enviar</button>
														</div>
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
                            <div class="text-muted-1">© 2021 <b>Mercado Pai D'égua</b><a href="#"></a></div>
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