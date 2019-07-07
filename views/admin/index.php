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
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo constant('URL') ?>public/vendor/jquery/jquery-3.2.1.min.js"></script>
</head>
<body class="animsition">
    <?php require 'views/header.php' ?>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<form action="<?php echo constant('URL') ?>admin/subirImagen" method='POST' enctype='multipart/form-data'>
				<input type="file" name='archivo' id='archivo'><br><br>
				<select name="directorio" id="directorio">
					<option value="mangas/back">Mangas Contra Portada</option>
					<option value="mangas/front">Mangas Portada</option>
					<option value="series">Series</option>
				</select>
				<input type="submit" class="btn" value='subir archivo'> <br><br>
			</form>
		</div>

		<h3><?php echo $this->upload; ?></h3>
		<h3><?php echo $this->size; ?></h3>
		<h3><?php echo $this->type; ?></h3>
		<h3><?php echo $this->stored; ?></h3>
		<h3><?php echo $this->btnVolver; ?></h3>
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
	<script>
		/*$("form").on('submit',(function(e){
			e.preventDefault(); 
			$.ajax({
				url: 'lolcalhost/tumanga/controllers/admin.php?action=subirImagen',
				type: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success: function(output) {
						console.log(output);
				}
			});
		}));*/
	</script>
</body>
</html>