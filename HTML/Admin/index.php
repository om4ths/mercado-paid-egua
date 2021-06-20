<?php
include('php/verificar_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Mercado Pai D'égua</title>
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
                        <h2 class="mt-30 page-title">Painel de Controle</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item active">Painel</li>
                        </ol>
                        
                            

						<div class="row justify-content-between">
							<div class="col-lg-3 col-md-4">
								<div class="bulk-section mb-30">
									<div class="input-group">
										<select id="action" name="action" class="form-control">
											<option selected>Modificar em Massa</option>
											<option value="1">Pendente</option>
											<option value="2">Cancelar</option>
											<option value="3">Processar</option>
											<option value="4">Finalizar</option>
											<option value="5">Deletar</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Aplicar</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-6">
								<div class="bulk-section mb-30">
									<div class="search-by-name-input">
										<input type="text" class="form-control" placeholder="Pesquisar">
									</div>
									<div class="input-group">
										<select id="categeory" name="categeory" class="form-control">
											<option value="1">Pendente</option>
											<option value="2">Cancelada</option>
											<option value="3">Processada</option>
											<option value="4">Finalizada</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Pesquisar Ordem</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Todas as Ordens</h4> 
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px"><input type="checkbox" class="check-all"></th>
														<th style="width:130px">Order ID</th>
														<th>Item</th>
														<th style="width:200px">Data</th>
														<th style="width:300px">Endereço</th>
														<th style="width:130px">Status</th>
														<th style="width:130px">Total</th>
														<th style="width:100px">Ação</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="4"></td>
														<td>ORDER12345</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">15/06/2020</span>
															<span class="delivery-time">4:00PM - 6.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														<td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$90</td>
														<td class="action-btns">
															<a href="order_view.php" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.php" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="3"></td>
														<td>ORDER12346</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">13/06/2020</span>
															<span class="delivery-time">2:00PM - 4.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														 <td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$105</td>
														<td class="action-btns">
															<a href="order_view.php" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.php" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="2"></td>
														<td>ORDER12347</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">13/6/2020</span>
															<span class="delivery-time">5:00PM - 7.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														<td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$60</td>
														<td class="action-btns">
															<a href="order_view.php" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.php" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="1"></td>
														<td>ORDER12348</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">12/06/2020</span>
															<span class="delivery-time">01:00PM - 3.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														<td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$120</td>
														<td class="action-btns">
															<a href="order_view.php" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.php" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
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
                            <div class="text-muted-1">© 2021 <b>Mercado Pai D'égua</b> <a href="#"></a></div>
                            
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
