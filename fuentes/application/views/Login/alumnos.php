<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera_alumnos_dashboard')?>
</head>
<body>
	<img src="<?php echo base_url(); ?>recursos/imagenes/logo/pali.jpg" alt="Pali" title="Pali" width="20%" height="30%" class="img-responsive center-block">
    <div class="container">
        <form class="form-signin" role="form" action="/Login/login" method="post">
            <h2 class="form-signin-heading">Por favor, inicie sesión</h2>
            <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <input type="password" name="password"class="form-control" placeholder="Contraseña" required>
<!--         <div class="checkbox"> -->
<!--             <label> -->
<!--                 <input type="checkbox" value="remember-me"> Remember me -->
<!--             </label> -->
<!--         </div> -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
        </form>
    </div> <!-- /container -->
</body>
</html>