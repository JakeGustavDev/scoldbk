<?php
class bar extends CI_Controller{

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
		$validate = $this->client_model->validate(3);
		if ($this->session->userdata('id')==$validate['id']) {
			$data = array();
			$this->load->model('client_model');
			$data['numbers'] = $this->client_model->getAvailableLocker();
			$data['specials'] = $this->client_model->getAvailableSpecials();
			$data['lockers'] = $this->client_model->getAvailableLockers();
			$this->load->view('bar/main', $data);
		}else{
			$datos_usuario = array();
			$this->session->unset_userdata($datos_usuario);
			$this->session->sess_destroy();
			redirect(base_url());
		}

	}

	function lockerbar(){

		$data = array();
		$this->load->model('client_model');
		$data['locker']= $this->client_model->getLocker($_GET['number']);
		$this->load->view('client/lockerbar',$data);

	}

	function giveCourtesy(){
		
		$data= array();
		$this->load->model('client_model');
		$this->client_model->giveCourtesy();
		$this->load->view('done');
	
	}

	function giveDrink(){

		$data= array();
		$typecount=64; //siguiente desocupado
		$type=array("vodka","vodkadoble","vodka2","ron","rondoble","ron2","whisky","whiskydoble","tequila","tequiladoble","tequila1","pilsener","pilsener1","golden","golden1","3x5","6x10","suprema","corona","smirnoff","cocktailscandinavia","cocktailscandinavia1","sodas","water","icetea","gatorade","powerade","botellavino","botellaron","botellavodka","cokacola","vasohielo","tequilac","tequilac1","tequilacdoble","energizer","vodkafin","vodkafindoble","tequilajc","tequilajcdoble","heineken","aguap","cadejo","cajetillag","cajetillap","botellavino2","popper","michelada","bombay","bombaydoble","budlight","whiskychivas","whiskychivasdoble","regia","stela","santacruz","michelob","modelo","gin","jager","jagerbomb","greygoose","greygoosedoble","starkling","cabro","snack");
		$this->load->model('client_model');
		$this->client_model->giveDrink($_GET['locker'],$type[$_GET['type']]);
		$data['locker']= $this->client_model->getLocker($_GET['locker']);
		redirect('index.php?/bar/lockerbar?number='.$_GET["locker"]);

	}

	function remaining(){
		
		$data= array();
		$this->load->model('client_model');
		$this->client_model->remaining();
		$this->client_model->pg3x5();
		$data['locker']= $this->client_model->getLocker($_POST['locker']);
		$this->load->view('client/lockerbar',$data);
	
	}

	function remainingc(){
		
		$data= array();
		$this->load->model('client_model');
		$this->client_model->remainingc();
		$this->client_model->pcadejo();
		$data['locker']= $this->client_model->getLocker($_POST['locker']);
		$this->load->view('client/lockerbar',$data);
	
	}

	function addDrink(){
		
		$data= array();
		$this->load->model('client_model');
		$locker=$this->client_model->getRemaining($_GET['locker']);
		if ($locker[0]['remaining']<=0) {
			$locker=$this->client_model->updatePromotion($_GET['locker']);
			$data['locker']= $this->client_model->getLocker($_GET['locker']);
			redirect('index.php?/bar/lockerbar?number='.$_GET["locker"]);
		}else{
			$type=array("auxpilsener","auxgolden");
			$this->client_model->addDrink($_GET['locker'],$type[$_GET['type']]);
			$data['locker']= $this->client_model->getLocker($_GET['locker']);
			redirect('index.php?/bar/lockerbar?number='.$_GET["locker"]);
		}
	
	}

	function addDrinkC(){
		
		$data= array();
		$this->load->model('client_model');
		$locker=$this->client_model->getRemaining($_GET['locker']);
		if ($locker[0]['remainingc']<=0) {
			$locker=$this->client_model->updatePromotionC($_GET['locker']);
			$data['locker']= $this->client_model->getLocker($_GET['locker']);
			redirect('index.php?/bar/lockerbar?number='.$_GET["locker"]);
		}else{
			$type=array("cadejopromocion");
			$this->client_model->addDrinkC($_GET['locker'],$type[$_GET['type']]);
			$data['locker']= $this->client_model->getLocker($_GET['locker']);
			redirect('index.php?/bar/lockerbar?number='.$_GET["locker"]);
		}
	
	}

	function martinDrink(){
			
		$data= array();
		$this->load->model('client_model');
		$this->client_model->controlInventory($_GET['cod'],$_GET['amount']);
		redirect('index.php?/client/martin');
	
	}	

	function inventory(){
		
		$data= array();
		$this->load->model('client_model');
		$data['inventory']= $this->client_model->inventory();
		$data['registros']= $this->client_model->registros();
		//echo "<pre>";
		//print_r($data['registros']);
		$validate = $this->client_model->validate(1);
		if ($this->session->userdata('level')==1) {
			$this->load->view('admin/inventory',$data);
		}else{
			$this->load->view('bar/inventory',$data);
		}
	
	}

	function addInventory(){

		$changes= array(
			array(2,$_POST['vodkared']),
			array(3,$_POST['ron']),
			array(4,$_POST['whisky']),
			array(5,$_POST['tequila']),
			array(8,$_POST['agua600']),
			array(9,$_POST['agua335']),
			array(10,$_POST['pilsener']),
			array(11,$_POST['golden']),
			array(12,$_POST['suprema']),
			array(13,$_POST['corona']),
			array(14,$_POST['smirnoff']),
			array(15,$_POST['cokacola']),
			array(16,$_POST['sodas']),
			array(17,$_POST['icetea']),
			array(18,$_POST['gatorade']),
			array(19,$_POST['powerade']),
			array(20,$_POST['heineken']),
			array(22,$_POST['tequilajc']),
			array(23,$_POST['botellavino']),
			array(24,$_POST['cadejo']),
			array(25,$_POST['cajetillag']),
			array(26,$_POST['cajetillap']),
			array(27,$_POST['santacruz']),
			array(28,$_POST['michelob']),
			array(29,$_POST['stela']),
			array(30,$_POST['regia']),
			array(31,$_POST['cabro']),
			array(32,$_POST['starkling'])
		);
		//echo "<pre>";
		//print_r($changes);
		$data = array();
		$this->load->model('client_model');
		for ($i=0; $i < 28; $i++) {
	    	echo $changes[$i][0];
	    	if (isset($changes[$i])) {
	    		if($changes[$i][1]>0){
	    			$this->client_model->addRegistro($changes[$i][0],$changes[$i][1]);
	    		}
	    		$this->client_model->addInventory($changes[$i][0],$changes[$i][1]);
	    	}
	    }
	    //if ($_POST['cocktail']>0) {
		 //   $cocktail=$_POST['cocktail']*5500;
		//    $vodka=1750/3;
	   // 	$this->client_model->addCocktail($cocktail,$vodka);
	   // }
		redirect('index.php?/bar/inventory');

	}

	function editInventory(){

		$changes= array(
			array(1,$_POST['redvodka']),
			array(2,$_POST['blackvodka']),
			array(3,$_POST['ron']),
			array(4,$_POST['whisky']),
			array(5,$_POST['tequiladesc']),
			array(6,$_POST['tequila']),
			array(7,$_POST['vodkanacional']),
			array(8,$_POST['agua600']),
			array(9,$_POST['agua335']),
			array(10,$_POST['pilsener']),
			array(11,$_POST['golden']),
			array(12,$_POST['suprema']),
			array(13,$_POST['corona']),
			array(14,$_POST['smirnoff']),
			array(15,$_POST['cokacola']),
			array(16,$_POST['sodas']),
			array(17,$_POST['icetea']),
			array(18,$_POST['gatorade']),
			array(19,$_POST['powerade']),
			array(20,$_POST['cocktail']),
			array(21,$_POST['vino'])
		);
		// echo "<pre>";
		// print_r($changes);
		$data = array();
		$this->load->model('client_model');
		for ($i=0; $i < 21; $i++) {
	    	echo $changes[$i][0]; 
	    	$this->client_model->editInventory($changes[$i][0],$changes[$i][1]);
	    }
		redirect('index.php?/bar/inventory');

	}


}

?>