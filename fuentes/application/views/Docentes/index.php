<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera_docentes_dashboard')?>
    <title>Dashboard Docente</title>
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
    	<?php $this->load->view('comunes/menu_docentes')?>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3">
                <img class="img-responsive img-circle docentes_area_borde" src="<?php echo base_url() . "recursos/imagenes/docentes/areas/Formularios.png"; ?>" alt="Crear Formularios" title="Crear Formularios"/>
                <h4>Crear Formularios</h4>
            </div>
            <div class="col-xs-6 col-sm-3">
                <img class="img-responsive img-circle docentes_area_borde" src="<?php echo base_url() . "recursos/imagenes/docentes/areas/Instituciones.png"; ?>" alt="Instituciones" title="Instituciones"/>
                <h4>Instituciones</h4>
            </div>
          </div>

          <h2 class="sub-header">Visualizar Resultados</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Instituci&oacute;n</th>
                  <th>Grado</th>
                  <th>Alumno</th>
                  <th>Materia</th>
                  <th>Puntaje</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>San Cristobal</td>
                  <td>5</td>
                  <td>Maria Elisa</td>
                  <td>Matem&aacute;tica</td>
                  <td>5/10</td>
                </tr>
                <tr>
                  <td>San Cristobal</td>
                  <td>4</td>
                  <td>Javier Alonzo</td>
                  <td>Sociales</td>
                  <td>2/6</td>
                </tr>
                <tr>
                  <td>Santisima Trinidad</td>
                  <td>3</td>
                  <td>Raul Achucarro</td>
                  <td>Salud</td>
                  <td>6/10</td>
                </tr>
                <tr>
                  <td>Santisima Trinidad</td>
                  <td>2</td>
                  <td>Lucia Samaniego</td>
                  <td>Historia</td>
                  <td>6/6</td>
                </tr>
                <tr>
                  <td>Santisima Trinidad</td>
                  <td>6</td>
                  <td>Alrnaldo Sanchez</td>
                  <td>Ciencias</td>
                  <td>7/10</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>	
</body>
</html>