<?php 

	class start extends CI_Controller {

	function __construct(){

		parent::__construct();	
		$this->load->library('session');
		
	}

	function index(){

		//echo date('Y-m-d H:m:s');		
		$this->load->view('login/identify');
		
	}

	function logout(){
		
		$datos_usuario = array();
		$this->session->unset_userdata($datos_usuario);
		$this->session->sess_destroy();
		redirect(base_url());
	}	
	
	function valida_login(){
	
		$data=array();
		$this->load->model('login_model');
		
		$datos_usuario=$this->login_model->findUser($_POST['user'], $_POST['pass']);
		$this->session->set_userdata($datos_usuario);
		
		if($this->session->userdata('firstname')){
			if (($this->session->userdata('level'))==1) {
				redirect("index.php?/admin/index");
			}else{
				if (($this->session->userdata('level'))==2) {
					redirect("index.php?/user/index"); 
				}else{
					redirect("index.php?/bar/index");
				}
			}
		}else{
			redirect(base_url());
		}
	
	}
	
}

?> 