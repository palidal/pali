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
							<label class="fs-field-label fs-anim-upper" for="q2">Elija el reloj que marque las tres y media.</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q2b" name="q2" type="radio" value="3y10"/><label for="q2b" class="radio-3y10">1</label></span>
								<span><input id="q2c" name="q2" type="radio" value="3y15"/><label for="q2c" class="radio-3y15">2</label></span>
								<span><input id="q2a" name="q2" type="radio" value="3y30"/><label for="q2a" class="radio-3y30">3</label></span>
								<span><input id="q2d" name="q2" type="radio" value="3y45"/><label for="q2d" class="radio-3y45">4</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="Esto nos ayudará a saber qué tipo de servicio necesita">¿Cuál es el su prioridad para su nueva página web?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3b" name="q3" type="radio" value="conversion"/><label for="q3b" class="radio-conversion">Vender cosas</label></span>
								<span><input id="q3c" name="q3" type="radio" value="social"/><label for="q3c" class="radio-social">Hacerse famoso</label></span>
								<span><input id="q3a" name="q3" type="radio" value="mobile"/><label for="q3a" class="radio-mobile">Mercado móvil</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="Nos aseguraremos de usarlo en todo el sitio web">Elija un color para su sitio web.</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower">
								<option value="" disabled selected>Elija un color</option>
								<option value="#588c75" data-class="color-588c75">#588c75</option>
								<option value="#b0c47f" data-class="color-b0c47f">#b0c47f</option>
								<option value="#f3e395" data-class="color-f3e395">#f3e395</option>
								<option value="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
								<option value="#da645a" data-class="color-da645a">#da645a</option>
								<option value="#79a38f" data-class="color-79a38f">#79a38f</option>
								<option value="#c1d099" data-class="color-c1d099">#c1d099</option>
								<option value="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
								<option value="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
								<option value="#e1837b" data-class="color-e1837b">#e1837b</option>
								<option value="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
								<option value="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
								<option value="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
								<option value="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
								<option value="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
								<option value="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
								<option value="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
								<option value="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
								<option value="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
								<option value="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
							</select>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4">Describa de como se imagina su nuevo sitio web</label>
							<textarea class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">¿Cuál es tu presupuesto?</label>
							<input class="fs-mark fs-anim-lower" id="q5" name="q5" type="number" placeholder="1000" step="100" min="100"/>
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