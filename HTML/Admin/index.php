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
						<?php
							if(isset($_SESSION['msg_o'])){
							echo $_SESSION['msg_o'];	
							unset($_SESSION['msg_o']);											
						}?>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item active">Painel</li>
                        </ol>
                        
                            

						<div class="row justify-content-between">
						
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
														<th style="width:130px">Pedido n°</th>														
														<th style="width:200px">Data</th>
														<th style="width:300px">Endereço</th>
														<th style="width:130px">Status</th>
														<th style="width:130px">Total</th>
														<th style="width:100px">Ação</th>
													</tr>
												</thead>
												<tbody>
												<?php 														
												if(isset($r_cli))
												{	
												foreach($r_cli as $key => $r_orders)
												{																			
												?>	
													<tr>
														<td><?php echo $r_orders['pedido_id'] ?></td>
														<?php  
														$id_end_p = $r_orders['id_endereco']; 
														$select_view_end ="SELECT * FROM endereco WHERE id='$id_end_p'";
														$array_view_end = mysqli_query($conexao,$select_view_end);
														$r_view_end = mysqli_fetch_array($array_view_end);													
														
														?>
														<td>
															<span class="delivery-time"><?php echo $r_orders['data_pedido']?></span>															
														</td>
														<td> <?php  echo $r_view_end['tipo'],"<br>", $r_view_end['bairro'],"<br>",$r_view_end['rua'],",",$r_view_end['numero'],"<br>",$r_view_end['complemento'],	$r_view_end['cep'],"<br>",	$r_view_end['cidade']; ?> </td>
														<td>
															<span class="badge-item badge-status"><?php echo $r_orders['ped_status'] ?></span>
														</td>
														<td><?php echo $r_orders['valor_total_pro'] ?></td>
														<td class="action-btns">
															<a href="order_view.php?pedido_id=<?php echo $r_orders['pedido_id'] ?>" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.php?pedido_id=<?php echo $r_orders['pedido_id'] ?>" class="edit-btn"><i class="fas fa-edit"></i></a>
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
