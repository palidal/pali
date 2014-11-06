<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('Login/alumnos');
	}
	
	public function login(){
		$v_usuario = $this->input->post('usuario');
		$v_password = $this->input->post('password');
		
		if(isset($v_usuario) && isset($v_password)){
			if($v_usuario == "admin" && $v_password == "123456"){
				$this->load->view('Docentes/index');
			}else{
				 $this->load->view('Alumnos/index');
			}
		}
	}
}

/* End of file Login.php */