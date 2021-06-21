<?php 
		include('php/exibe_categoria.php');
		include('php/conexao.php');
	?>

<!DOCTYPE html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Mercado Pai D'égua - admin</title>
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/admin-style.css" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	
	<!-- froala Editor Stylesheets -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/froala_editor.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/froala_style.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/code_view.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/colors.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/emoticons.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/image_manager.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/image.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/line_breaker.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/table.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/char_counter.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/video.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/fullscreen.css">
	<link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/file.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
	
</head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
            <a class="navbar-brand logo-brand" href="index.php">Mercado Pai D'égua</a>
			<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ml-auto mr-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item admin-dropdown-item" href="login.html">Logout</a>
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
                            <li class="breadcrumb-item"><a href="products.php">Produtos</a></li>
                            <li class="breadcrumb-item active">Adicionar Produtos</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Adicionar Novo Produto</h4>
									</div>
									<?php
											if(isset($_SESSION['msg'])){
												echo $_SESSION['msg'];	
												unset($_SESSION['msg']);											
											}?>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
										<form method="POST" action="php/add_produto.php" enctype="multipart/form-data"> <!--FORMULARIO-->
											<div class="form-group">
												<label class="form-label">Nome*</label>
												<input type="text" class="form-control" name="p_nome" placeholder="Nome do Produto">
											</div>
											<div class="form-group">
												<label class="form-label">Categoria*</label>
												<select id="categtory" name="p_cat" class="form-control">
													<option selected>--Selecione a Categoria--</option>
												<?php
												if(isset($r_categoria))
														{	
															foreach($r_categoria as $key => $r_cat)
															{									
														?>

													<?php echo"<option value= '".$r_cat['cat_id']."'> ".$r_cat['cat_nome']." </option>" ;?>;
													
												<?php }} ?>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Preço*</label>
												<input type="text" class="form-control" name="p_valor" placeholder="R$0">
											</div>
											<div class="form-group">
												<label class="form-label">Preço com desconto*</label>
												<input type="text" class="form-control" name="p_desconto" placeholder="R$0">
											</div>
											<div class="form-group">
												<label class="form-label">Status*</label>
												<select id="status" name="p_status" class="form-control">
													<option value="1" selected>Ativo</option>
													<option value="0">Inativo</option>
												</select>
											</div>
											<label class="form-label">Descrição*</label>
												<div class="card card-editor">
													<div class="content-editor">
														<textarea name="p_desc" class="text-control" placeholder="Insira a Descrição"></textarea>
													</div>
												</div>
											<div class="form-group">
												<label class="form-label">Imagem do Produto*</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" name="p_img" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
														<label class="custom-file-label" for="inputGroupFile04">Selecione a Imagem</label>
													</div>
												</div>
												<div class="add-cate-img-1">
												<img id="preview-img" src="" alt="">

												</div>
											</div>
											
											<button class="save-btn hover-btn" name="salvar_produto" type="submit">Adicionar Produto</button>
										</form><!--FIM DO FORMULARIO-->
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
		
		<!-- Javascripts -->
		<script src="js/preview-img.js"></script>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
		
		<!-- froala Editor Javascripts -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/froala_editor.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/align.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/code_beautifier.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/code_view.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/colors.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/emoticons.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/draggable.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/font_size.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/font_family.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/image.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/file.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/image_manager.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/line_breaker.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/link.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/lists.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/paragraph_format.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/paragraph_style.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/video.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/table.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/url.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/entities.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/char_counter.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/inline_style.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/save.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/fullscreen.min.js"></script>
		<script type="text/javascript" src="vendor/froala_editor_3.1.1/js/plugins/quote.min.js"></script>
		<script>
			(function () {
			  new FroalaEditor("#edit", {
				zIndex: 10
			  })
			})()
		</script>
		
    </body>
</html>
