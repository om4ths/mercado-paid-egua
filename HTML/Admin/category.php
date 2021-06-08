<?php 
		include('php/exibe_categoria.php');
		include('php/conexao.php');

		function limpa_link($valor){
			$valor = trim($valor);
			$valor = str_replace("../", "", $valor);
			
			return $valor;
		   }
	?>



<!DOCTYPE html>
<html lang="en">
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
						<a class="dropdown-item admin-dropdown-item" href="change_password.html">Mudar Senha</a>
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
									<a class="nav-link sub_nav_link" href="category.html">Todas as Categorias</a>
									<a class="nav-link sub_nav_link" href="add_category.html">Adicionar Categoria</a>
								</nav>
                            </div>

							
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
								<div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Produtos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseProducts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="products.html">Todos os Produtos</a>
									<a class="nav-link sub_nav_link" href="add_product.html">Adicionar Produtos</a>
								</nav>
                            </div>
							<a class="nav-link" href="orders.html">
								<div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div>
                                Ordens de compra
							</a>
							<a class="nav-link" href="customers.php">
								<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Usuários
							</a>
							<a class="nav-link" href="offers.html">
								<div class="sb-nav-link-icon"><i class="fas fa-gift"></i></div>
                                Ofertas
							</a>

                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Categories</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_category.html" class="add-btn hover-btn">Add New</a>
							</div>
							<div class="col-lg-3 col-md-4">
								<div class="bulk-section mt-30">
									<div class="input-group">
										<select id="action" name="action" class="form-control">
											<option selected>Bulk Actions</option>
											<option value="1">Active</option>
											<option value="2">Inactive</option>
											<option value="3">Delete</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Apply</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-6">
								<div class="bulk-section mt-30">
									<div class="search-by-name-input">
										<input type="text" class="form-control" placeholder="Search">
									</div>
									<div class="input-group">
										<select id="categeory" name="categeory" class="form-control">
											<option selected>Active</option>
											<option value="1">Inactive</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Search Category</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>All Categories</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px"><input type="checkbox" class="check-all"></th>
														<th style="width:60px">ID</th>
														<th style="width:130px">Image</th>
														<th>Name</th>
														<th>Description</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												<!--CATEGORIAS SERAO EXIBIDAS AQUI-->
												<?php
												if(isset($r_categoria))
														{	
															foreach($r_categoria as $key => $r_cat)
															{	
																
																$caminhoCorretoImg = limpa_link($r_cat['cat_img']);
																
														?>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="11"></td>
														<?php echo "<td>".$r_cat['cat_id']."</td>" ?>
														<td>
															<div class="cate-img">
																<?php echo "<img src=' ".$caminhoCorretoImg." ' alt='erro ao Carregar a imagem'>" ?>
															</div>
														</td>
														<?php echo "<td>".$r_cat['cat_nome']."</td>" ?>
														<?php echo "<td>".$r_cat['cat_desc']."</td>" ?>
														
														<?php
														if($r_cat['cat_ativo'] == 1)
														{ 
														?>
															<td><span class="badge-item badge-status">Ativo</span></td>
														<?php 
														}
														else{
														?>
															<td><span class="badge-item badge-status">Inativo</span></td>

														<?php 
														}
														?>

														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
												<?php }}	?>
													<!--
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="10"></td>
														<td>2</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-2.svg" alt="">
															</div>
														</td>
														<td>Grocery & Staples</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="9"></td>
														<td>3</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-3.svg" alt="">
															</div>
														</td>
														<td>Dairy & Eggs</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="8"></td>
														<td>4</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-4.svg" alt="">
															</div>
														</td>
														<td>Beverages</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="7"></td>
														<td>5</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-5.svg" alt="">
															</div>
														</td>
														<td>Snacks</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="6"></td>
														<td>6</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-6.svg" alt="">
															</div>
														</td>
														<td>Home Care</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>7</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-7.svg" alt="">
															</div>
														</td>
														<td>Noodles & Sauces</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="4"></td>
														<td>8</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-8.svg" alt="">
															</div>
														</td>
														<td>Personal Care</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="3"></td>
														<td>9</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-9.svg" alt="">
															</div>
														</td>
														<td>Pet Care</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="2"></td>
														<td>10</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-10.svg" alt="">
															</div>
														</td>
														<td>Meat & Seafood</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="1"></td>
														<td>11</td>
														<td>
															<div class="cate-img">
																<img src="images/category/icon-11.svg" alt="">
															</div>
														</td>
														<td>Electronics</td>
														<td></td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													-->
													<!--FIM EXIBIR CATEGORIAS-->
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