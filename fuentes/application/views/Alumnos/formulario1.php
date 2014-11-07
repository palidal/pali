<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Formulario Historia General</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>recursos/imagenes/logo/favicon.ico">
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/alumnos/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/alumnos/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/alumnos/component.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/alumnos/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/alumnos/cs-skin-boxes.css" />
		<script src="<?php echo base_url(); ?>js/libs/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Formulario Historia General</h1>
<!-- 					<div class="codrops-top"> -->
<!-- 						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/NotificationStyles/"><span>Previous Demo</span></a> -->
<!-- 						<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a> -->
<!-- 						<a class="codrops-icon codrops-icon-info" href="#"><span>This is a demo for a fullscreen form</span></a> -->
<!-- 					</div> -->
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" action="guardarRespuestasAlumno" method="post">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">¿Quién descubrió Ámerica?</label>
<!-- 							<select class="cs-select cs-skin-boxes fs-anim-lower"> -->
<!-- 								<option value="" disabled selected>¿Quién descubrió Ámerica?</option> -->
<!-- 								<option value="Cristobal_Colon" data-class="color-588c75">Cristóbal Colón</option> -->
<!-- 								<option value="BernardoDeVelasco," data-class="color-b0c47f">Bernardo de Velasco</option> -->
<!-- 								<option value="JoseGasparRodríguezDeFrancia" data-class="color-f3e395">José Gaspar Rodríguez de Francia</option> -->
<!-- 							</select> -->
							<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Mario Alonso" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2">¿Cuál es la fecha de la Fundación de Asunción?</label>
							<input class="fs-anim-lower" id="q2" name="q2" type="text" placeholder="30 de enero de 2014" required/>
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Enviar respuestas</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->
		</div><!-- /container -->
		<script src="<?php echo base_url(); ?>js/classie.js"></script>
		<script src="<?php echo base_url(); ?>js/selectFx.js"></script>
		<script src="<?php echo base_url(); ?>js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>