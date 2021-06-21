<?php 
		include('php/exibe_produtos.php');
		include('php/conexao.php');
		include('../Frontend/php/func.php');
		session_start();
	?>

<!DOCTYPE html>
<html lang="utf-8">
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

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	
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
                        <h2 class="mt-30 page-title">Produtos</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Painel</a></li>
                            <li class="breadcrumb-item active">Produtos</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_product.php" class="add-btn hover-btn">Adicionar Novo</a>
								
							</div>
							
							
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>Todos os produtos</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px">ID</th>
														<th style="width:100px">Imagem</th>
														<th>Nome</th>
														<th>Categoria</th>
														<th>Criado</th>
														<th>Status</th>
														<th>Ação</th>
													</tr>
												</thead>
												<tbody>
												<!--OS PRODUTOS SERAO EXIBIDOS AQUI-->
												<?php
												if(isset($r_produtos))
														{	
															foreach($r_produtos as $key => $r_pro)
															{	
											
														?>

													<tr>
														<?php echo "<td>".$r_pro['pro_id']."</td>" ?>
														<td>
															<div class="cate-img-5">
																<?php echo "<img src=' ".limpa_link($r_pro['pro_img'])." ' alt='erro ao Carregar a imagem'>" ?>
															</div>
														</td>
														<?php echo "<td>".$r_pro['pro_nome']."</td>" ?>
														<?php echo "<td>".$r_pro['cat_nome']."</td>" ?>
														<?php echo "<td>".formataHora($r_pro['pro_data_criado'])."</td>" ?>
														<?php
														if($r_pro['pro_ativo'] == 1)
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

														<?php echo "<a  href='php/delete_pro.php?p_id=".$r_pro['pro_id']."' class='delete-btn' title='Apagar' data-confirm='Deseja realmente apagar o produto?'><i class='fas fa-trash-alt'></i></a>" ?>
															<?php echo "<a href='product_view.php?p_id=".$r_pro['pro_id']."' class='view-shop-btn' title='View'><i class='fas fa-eye'></i></a> "?>
															<?php echo "<a href='view_editar_produtos.php?p_id=".$r_pro['pro_id']."' class='edit-btn' title='Edit'><i class='fas fa-edit'></i></a>" ?>
														</td>
													</tr>

													<?php 
													}}
													?>
													
													<!--FIM DA EXIBIÇÃO DE PRODUTOS-->
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
                            <div class="text-muted-1">© 2021 <b>Mercado Pai D'égua</b>'<a href="#"></a></div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/scripts.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>


        <script src="js/deletar_prod.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		
       
    </body>
</html>
