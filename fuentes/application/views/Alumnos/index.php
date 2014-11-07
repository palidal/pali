<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera_alumnos_dashboard')?>
    <title>Dashboard Alumno</title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Pali</a>
        </div>
        <!-- Menu -->
    	<?php $this->load->view('comunes/menu_alumnos')?>
      </div>
    </nav>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3">
                <a href="<?php echo base_url() . 'Alumnos/formulario2'; ?>"><img class="img-responsive img-circle alumno_area_borde" src="<?php echo base_url() . "recursos/imagenes/alumnos/areas/Matematicas.png"; ?>" alt="Matem&aacute;ticas" title="Matem&aacute;ticas"/></a>
                <h4>Matem&aacute;tica</h4>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="<?php echo base_url() . 'Alumnos/formulario1'; ?>"><img class="img-responsive img-circle alumno_area_borde" src="<?php echo base_url() . "recursos/imagenes/alumnos/areas/Historia.png"; ?>" alt="Historia" title="Historia"/></a>
                <h4>Historia</h4>
            </div>
            <div class="col-xs-6 col-sm-3">
                <img class="img-responsive img-circle alumno_area_borde" src="<?php echo base_url() . "recursos/imagenes/alumnos/areas/Geografia.png"; ?>" alt="Geograf&iacute;a" title="Geograf&iacute;a"/>
                <h4>Geograf&iacute;a</h4>
            </div>
            <div class="col-xs-6 col-sm-3">
                <img class="img-responsive img-circle alumno_area_borde" src="<?php echo base_url() . "recursos/imagenes/alumnos/areas/Ciencias.png"; ?>" alt="Ciencias" title="Ciencias"/>
                <h4>Ciencias</h4>
            </div>
          </div>
        </div>
      </div>
    </div>	
</body>
</html>