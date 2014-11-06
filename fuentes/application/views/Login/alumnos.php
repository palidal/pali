<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera_alumnos_dashboard')?>
    <title>Login</title>
    <style type="text/css">
		h2 {
   			font-size: 18px;
		}
	</style>
</head>
<body>
	<img src="<?php echo base_url(); ?>recursos/imagenes/logo/pali.jpg" alt="Pali" title="Pali" width="200px" height="300px" class="img-responsive center-block">
    <div class="container">
        <form class="form-signin" role="form" action="/Login/login" method="post">
            <h2 class="form-signin-heading">Por favor, inicie sesión</h2>
            <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <input type="password" name="password"class="form-control" placeholder="Contraseña" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
        </form>
    </div> <!-- /container -->
</body>
</html>