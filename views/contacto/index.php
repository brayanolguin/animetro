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

	<!-- content page -->
	<section class="bgwhite p-t-20 p-b-60">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-6 p-b-30">
					<form action="<?php echo constant('URL') ?>contacto/enviarMensaje" method="POST" class="leave-comment">
						<h4 class="m-text26 p-b-36 p-t-15">
							M&aacutendanos tu mensaje
							<p id="error"><?php echo $this->error;?></p>
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22 <?php echo $this->errorNombre;?>" type="text" name="nombre" id="nombre" placeholder="Nombre Completo" value="<?php echo $this->nombre;?>">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22 <?php echo $this->errorFono;?>" type="text" name="telefono" id="telefono" placeholder="Teléfono" value="<?php echo $this->telefono;?>">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22 <?php echo $this->errorCorreo;?>" type="text" name="correo" id="correo" placeholder="Correo electrónico" value="<?php echo $this->correo;?>">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20 <?php echo $this->errorMsj;?>" name="msj" id="msj" placeholder="Mensaje"><?php echo $this->msj;?></textarea>

						<div class="w-size25">
							<!-- Button -->
							<input type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" value="Enviar">
						</div>
					</form>
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