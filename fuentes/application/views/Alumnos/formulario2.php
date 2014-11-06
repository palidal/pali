<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Formulario de matemáticas</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
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
					<h1>Formulario de matemáticas</h1>
<!-- 					<div class="codrops-top"> -->
<!-- 						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/NotificationStyles/"><span>Previous Demo</span></a> -->
<!-- 						<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a> -->
<!-- 						<a class="codrops-icon codrops-icon-info" href="#"><span>This is a demo for a fullscreen form</span></a> -->
<!-- 					</div> -->
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" action="guardarRespuestasAlumno" method="post">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">¿Cuántos lados tiene un hexágono?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q1b" name="q1" type="radio" value="8_lados"/><label for="q1b" class="radio-numero5">8 lados</label></span>
								<span><input id="q1c" name="q1" type="radio" value="6_lados"/><label for="q1c" class="radio-numero6">6 lados</label></span>
								<span><input id="q1a" name="q1" type="radio" value="5_lados"/><label for="q1a" class="radio-numero5">5 lados</label></span>
								<span><input id="q1d" name="q1" type="radio" value="7_lados"/><label for="q1d" class="radio-numero6">7 lados</label></span>
							</div>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2">Elija el reloj que marque las tres y media</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q2b" name="q2" type="radio" value="3y10"/><label for="q2b" class="radio-3y10">Opci&oacute;n 1</label></span>
								<span><input id="q2c" name="q2" type="radio" value="3y15"/><label for="q2c" class="radio-3y15">Opci&oacute;n 2</label></span>
								<span><input id="q2a" name="q2" type="radio" value="3y30"/><label for="q2a" class="radio-3y30">Opci&oacute;n 3</label></span>
								<span><input id="q2d" name="q2" type="radio" value="3y45"/><label for="q2d" class="radio-3y45">Opci&oacute;n 4</label></span>
							</div>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q3">Seleccione un múltiplo de 3</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3b" name="q3" type="radio" value="26"/><label for="q3b" class="radio-26">26</label></span>
								<span><input id="q3c" name="q3" type="radio" value="13"/><label for="q3c" class="radio-13">13</label></span>
								<span><input id="q3a" name="q3" type="radio" value="32"/><label for="q3a" class="radio-32">32</label></span>
								<span><input id="q3d" name="q3" type="radio" value="30"/><label for="q3d" class="radio-30">30</label></span>
							</div>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4">¿Cuántos vértices tiene un cuadrilátero?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q4b" name="q4" type="radio" value="5"/><label for="q4b" class="radio-5vertices">5</label></span>
								<span><input id="q4c" name="q4" type="radio" value="1"/><label for="q4c" class="radio-1vertice">1</label></span>
								<span><input id="q4a" name="q4" type="radio" value="4"/><label for="q4a" class="radio-4vertices">4</label></span>
								<span><input id="q4d" name="q4" type="radio" value="3"/><label for="q4d" class="radio-3vertices">3</label></span>
							</div>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">9 + 81 + 199</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q5b" name="q5" type="radio" value="289"/><label for="q5b" class="radio-289">289</label></span>
								<span><input id="q5c" name="q5" type="radio" value="179"/><label for="q5c" class="radio-179">179</label></span>
								<span><input id="q5a" name="q5" type="radio" value="279"/><label for="q5a" class="radio-279">279</label></span>
								<span><input id="q5d" name="q5" type="radio" value="189"/><label for="q5d" class="radio-189">189</label></span>
							</div>
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Enviar respuestas</button>
<!-- 					<button type="submit">Enviar respuestas</button> -->
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