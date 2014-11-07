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
          <h2 class="sub-header">Gr&aacute;ficos</h2>
          <div class="row placeholders">
            <div class="col-xs-6">
                <img class="img-responsive" src="<?php echo base_url() . "recursos/imagenes/graficos/Grafico1.png"; ?>" alt="San Cristobal - Cuarto Grado (Matem&aacute;tica)" title="San Cristobal - Cuarto Grado (Matem&aacute;tica)"/>
            </div>
            <div class="col-xs-6">
                <img class="img-responsive" src="<?php echo base_url() . "recursos/imagenes/graficos/Grafico2.png"; ?>" alt="Santisima Trinidad - Segundo Grado (Ciencias)" title="Santisima Trinidad - Segundo Grado (Ciencias)"/>
            </div>
          </div>
          
          <h2 class="sub-header">Visualizar Resultados</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Instituci&oacute;n</th>
                  <th>Grado</th>
                  <th>Materia</th>
                  <th>Alumno</th>
                  <th>Nombre del Formulario</th>
                  <th>Puntaje</th>
                  <th>Porcentaje</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>San Cristobal</td>
                  <td>4</td>
                  <td>Matem&aacute;tica</td>
                  <td>Maria Elisa</td>
                  <td>Matem&aacute;tica b&aacute;sica 1</td>
                  <td>5/10</td>
                  <td>50%</td>
                </tr>
                <tr>
                  <td>San Cristobal</td>
                  <td>5</td>
                  <td>Ciencias</td>
                  <td>Javier Alonzo</td>
                  <td>Reservas natualrez Paraguay</td>
                  <td>2/6</td>
                  <td>33,33%</td>
                </tr>
                <tr>
                  <td>Santisima Trinidad</td>
                  <td>2</td>
                  <td>Historia</td>
                  <td>Raul Achucarro</td>
                  <td>Pueblos ind&iacute;genas</td>
                  <td>6/10</td>
                  <td>60%</td>
                </tr>
                <tr>
                  <td>Santisima Trinidad</td>
                  <td>2</td>
                  <td>Historia</td>
                  <td>Lucia Samaniego</td>
                  <td>Pueblos ind&iacute;genas</td>
                  <td>6/6</td>
                  <td>100%</td>
                </tr>
                <tr>
                  <td>Santisima Trinidad</td>
                  <td>6</td>
                  <td>Ciencias</td>
                  <td>Alrnaldo Sanchez</td>
                  <td>Plantas</td>
                  <td>7/10</td>
                  <td>70%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>	
</body>
</html>