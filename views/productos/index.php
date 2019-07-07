<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo constant('URL') ?>public/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/estilos.css">
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/vendor/jquery/jquery-3.2.1.min.js"></script>
</head>
<body class="animsition">
    <?php require 'views/header.php' ?>
		<!-- Title Page -->
		<!-- <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?php echo constant('URL') ?>public/images/heading-pages-02.jpg);">
			<h2 class="l-text2 t-center">
				Women
			</h2>
			<p class="m-text13 t-center">
				New Arrivals Women Collection 2018
			</p>
		</section> -->

		<!-- Content page -->
		<section class="bgwhite p-t-55 p-b-65">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
						<div class="leftbar p-r-20 p-r-0-sm">
							<!--  -->
							<h4 class="m-text14 p-b-7">
								Categor&iacuteas
							</h4>

							<?php if ($this->tiposlibros->oerror->codigo <> 0 ){
								echo "<span class=''>".$this->tiposlibros->oerror->error."</span>";
							}else{
							?>
								<ul class="p-b-54">
									<li class="p-t-4">
										<a href="#" class="s-text13 opt-categorias active1" data-idtipolibro="0">
											Todos
										</a>
									</li>

									
									<?php
										foreach($this->tiposlibros->otipolibro as $row){
										$tiplibro = new TiposLibro();
										$tiplibro = $row;
									?>
										<li class="p-t-4">
											<a href="#" class="s-text13 opt-categorias" data-idtipolibro="<?php echo $tiplibro->idtipolibro;?>">
												<?php echo $tiplibro->tipolibro;?>
											</a>
										</li>
									<?php
										}
									?>
								</ul>
							<?php
                			}?>
							<!--  -->
							<h4 class="m-text14 p-b-32">
								B&uacutesqueda
							</h4>

							<div class="search-product pos-relative bo4 of-hidden">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Buscar...">

								<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
									<i class="fs-12 fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
						<!--  -->
						<div class="flex-sb-m flex-w p-b-35">
							<div class="flex-w">
								<div class="rs2-select2 bo4 of-hidden w-size10 m-t-5 m-b-5 m-r-10">
									<select class="selection-2" name="sorting">
										<option>Ordenar por:</option>
										<option>Fecha</option>
										<option>Nombre</option>
										<option>Precio: menor a mayor</option>
										<option>Precio: mayor a menor</option>
									</select>
								</div>

								<div class="rs2-select2 bo4 of-hidden w-size10 m-t-5 m-b-5 m-r-10">
									<select class="selection-2" name="sorting">
										<option>Precio</option>
										<option>$0 - $5.000</option>
										<option>$5.000 - $10.000</option>
										<option>$10.000 - $15.000</option>
										<option>$15.000 - $20.000</option>
										<option>$20.000+</option>

									</select>
								</div>
							</div>

							<span class="s-text8 p-t-5 p-b-5" id="totalPaginador">
								Mostrando <?php echo $this->totalproductos->opaginador[0]->desde?>–<?php echo $this->totalproductos->opaginador[0]->hasta?> de <?php echo $this->totalproductos->opaginador[0]->total?> resultados
							</span>
						</div>

						<!-- Product -->
						<div class="row" id="modal-libros">
							<?php if ($this->productos->oerror->codigo <> 0 ){
								echo "<span class='col-sm-12 col-md-12 col-lg-12 p-b-50'>".$this->productos->oerror->error."</span>";
							}else{
								?>
								<?php
									foreach($this->productos->oproductos as $row){
									$prod = new Inventario();
									$prod = $row;
								?>
								<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
									<!-- Block2 -->
									<div class="block2">
										<?php 
											if($prod->oferta <= 0){
												date_default_timezone_set('America/Santiago');
												$fecha = date("YmdHis");
												$nuevafecha = strtotime ( '-15 day' , strtotime ( $fecha ) ) ;
												$nuevafecha = (date('YmdHis' , $nuevafecha).'00');
												if (intval($nuevafecha) <= intval ($prod->fechaing)){
													echo '<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">';
												}else{
													echo '<div class="block2-img wrap-pic-w of-hidden pos-relative">';
												}									
											}else{
												echo '<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">';
											}
										?>
										
											<img src="<?php echo constant('URL') ?>public/images/mangas/front/<?php echo $prod->portada?>" alt="IMG-PRODUCT">

											<div class="block2-overlay trans-0-4">
												<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
													<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
													<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
												</a>

												<div class="block2-btn-addcart w-size1 trans-0-4">
													<!-- Button -->
													<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Agregar al carro
													</button>
												</div>
											</div>
										</div>

										<div class="block2-txt p-t-20">
											<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
												Manga <?php echo $prod->serie?> Volumen <?php echo $prod->volumen?> <br> <?php echo $prod->titulo?>
											</a>

											<?php 
												if($prod->oferta <= 0){
											
												echo '<span class="block2-price m-text6 p-r-5">
														$'.$prod->precio.
													'</span>';
												}else{
												echo '<span class="block2-oldprice m-text7 p-r-5">
													$'.$prod->precio.
												'</span>
												<span class="block2-newprice m-text8 p-r-5">
													$'.$prod->oferta.
												'</span>';
												}
											?>
										</div>
									</div>
								</div>
								<?php
									}
								?>
							<?php
								}
							?>
						</div>

						<!-- Pagination -->
						<div class="pagination flex-m flex-w p-t-26" id="pagination">
							<?php
								for ($i=1; $i <= intval($this->totalproductos->opaginador[0]->paginas); $i++) { 
									if ($i==1){
										echo '<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>';
									}else{
										echo '<a href="#" class="item-pagination flex-c-m trans-0-4">'.$i.'</a>';
									}
								};
							?>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php require 'views/footer.php' ?>
	
	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>
	
		
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/js/moment.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/css/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="<?php echo constant('URL') ?>public/js/main.js"></script>
	<script>
		$(".opt-categorias").on("click", function(){
			$(".opt-categorias").removeClass("active1");
			this.classList.add("active1");
			$(".item-pagination").removeClass("active-pagination");
			$("#pagination a:first-child").addClass("active-pagination")
			obtenerPaginacion();
		});

		$(".item-pagination").on("click", function(){
			$(".item-pagination").removeClass("active-pagination");
			this.classList.add("active-pagination");
			obtenerPaginacion();
		});

		var obtenerLibros = function(){
			var tipoLibro = $(".active1").data("idtipolibro");
			var pagina = $(".active-pagination").text();
			$.ajax({
				url: '<?php echo constant('URL') ?>models/obtenerProductos.php',
				contentType: 'application/json; charset=utf-8',
				dataType: 'json',
				type: "GET",
				data: {
						"tipolibro" : tipoLibro,
						"cantidad" : 12,
						"pagina" : pagina
					}
				})
				.done(function(data) {
					$("#modal-libros").empty();
					var html = "";
					if (data.oerror.codigo != 0){
						html = "<span class='col-sm-12 col-md-12 col-lg-12 p-b-50'>" + data.oerror.error + "</span>";
					}else{
						if (data.oproductos.length == 0){
							html = "<span class='col-sm-12 col-md-12 col-lg-12 p-b-50'>No hay registros para mostrar</span>";
						}else{
							$.each(data.oproductos, function(index, prod) {
								html += '<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">';
								html += '<div class="block2">'
								if(prod.oferta <= 0){
									var $nuevafecha = moment().subtract('15', 'd').format('YYYYMMDDHHmmssSS');
										if ($nuevafecha <= prod.fechaing){
											html +=  '<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">';
										}else{
											html +=  '<div class="block2-img wrap-pic-w of-hidden pos-relative">';
										}									
								}else{
									html +=  '<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">';
								}
										
								html += '<img src="<?php echo constant('URL') ?>public/images/mangas/front/' + prod.portada + '" alt="IMG-PRODUCT">';
								html += '<div class="block2-overlay trans-0-4">';
								html += '<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">';
								html += '<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>';
								html += '<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>';
								html += '</a>';
								html += '<div class="block2-btn-addcart w-size1 trans-0-4">';
								html += '<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">';
								html += 'Agregar al carro';
								html += '</button>';
								html += '</div>';
								html += '</div>';
								html += '</div>';
								html += '<div class="block2-txt p-t-20">';
								html += '<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">';
								html += 'Manga ' + prod.serie + ' Volumen '+ prod.volumen +' <br> ' + prod.titulo;
								html += '</a>';
								html += '';
								if(prod.oferta <= 0){
									html += '<span class="block2-price m-text6 p-r-5">';
									html +=	'$' + prod.precio;
									html += '</span>';
								}else{
									html += '<span class="block2-oldprice m-text7 p-r-5">';
									html += '$'+ prod.precio;
									html += '</span>';
									html +=	'<span class="block2-newprice m-text8 p-r-5">';
									html += '$' + prod.oferta;
									html += '</span>';
								}
										
								html += '</div>';
								html += '</div>';
								html += '</div>';

								
							})
						}
					
					}

					$("#modal-libros").html(html);
				})
				.fail(function() {
				console.log("error");
				})
				.always(function() {
				console.log("complete");
			});
		}

		var obtenerPaginacion = function(){
			var tipoLibro = $(".active1").data("idtipolibro");
			var pagina = $(".active-pagination").text();
			if (pagina == ''){
				pagina = 1;
			}
			$.ajax({
				url: '<?php echo constant('URL') ?>models/obtenerPaginadorProductos.php',
				contentType: 'application/json; charset=utf-8',
				dataType: 'json',
				type: "GET",
				data: {
						"tipolibro" : tipoLibro,
						"cantidad" : 12,
						"pagina" : pagina
					}
				})
				.done(function(data) {
					$("#pagination").empty();
					var html = "";
					if (data.opaginador[0].paginas != 0){
						for ($i=1; $i <= (Math.trunc(data.opaginador[0].paginas)+1); $i++) { 
							if ($i==1){
								html += '<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>';
							}else{
								html += '<a href="#" class="item-pagination flex-c-m trans-0-4">'+$i+'</a>';
							}
						};
					}

					$("#pagination").html(html);

					$("#totalPaginador").empty();
					var html = "";
					if (data.oerror.codigo != 0){
						html = "<span class='col-sm-12 col-md-12 col-lg-12 p-b-50'>" + data.oerror.error + "</span>";
					}else{
						if (data.opaginador[0].paginas != 0){
							html = 'Mostrando ' + data.opaginador[0].desde + '–' + data.opaginador[0].hasta +' de ' + data.opaginador[0].total + ' resultados';
						}
					}

					$("#totalPaginador").html(html);
					obtenerLibros();
				})
				.fail(function() {
				console.log("error");
				})
				.always(function() {
				console.log("complete");
			});
		}
	</script>
</body>
</html>