<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('Login/alumnos');
	}
}

/* End of file Login.php */