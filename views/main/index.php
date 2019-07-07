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

    <!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo constant('URL') ?>public/images/carrusel/tienda.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="cuadro-img"></span>
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15 txt-cuadro-img" data-appear="fadeInDown">
							Animetro Tienda
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37 txt-cuadro-img" data-appear="fadeInUp">
							Todos tus mangas favoritos
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false txt-cuadro-img" data-appear="zoomIn">
							<!-- Button -->
							<a href="/tumanga/productos" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Ver Cat&aacutelogo
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(<?php echo constant('URL') ?>public/images/carrusel/taller.jpg); width: 630px;">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="cuadro-img"></span>
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15 txt-cuadro-img" data-appear="rollIn">
							Taller de Manga
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37 txt-cuadro-img" data-appear="lightSpeedIn">
							Saca tu mangaka interno
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false txt-cuadro-img" data-appear="slideInUp">
							<!-- Button -->
							<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Inscribirse
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(<?php echo constant('URL') ?>public/images/carrusel/mangas.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="cuadro-img"></span>
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15 txt-cuadro-img" data-appear="rotateInDownLeft">
							Women Collection 2018
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37 txt-cuadro-img" data-appear="rotateInUpRight">
							New arrivals
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false txt-cuadro-img" data-appear="rotateIn">
							<!-- Button -->
							<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo constant('URL') ?>public/images/banner-02.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Dresses
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo constant('URL') ?>public/images/banner-05.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Sunglasses
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo constant('URL') ?>public/images/banner-03.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Watches
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo constant('URL') ?>public/images/banner-07.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Footerwear
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo constant('URL') ?>public/images/banner-04.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Bags
							</a>
						</div>
					</div>

					<!-- block2 -->
					<div class="block2 wrap-pic-w pos-relative m-b-30">
						<img src="<?php echo constant('URL') ?>public/images/icons/bg-01.jpg" alt="IMG">

						<div class="block2-content sizefull ab-t-l flex-col-c-m">
							<h4 class="m-text4 t-center w-size3 p-b-8">
								Sign up & get 20% off
							</h4>

							<p class="t-center w-size4">
								Be the frist to know about the latest fashion news and get exclu-sive offers
							</p>

							<div class="w-size2 p-t-25">
								<!-- Button -->
								<a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
									Sign Up
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Productos Destacados
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php
						foreach($this->productosDestacados as $row){
							$prod = new Inventario();
							$prod = $row;
					?>
						<div class="item-slick2 p-l-15 p-r-15">
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
		</div>
	</section>

	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="sec-title p-b-20">
				<h3 class="m-text5 t-center">
					Productos Nuevos
				</h3>
			</div>
			<div class="row">
					<!-- Muestra el ultimo libro agregado -->
					<?php
					if ($this->ultimoManga->oerror->codigo <> 0){
						?>
						<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
						<p>
							Ha ocurrido un error al buscar el último libro.
						</p>
						<p style="visibility:hidden">
							<?php echo $this->errorsql; ?> <br> <?php echo($this->numerror)?>
						</p>
						</div>
						<?php
					}else{
						foreach($this->ultimoManga->omanga as $row){
							$manga = new Manga();
							$manga = $row;
					?>
							<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
								<div class="hov-img-zoom pos-relative">
									<img src="<?php echo constant('URL') ?>public/images/mangas/front/<?php echo $manga->portada?>" height="500px" alt="IMG-BANNER">

									<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
										<span class="cuadro-img">
										</span>
										<span class="m-text9 p-t-45 fs-20-sm txt-cuadro-img">
											<?php echo $manga->titulo?> - Vol <?php echo $manga->volumen?>
										</span>

										<h3 class="l-text1 fs-35-sm txt-cuadro-img">
											<?php echo $manga->serie?>
										</h3>

										<a href="#" class="s-text4 hov2 p-t-20 txt-cuadro-img">
											Ver mas productos relacionados
										</a>
									</div>
								</div>
							</div>
					<?php
						}
					}
					?>
					<!-- Muestra la ultima oferta agregada -->
					<?php
						foreach($this->ultimaOferta as $row){
							$oferta = new Inventario();
							$oferta = $row;
					?>
						<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
							<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
								<img src="<?php echo constant('URL') ?>public/images/mangas/front/<?php echo $oferta->portada?>" height="500px" alt="IMG-BANNER">
								<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
								<span class="cuadro-oferta"></span>
									<div class="t-center txt-cuadro-img">
										<a href="/tumanga/detalle_producto" class="dis-block s-text3 hov2 p-t-20 txt-color-white">
											<?php echo $oferta->titulo?> - Vol <?php echo $oferta->volumen?>
										</a>

										<span class="block2-oldprice m-text7 p-r-5 txt-color-white">
											$<?php echo $oferta->precio?>
										</span>

										<span class="block2-newprice m-text8 txt-color-red">
											$<?php echo $oferta->oferta?>
										</span>
									</div>

									<div class="flex-c-m p-t-44 p-t-30-xl txt-cuadro-img">
										<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
											<span class="m-text10 p-b-1 days txt-color-white">
												<?php echo $oferta->diasoferta?>
											</span>
											<span class="s-text5 txt-color-white">
												Días
											</span>
										</div>

										<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
											<span class="m-text10 p-b-1 hours txt-color-white">
												<?php echo $oferta->horasoferta?>
											</span>
											<span class="s-text5 txt-color-white">
												Horas
											</span>
										</div>

										<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
											<span class="m-text10 p-b-1 minutes txt-color-white">
												<?php echo $oferta->minutosoferta?>
											</span>
											<span class="s-text5 txt-color-white">
												Min
											</span>
										</div>

										<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
											<span class="m-text10 p-b-1 seconds txt-color-white">
												<?php echo $oferta->segundosoferta?>
											</span>

											<span class="s-text5 txt-color-white">
												secs
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					?>	
			</div>
		</div>
	</section>


	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Our Blog
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo constant('URL') ?>public/images/blog-01.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									Black Friday Guide: Best Sales & Discount Codes
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

							<p class="s-text8 p-t-16">
								Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo constant('URL') ?>public/images/blog-02.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									The White Sneakers Nearly Every Fashion Girls Own
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

							<p class="s-text8 p-t-16">
								Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo constant('URL') ?>public/images/blog-03.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									New York SS 2018 Street Style: Annina Mislin
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

							<p class="s-text8 p-t-16">
								Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Instagram -->
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				@ follow us on Instagram
			</h3>
		</div>

		<div class="flex-w">
			<!-- Block4 -->
			<div class="block4 wrap-pic-w">
				<img src="<?php echo constant('URL') ?>public/images/gallery-03.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			<!-- Block4 -->
			<div class="block4 wrap-pic-w">
				<img src="<?php echo constant('URL') ?>public/images/gallery-07.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			<!-- Block4 -->
			<div class="block4 wrap-pic-w">
				<img src="<?php echo constant('URL') ?>public/images/gallery-09.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			<!-- Block4 -->
			<div class="block4 wrap-pic-w">
				<img src="<?php echo constant('URL') ?>public/images/gallery-13.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			<!-- Block4 -->
			<div class="block4 wrap-pic-w">
				<img src="<?php echo constant('URL') ?>public/images/gallery-15.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>
		</div>
	</section>

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Envío a todo Chile
				</h4>

				<a href="#" class="s-text11 t-center">
					Más información
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Horarios de apertura
				</h4>

				<?php if ($this->sucursales->oerror->codigo <> 0 ){
                    echo "<span class=''>".$this->sucursales->oerror->error."</span>";
                }else{
					?>
					<?php
						foreach($this->sucursales->osucursal as $row){
						$suc = new Sucursal();
						$suc = $row;
					?>
						<p class="s-text11 t-center">
							<?php echo $suc->comuna; ?>
						</p>
						<span class="s-text11 t-left">
							<?php
								if (sizeof($suc->horarios) <= 0){
									echo "<span class=''>No hay horarios disponibles</span>";
								}else{
									foreach($suc->horarios as $row2){
									$hor = new Horario();
									$hor = $row2;							
								?>
									<p><?php echo $hor->horario; ?> </p>
								<?php
									}
								?>
							<?php
								}
							?>
						</span>
					<?php
						}
					?>
				<?php
                }?>
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
	
</body>
</html>