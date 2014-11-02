<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera_alumnos_dashboard')?>
    <style>
    	.form-control {
    		width: 80%;
		}
    </style>
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

	<div class="container">
    	<div class="row">
        	<form role="form">
            	<div class="col-lg-6">
                	<div class="well well-sm"><strong><span class="glyphicon"></span>Profiles</strong></div>
                	<div class="form-group">
                    	<label for="InputNombre">Nombre</label>
                    	<div class="input-group">
                       		<input type="text" class="form-control" name="InputNombre" id="InputNombre" placeholder="Escriba su Nombre" value = "Maria Elsa" required>
                       		<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    	</div>
                	</div>
                	<div class="form-group">
                    	<label for="InputApellidos">Apellidos</label>
                    	<div class="input-group">
                       		<input type="text" class="form-control" name="InputApellidos" id="InputApellidos" placeholder="Escriba sus Apellidos" value = "Benitez Rojas" required>
                       		<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    	</div>
                	</div>
                	<div class="form-group">
                    	<label for="InputEmail">Email</label>
                    	<div class="input-group">
                        	<input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Escriba su Email" value = "melsabenitez@gmail.com" required>
                        	<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    	</div>
                	</div>
                	<div class="form-group row">
					    <div class="col-xs-8">
					        <label class="control-label">Fecha de nacimiento</label>
					        <div class="input-group date" id="dp3" data-date="12-02-2003" data-date-format="dd-mm-yyyy">
					          <input class="form-control" type="text" readonly="" value="12-02-2003">
					          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					        </div>
					    </div>
					</div>
                	<div class="form-group">
                    	<label for="InputPais">Pa&iacute;s</label>
                    	<select class="form-control">
						    <option value="argentina">Argentina</option>
						    <option value="bolivia">Bolivia</option>
						    <option value="brasil">Brasil</option>
						    <option value="chile">Chile</option>
						    <option value="colombia">Colombia</option>
						    <option value="ecuador">Ecuador</option>
						    <option value="paraguay" selected = "selected">Paraguay</option>
						    <option value="peru">Perú</option>
						    <option value="uruguay">Uruguay</option>
						    <option value="venezuela">Venezuela</option>
						</select>
                	</div>
                	<div class="form-group">
                    	<label for="InpuCiudad">Ciudad</label>
                    	<select class="form-control">
                    	    <option value="aregua">Aregua</option>
						    <option value="asuncion">Asunción</option>
						    <option value="capiata" selected = "selected">Capiata</option>
						    <option value="fernandoDeLaMora">Fernando de la Mora</option>
						    <option value="sanLorenzo">San Lorenzo</option>
						</select>
                	</div>
                	<div class="form-group">
                    	<label for="InputInstitucionEducativa">Instituci&oacute;n educativa</label>
                    	<select class="form-control">
						    <option value="sanCristobal">San Cristobal</option>
						    <option value="recoleta">Recoleta</option>
						    <option value="repiblicano">Republicano</option>
						    <option value="sanPablo">San Pablo</option>
						    <option value="santisimaTrinidad">Santisima Trinidad</option>
						    <option value="sanRoque">San Roque</option>
						</select>
                	</div>
                	<input type="submit" name="submit" id="submit" value="Guardar" class="btn btn-info pull-right">
            	</div>
        	</form>
    	</div>
	</div>  
</body>
</html>