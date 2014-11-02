<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos extends CI_Controller {
	public function index(){
		//$this->load->view('Alumnos/index');
	}
	
	public function formulario1(){
		$this->load->view('Alumnos/formulario1');
	}
	
	public function formulario2(){
		$this->load->view('Alumnos/formulario2');
	}
}

/* End of file Alumnos.php */