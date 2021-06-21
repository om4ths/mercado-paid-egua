<?php
include('php/verificar_login.php');
include('php/dados_pedidos.php');
?>

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
                            <li class="breadcrumb-item active">Visualizar Ordem</li>
                        </ol>
                        <div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h2 class="title1458">PEDIDO</h2>
										<span class="order-id">COD:<?php echo $r_view_ped['pedido_id'] ?></span> 
									</div>
									<div class="invoice-content">
										<div class="row">
											<div class="col-lg-6 col-sm-6">
												<div class="ordr-date">
													<b>Data do Pedido:</b> <?php echo $r_view_ped['data_pedido'] ?>
												</div>
											</div>
											<div class="col-lg-6 col-sm-6">
												<div class="ordr-date right-text">
													<b>Endereço:</b>
													<?php  echo $r_view_end['tipo'],"<br>", $r_view_end['bairro'],"<br>",$r_view_end['rua'],", ",$r_view_end['numero'],"<br>",$r_view_end['complemento'],	$r_view_end['cep'],"<br>",	$r_view_end['cidade']; ?> </td>
										
												</div>
											</div>
											<div class="col-lg-12">
												<div class="card card-static-2 mb-30 mt-30">
													<div class="card-title-2">
														<h4>Produtos</h4>
													</div>
													<div class="card-body-table">
														<div class="table-responsive">
															<table class="table ucp-table table-hover">
																<thead>
																	<tr>
																		<th>ID</th>
																		<th>Nome</th>
																		<th>Qtd</th>
																		<th>Preço Unit S/Desconto</th>
																		<th>Preço Unit C/Desconto</th>																		
																		<th>Total</th>
																	</tr>
																</thead>
																<tbody>
																<?php 
														
														if(isset($r_pro))
														{	
															foreach($r_pro as $key => $r_pro_ord)
															{																			
														?>
																	<tr>
																	<?php  
																		$id_pro = $r_pro_ord['produto_id']; 
																		$select_view_end ="SELECT * FROM produtos WHERE pro_id='$id_pro'";
																		$array_view_end = mysqli_query($conexao,$select_view_end);
																		$r_view_prod = mysqli_fetch_array($array_view_end);													
																		

																	?>
																		<td><?php echo $r_view_prod['pro_id'] ?></td>
																		<td>
																			<?php echo $r_view_prod['pro_nome'] ?>
																		</td>
																		<td>
																			<?php echo $r_pro_ord['quantidade'] ?>
																		</td>
																		<td>
																			<?php echo $r_pro_ord['valor_sem_desconto']  ?>
																		</td>
																		<td>
																			<?php echo $r_pro_ord['valor_pedido']  ?>
																		</td>
																		<td>
																			<?php echo $r_pro_ord['quantidade'] * $r_pro_ord['valor_pedido'] ?>
																		</td>
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
											<div class="col-lg-7"></div>
											<div class="col-lg-5">
												<div class="order-total-dt">
													<div class="order-total-left-text">
														Sub Total
													</div>
													<div class="order-total-right-text">
													<?php echo $r_view_ped['total_produtos'] - $r_view_ped['valor_frete'] ?>
													</div>
												</div>
												<div class="order-total-dt">
													<div class="order-total-left-text">
														Taxas de Entrega
													</div>
													<div class="order-total-right-text">
													<?php echo $r_view_ped['valor_frete'] ?>
													</div>
												</div>
												<div class="order-total-dt">
													<div class="order-total-left-text fsz-18">
														Total
													</div>
													<div class="order-total-right-text fsz-18">
													<?php echo $r_view_ped['total_produtos'] + $r_view_ped['valor_frete'] ?>

													</div>
												</div>
											</div>
											<div class="col-lg-7"></div>
											<div class="col-lg-5">
												<div class="select-status">
													<label for="status">Status*</label>
													<form method="GET" action="php/update_orders.php">
													<input type="hidden"  name="id_pedido" value="<?php echo $r_view_ped['pedido_id']  ?>" > 
													<div class="input-group">
														<select id="status" name="status" class="custom-select">
															<option name="status" value="Pendente">Pendente</option>
															<option name="status" value="Separação">Separação</option>
															<option name="status" value="Saindo para Entrega">Saindo para Entrega</option>
															<option name="status" value="Finalizada">Finalizada</option>
														</select>
														<div class="input-group-append">
															<button class="status-btn hover-btn" type="submit">Enviar</button>
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
