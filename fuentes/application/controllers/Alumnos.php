<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos extends CI_Controller {
	public function index(){
		$this->load->view('Alumnos/index');
	}
}

/* End of file Alumnos.php */