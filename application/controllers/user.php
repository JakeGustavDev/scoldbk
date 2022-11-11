<?php 

	class user extends CI_Controller {

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
			$validate = $this->client_model->validate(2);
			if ($this->session->userdata('id')==$validate['id']) {
				$data = array();
				$this->load->model('client_model');
				$data['numbers'] = $this->client_model->getAvailableLocker();
				$data['specials'] = $this->client_model->getAvailableSpecials();
				$data['lockers'] = $this->client_model->getAvailableLockers();
				$data['result']= $this->client_model->fullRecordDayToday();
				// echo "<pre>";
				// print_r($data['numbers']);
				$date=date('Y-m-d');
				//echo $date;
				$data['count']=$this->client_model->getEntries($date);
				$mes=intval(date('m'));
				$datas=$this->client_model->getMesEspeciales();
				if($mes!=intval($datas['mes'])){
					$this->client_model->updateMesEspeciales($mes);
				}
				$this->load->view('user/main',$data);
			}else{
				$datos_usuario = array();
				$this->session->unset_userdata($datos_usuario);
				$this->session->sess_destroy();
				redirect(base_url());
			}

		}

		function enableLocker(){
		
			$data= array();
			$this->load->model('client_model');
			$this->client_model->enableLocker($_GET['locker']);
			$this->load->view('update');
		
		}

	}

?>