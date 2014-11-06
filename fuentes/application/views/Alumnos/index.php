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
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="<?php echo base_url() . 'Alumnos/formulario2'; ?>"><img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Matem&aacute;tica" title ="Matem&aacute;tica"></a>
              <h4>Matem&aacute;tica</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="<?php echo base_url() . 'Alumnos/formulario1'; ?>"><img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Geograf&iacute;a" title ="Geograf&iacute;a"></a>
              <h4>Geograf&iacute;a</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/lava" class="img-responsive" alt="Historia" title ="Historia">
              <h4>Historia</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/social" class="img-responsive" alt="Salud" title ="Salud">
              <h4>Salud</h4>
            </div>
          </div>

<!--           <h2 class="sub-header">Section title</h2> -->
<!--           <div class="table-responsive"> -->
<!--             <table class="table table-striped"> -->
<!--               <thead> -->
<!--                 <tr> -->
<!--                   <th>#</th> -->
<!--                   <th>Header</th> -->
<!--                   <th>Header</th> -->
<!--                   <th>Header</th> -->
<!--                   <th>Header</th> -->
<!--                 </tr> -->
<!--               </thead> -->
<!--               <tbody> -->
<!--                 <tr> -->
<!--                   <td>1,001</td> -->
<!--                   <td>Lorem</td> -->
<!--                   <td>ipsum</td> -->
<!--                   <td>dolor</td> -->
<!--                   <td>sit</td> -->
<!--                 </tr> -->
<!--                 <tr> -->
<!--                   <td>1,002</td> -->
<!--                   <td>amet</td> -->
<!--                   <td>consectetur</td> -->
<!--                   <td>adipiscing</td> -->
<!--                   <td>elit</td> -->
<!--                 </tr> -->
<!--                 <tr> -->
<!--                   <td>1,003</td> -->
<!--                   <td>Integer</td> -->
<!--                   <td>nec</td> -->
<!--                   <td>odio</td> -->
<!--                   <td>Praesent</td> -->
<!--                 </tr> -->
<!--                 <tr> -->
<!--                   <td>1,003</td> -->
<!--                   <td>libero</td> -->
<!--                   <td>Sed</td> -->
<!--                   <td>cursus</td> -->
<!--                   <td>ante</td> -->
<!--                 </tr> -->
<!--               </tbody> -->
<!--             </table> -->
<!--           </div> -->
        </div>
      </div>
    </div>	
</body>
</html>