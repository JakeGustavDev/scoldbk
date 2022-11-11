<?php 

	class admin extends CI_Controller{

		function __construct(){

			parent::__construct();	
			$this->load->library('session');

		if($this->session->userdata('id')==''){
			redirect(base_url());
		}
			
		}

		function index(){

			$validate = array();
			$this->load->model('client_model');
			$validate = $this->client_model->validate(1);
			if ($this->session->userdata('level')==1) {
				$data = array();
				$this->load->model('client_model');
				$data['numbers'] = $this->client_model->getAvailableLocker();
				$data['specials'] = $this->client_model->getAvailableSpecials();
				$data['lockers'] = $this->client_model->getAvailableLockers();
				//echo "<pre>";
				//print_r($data);
				$date=date('Y-m-d');
				//echo $date;
				$data['count']=$this->client_model->getEntries($date);
				$this->load->view('admin/main',$data);
			}else{
				$datos_usuario = array();
				$this->session->unset_userdata($datos_usuario);
				$this->session->sess_destroy();
				redirect(base_url());
			}

		}

	}

?>