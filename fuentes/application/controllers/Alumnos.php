<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('Alumnos/index');
	}
	
	public function formulario1(){
		$this->load->view('Alumnos/formulario1');
	}
	
	public function formulario2(){
		$this->load->view('Alumnos/formulario2');
	}
	
	public function guardarRespuestasAlumno(){
		echo "<center><h1>Guardado</h1></center>";
		
		// Dormir durante 1 segundo.
		sleep(1);
		
		$this->load->view('Alumnos/index');
	}
}

/* End of file Alumnos.php */