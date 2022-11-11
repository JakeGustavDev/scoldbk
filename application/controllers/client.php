<?php 

	class client extends CI_Controller{

		function __construct(){

			parent::__construct();	
			$this->load->library('session');

			if($this->session->userdata('id')==''){
				redirect(base_url());
			}
			
		}

		function index(){

		}

		function registration(){

			// $validate = array();
			// $this->load->model('client_model');
			// $validate = $this->client_model->validate(2);
			// if ($_SESSION['id']==$validate['id']) {
				$data = array();
				$this->load->model('client_model');
				$data['lockers'] = $this->client_model->getAvailableLocker();
				//echo "<pre>";
				//print_r($data['lockers']);
				$this->load->view('client/registration',$data);
			// }else{
			// 	$datos_usuario = array();
			// 	$this->session->unset_userdata($datos_usuario);
			// 	$this->session->sess_destroy();
			// 	redirect(base_url());
			// }

		}

		function special(){
			
			$data = array();
			$this->load->model('client_model');
			$data['numbers'] = $this->client_model->getAvailableLocker();
			$data['special'] = $this->client_model->getSpecial($_GET['cod']);
			$this->load->view('client/special',$data);
		
		}

		function extraMoney(){

			$data = array();
			$date=date('Y-m-d');
			$this->load->model('client_model');
			$data['extra'] = $this->client_model->extraMoneyToday($date);
			$data['extraproducts'] = $this->client_model->extraMoneyProducts();
			$data['registers'] = $this->client_model->registersEM();
			$this->load->view('client/extramoney', $data);
		
		}

		function addExtraProduct(){
			$this->load->model('client_model');
			$this->client_model->addExtraProduct();
			redirect(base_url().'/index.php?/client/extraMoney');
		}

		function amountExtraProduct(){
			$this->load->model('client_model');
			$this->client_model->amountExtraProduct();
			$this->client_model->registerExtraProduct();
			redirect(base_url().'/index.php?/client/extraMoney');
		}

		function report(){
			
			$this->load->model('client_model');
			$result= $this->client_model->RecordDay($_POST['date']);
			$additional= $this->client_model->dayAdditional2($_POST['date']);
			$extraTotal=0;
			foreach ($additional as $extraMoney) {
				$extraTotal=$extraTotal+$extraMoney['cash']+$extraMoney['pos'];
			}
			$masaje1=0;
			$masaje2=0;
			$vodka=0;
			$vodkadoble=0;
			$vodka2=0;
			$ron=0;
			$rondoble=0;
			$ron2=0;
			$whisky=0;
			$whiskydoble=0;
			$tequila=0;
			$tequiladoble=0;
			$tequila1=0;
			$pilsener=0;
			$pilsener1=0;
			$golden=0;
			$golden1=0;
			$pro3x5=0;
			$auxpilsener=0;
			$auxgolden=0;
			$suprema=0;
			$corona=0;
			$smirnoff=0;
			$cocktailscandinavia=0;
			$cocktailscandinavia1=0;
			$cokacola=0;
			$sodas=0;
			$water=0;
			$icetea=0;
			$gatorade=0;
			$powerade=0;
			$botellavino=0;
			$botellaron=0;
			$botellavodka=0;
			$sunride=0;
			$sunridedoble=0;
			$vodkafin=0;
			$vodkafindoble=0;
			$vasohielo=0;
			$cadejo=0;
			$cadejopromocion=0;
			$waterc=0;
			$cocktailc=0;
			$pilsenerc=0;
			$goldenc=0;
			$vodkac=0;
			$ronc=0;
			$poweradec=0;
			$fees=0;
			$neto=0;
			$desc=0;
			$total=0;
			foreach ($result as $consumption) {
				
				if ($consumption['courtesy']==1) {

					$waterc=$waterc+1;

				}elseif ($consumption['courtesy']==2) {

					$cocktailc=$cocktailc+1;

				}elseif ($consumption['courtesy']==3) {

					$pilsenerc=$pilsenerc+1;

				}elseif ($consumption['courtesy']==4) {

					$goldenc=$goldenc+1;

				}elseif ($consumption['courtesy']==5) {

					$vodkac=$vodkac+1;

				}elseif ($consumption['courtesy']==6) {

					$ronc=$ronc+1;

				}elseif ($consumption['courtesy']==7) {

					$poweradec=$poweradec+1;
				}

				$masaje1=$masaje1+$consumption['masajecorto'];
				$masaje2=$masaje2+$consumption['masajelargo'];
				$vodka=$vodka+$consumption['vodka'];
				$vodkadoble=$vodkadoble+$consumption['vodkadoble'];
				$vodka2=$vodka2+$consumption['vodka2'];
				$ron=$ron+$consumption['ron'];
				$rondoble=$rondoble+$consumption['rondoble'];
				$ron2=$ron2+$consumption['ron2'];
				$whisky=$whisky+$consumption['whisky'];
				$whiskydoble=$whiskydoble+$consumption['whiskydoble'];
				$tequila=$tequila+$consumption['tequila'];
				$tequiladoble=$tequiladoble+$consumption['tequiladoble'];
				$tequila1=$tequila1+$consumption['tequila1'];
				$pilsener=$pilsener+$consumption['pilsener'];
				$pilsener1=$pilsener1+$consumption['pilsener1'];
				$golden=$golden+$consumption['golden'];
				$golden1=$golden1+$consumption['golden1'];
				$pro3x5=$pro3x5+$consumption['pro3x5'];
				$auxpilsener=$auxpilsener+$consumption['auxpilsener'];
				$auxgolden=$auxgolden+$consumption['auxgolden'];
				$suprema=$suprema+$consumption['suprema'];
				$corona=$corona+$consumption['corona'];
				$smirnoff=$smirnoff+$consumption['smirnoff'];
				$cocktailscandinavia=$cocktailscandinavia+$consumption['cocktailscandinavia'];
				$cocktailscandinavia1=$cocktailscandinavia1+$consumption['cocktailscandinavia1'];
				$cokacola=$cokacola+$consumption['cokacola'];
				$sodas=$sodas+$consumption['sodas'];
				$water=$water+$consumption['water'];
				$icetea=$icetea+$consumption['icetea'];
				$gatorade=$gatorade+$consumption['gatorade'];
				$powerade=$powerade+$consumption['powerade'];
				$botellavino=$botellavino+$consumption['botellavino'];
				$botellaron=$botellaron+$consumption['botellaron'];
				$botellavodka=$botellavodka+$consumption['botellavodka'];
				$sunride=$sunride+$consumption['sunride'];
				$sunridedoble=$sunridedoble+$consumption['sunridedoble'];
				$vodkafin=$vodkafin+$consumption['vodkafin'];
				$vodkafindoble=$vodkafindoble+$consumption['vodkafindoble'];
				$vasohielo=$vasohielo+$consumption['vasohielo'];
				$cadejo=$cadejo+$consumption['cadejo'];
				$cadejopromocion=$cadejopromocion+$consumption['cadejopromocion'];

				$fees=$fees+$consumption['cashfee']+$consumption['posfee'];

				$neto=$neto+$consumption['masajecorto'] * 15+
							$consumption['masajelargo'] * 25+
							$consumption['vodka'] * 3+
							$consumption['vodkadoble'] * 5+
							$consumption['vodka2'] * 2+
							$consumption['ron'] * 3+
							$consumption['rondoble'] * 5+
							$consumption['ron2'] * 2+
							$consumption['whisky'] * 6+
							$consumption['whiskydoble'] * 8+
							$consumption['tequila'] * 3+
							$consumption['tequiladoble'] * 5+
							$consumption['tequila1'] * 1+
							$consumption['pilsener'] * 2+
							$consumption['pilsener1'] * 1+
							$consumption['golden'] * 2+
							$consumption['golden1'] * 1+
							$consumption['pro3x5'] * 5+
							$consumption['suprema'] * 2.5+
							$consumption['corona'] * 3+
							$consumption['smirnoff'] * 3.5+
							$consumption['cocktailscandinavia'] * 2+
							$consumption['cocktailscandinavia1'] * 1+
							$consumption['sodas'] * 1.75+
							$consumption['water'] * 1.25+
							$consumption['icetea'] * 1.75+
							$consumption['gatorade'] * 2+
							$consumption['powerade'] * 1+
							$consumption['botellavino'] * 12+
							$consumption['botellaron'] * 20+
							$consumption['botellavodka'] * 20+
							$consumption['cokacola'] * 1.75+
							$consumption['sunride'] * 3+
							$consumption['sunridedoble'] * 5+
							$consumption['vodkafin'] * 4+
							$consumption['vodkafindoble'] * 6+
							$consumption['vasohielo'] * 0.1;

			}
			$total=$neto+$fees+$extraTotal;
			$this->load->library('report');
			$this->report->Info($_POST['date']);
			$this->report->SetTitle('Reporte');
			$this->report->AddPage();
			$this->report->SetFont('Arial','B',11);
			$this->report->Cell(47.5,5,utf8_decode('Cortesía'),1,0,'C');
			$this->report->Cell(47.5,5,utf8_decode('Cantidad'),1,0,'C');			
			$this->report->Cell(47.5,5,utf8_decode('Producido Consumos'),1,0,'C');
			$this->report->Cell(47.5,5,utf8_decode('$'.$neto),1,0,'C');
			$this->report->Ln(5);
			$this->report->SetFont('Arial','',9);
			$this->report->Cell(47.5,5,utf8_decode('Agua Cortesía'),1,0,'C');
			$this->report->Cell(47.5,5,$waterc,1,0,'C');
			$this->report->SetFont('Arial','B',11);
			$this->report->Cell(47.5,5,utf8_decode('Dinero Adicional'),1,0,'C');
			$this->report->Cell(47.5,5,utf8_decode('$'.$extraTotal),1,0,'C');
			$this->report->Ln(5); 
			$this->report->SetFont('Arial','',9);
			$this->report->Cell(47.5,5,utf8_decode('Cocktail Cortesía'),1,0,'C');
			$this->report->Cell(47.5,5,$cocktailc,1,0,'C');
			$this->report->SetFont('Arial','B',11);
			$this->report->Cell(47.5,5,utf8_decode('Covers'),1,0,'C');
			$this->report->Cell(47.5,5,utf8_decode('$'.$fees),1,0,'C');
			$this->report->Ln(5); 
			$this->report->SetFont('Arial','',9);
			// $this->report->Cell(47.5,5,utf8_decode('Pilsener Cortesía'),1,0,'C');
			// $this->report->Cell(47.5,5,$pilsenerc,1,0,'C');
			// $this->report->Ln(5); 
			// $this->report->Cell(47.5,5,utf8_decode('Golden Cortesías'),1,0,'C');
			// $this->report->Cell(47.5,5,$goldenc,1,0,'C');
			// $this->report->Ln(5); 
			// $this->report->Cell(47.5,5,utf8_decode('Vodka Cortesía'),1,0,'C');
			// $this->report->Cell(47.5,5,$vodkac,1,0,'C');
			// $this->report->Ln(5); 
			$this->report->Cell(47.5,5,utf8_decode('Ron Cortesía'),1,0,'C');
			$this->report->Cell(47.5,5,$ronc,1,0,'C');
			$this->report->SetFont('Arial','B',11);
			$this->report->Cell(47.5,5,utf8_decode('Total'),1,0,'C');
			$this->report->Cell(47.5,5,utf8_decode('$'.$total),1,0,'C');
			$this->report->Ln(5); 
			$this->report->SetFont('Arial','',9);
			// $this->report->Cell(47.5,5,utf8_decode('Powerade Cortesía'),1,0,'C');
			// $this->report->Cell(47.5,5,$poweradec,1,0,'C');
			// $this->report->Ln(5);
			$this->report->SetFont('Arial','B',11);
			$this->report->Cell(47.5,5,utf8_decode('Consumos'),1,0,'C');
			$this->report->Cell(47.5,5,utf8_decode('Cantidad'),1,0,'C');
			$this->report->Ln(5);
			$this->report->SetFont('Arial','',9);
			$this->report->Cell(47.5,5,utf8_decode('Masaje 1'),1,0,'C');
			$this->report->Cell(47.5,5,$masaje1,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Masaje 2'),1,0,'C');
			$this->report->Cell(47.5,5,$masaje2,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Vodka Sencillo'),1,0,'C');
			$this->report->Cell(47.5,5,$vodka,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Vodka Descuento'),1,0,'C');
			$this->report->Cell(47.5,5,$vodka2,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Ron Sencillo'),1,0,'C');
			$this->report->Cell(47.5,5,$vodkadoble,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Ron Doble'),1,0,'C');
			$this->report->Cell(47.5,5,$ron,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Ron Descuento'),1,0,'C');
			$this->report->Cell(47.5,5,$ron2,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Whisky'),1,0,'C');
			$this->report->Cell(47.5,5,$whisky,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Whisky Doble'),1,0,'C');
			$this->report->Cell(47.5,5,$whiskydoble,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Tequila Sencillo'),1,0,'C');
			$this->report->Cell(47.5,5,$tequila,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Tequila Doble'),1,0,'C');
			$this->report->Cell(47.5,5,$tequiladoble,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Tequila Descuento'),1,0,'C');
			$this->report->Cell(47.5,5,$tequila1,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Pilsener'),1,0,'C');
			$this->report->Cell(47.5,5,$pilsener,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Pilsener Descuento'),1,0,'C');
			$this->report->Cell(47.5,5,$pilsener1,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Golden'),1,0,'C');
			$this->report->Cell(47.5,5,$golden,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Golden Descuento'),1,0,'C');
			$this->report->Cell(47.5,5,$golden1,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('3x5 PG'),1,0,'C');
			$this->report->Cell(47.5,5,$pro3x5,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Pilsener Promoción'),1,0,'C');
			$this->report->Cell(47.5,5,$auxpilsener,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Golden Promoción'),1,0,'C');
			$this->report->Cell(47.5,5,$auxgolden,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Cadejo'),1,0,'C');
			$this->report->Cell(47.5,5,$cadejo,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Cadejo Promoción'),1,0,'C');
			$this->report->Cell(47.5,5,$cadejopromocion,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Suprema'),1,0,'C');
			$this->report->Cell(47.5,5,$suprema,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Corona'),1,0,'C');
			$this->report->Cell(47.5,5,$corona,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Smirnoff'),1,0,'C');
			$this->report->Cell(47.5,5,$smirnoff,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Cocktail Scandinavia'),1,0,'C');
			$this->report->Cell(47.5,5,$cocktailscandinavia,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Cocktail Scandinavia Descuento'),1,0,'C');
			$this->report->Cell(47.5,5,$cocktailscandinavia1,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Coca-Cola'),1,0,'C');
			$this->report->Cell(47.5,5,$cokacola,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Sodas'),1,0,'C');
			$this->report->Cell(47.5,5,$sodas,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Botella Con Agua'),1,0,'C');
			$this->report->Cell(47.5,5,$water,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Ice Tea'),1,0,'C');
			$this->report->Cell(47.5,5,$icetea,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Gatorade'),1,0,'C');
			$this->report->Cell(47.5,5,$gatorade,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Powerade'),1,0,'C');
			$this->report->Cell(47.5,5,$powerade,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Botella Vino'),1,0,'C');
			$this->report->Cell(47.5,5,$botellavino,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Botella Ron'),1,0,'C');
			$this->report->Cell(47.5,5,$botellaron,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Botella Vodka'),1,0,'C');
			$this->report->Cell(47.5,5,$botellavodka,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Vodka Finlandia'),1,0,'C');
			$this->report->Cell(47.5,5,$vodkafin,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Vodka Finlandia Doble'),1,0,'C');
			$this->report->Cell(47.5,5,$vodkafindoble,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Sunride'),1,0,'C');
			$this->report->Cell(47.5,5,$sunride,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Sunride Doble'),1,0,'C');
			$this->report->Cell(47.5,5,$sunridedoble,1,0,'C');
			$this->report->Ln(5);
			$this->report->Cell(47.5,5,utf8_decode('Vaso Con Hielo'),1,0,'C');
			$this->report->Cell(47.5,5,$vasohielo,1,0,'C');
			$this->report->Ln(5);
			$this->report->Output("reporte.pdf", 'I');
			
		}

		function extraMoneyPaid(){
		
			$data = array();
			$this->load->model('client_model');
			$this->client_model->extraMoneyPaid();
			$this->client_model->updateInventoryEM();
			$this->load->view('done');
		
		}

		function cashregister(){

			$data = array();
			$this->load->model('client_model');
			$date=date('Y-m-d');
			//echo $date;
			$data['records'] = $this->client_model->recordsCash();
			$data['littlecash'] = $this->client_model->littlecash($date);
			$data['withdraw'] = $this->client_model->withdraw($date);
			$data['fee'] = $this->client_model->getMoneyTodayFee($date);
			$data['exit'] = $this->client_model->getMoneyTodayExit($date);
			$data['extra'] = $this->client_model->extraMoneyToday($date);
			$data['circulando'] = $this->client_model->circulando($date);
			$data['posexit'] = $this->client_model->ticketPosEntries($date);
			$data['posextra'] = $this->client_model->ticketPosExtra($date);
			//echo "<pre>";
			//print_r($data['cashlockers']);
			$this->load->view('client/cashregister',$data);

		}

		function cashSaveChanges(){
		
			$data = array();
			$date = date('Y-m-d');
			$this->load->model('client_model');
			$this->client_model->cashSaveChanges($date); 
			redirect("index.php?/client/cashregister");
		
		}

		function register_client(){
		
			$data = array();
			$date = date('Y-m-d');
			$this->load->model('client_model');
			$this->client_model->safeClient($date);
			if($_POST["masaje"]=="on"){
					$this->client_model->register_locker(1);
			}else{
					$this->client_model->register_locker(0); 
				}

			redirect("index.php?/user/index");
		
		}

		function register_special(){
		
			$data = array();
			$this->load->model('client_model');
			$this->client_model->register_special();
			$this->client_model->register_lockerSpecial();
			$this->client_model->onside();
			$this->load->view('done');
		
		}

		function insertLockers(){
			$this->load->model('client_model');
			$letras = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T"];
			for ($i=0; $i < count($letras); $i++) { 
				$this->client_model->insertLockers($letras[$i]);
			}
		}

		function giveService(){

			$data= array();
			$type=array("depaxilas","depbrazos","depnariz","deppecho","depabdomen","deppechoabdomen","depanogluteos","depparteintima","depespalda","deppiernas","depanomuslo","facialscan","facialprof","bañador","ropapm","ropap","suspensor","hilo","pulseras","short","acc1","acc2","acc3","snack");
			$this->load->model('client_model');
			$this->client_model->giveDrink($_GET['locker'],$type[$_GET['type']]);
			echo "<pre>";
			print_r($_GET);
			redirect('index.php?/client/locker?number='.$_GET["locker"]);

		}

		function editLocker(){
		
			$data = array();
			$this->load->model('client_model');
			$this->client_model->editLocker();
			$this->load->view('done');
		
		}

		function locker(){

			$data = array();
			$this->load->model('client_model');
			$data['locker']= $this->client_model->getLocker($_GET['number']);
			$data['admin']= $this->client_model->getAdmin();
			$this->load->view('client/locker',$data);

		}

		function discount(){
		
			$data= array();
			$this->load->model('client_model');
			$this->client_model->discount();
			$this->load->view('done');
		
		} 

		function enableLockersOn(){

			$lockers = count($_POST);
			$value = array_values($_POST);
			$this->load->model('client_model');
			for($i=0;$i<$lockers;$i++){
				$this->client_model->enableLockersOn($value[$i]);
			}
			// echo $lockers;
			// echo "<pre>";
			// print_r($value);
			// echo "<pre>";
			$this->load->view('done');
		
		}

		function martin(){
		
			$data = array();
			$this->load->view('admin/martin');
		
		}

		function fullRecord(){
		
			$data = array();
			$date=date('Y-m-d');
			$this->load->model('client_model');
			$data['result']= $this->client_model->recordToday($date);
			$data['additional']= $this->client_model->recordTodayAdditional($date);
			$this->load->view('admin/fullrecord',$data);
		
		}

		function fullRecordDay(){

			$data = array();
			$this->load->model('client_model');
			$data['result']= $this->client_model->fullRecordDay();
			$data['additional']= $this->client_model->dayAdditional();
			$this->load->view('admin/fullrecord',$data);

		}

		function fullRecordMonth(){

			$data = array();
			$this->load->model('client_model');
			$data['result']= $this->client_model->fullRecordMonth();
			$data['additional']= $this->client_model->monthAdditional();
			$this->load->view('admin/fullrecord',$data);

		}


		function checkIn(){
		
			$data= array();
			$this->load->view('client/checkin');
		
		}

		function checkInDay(){

			$data = array();
			$this->load->model('client_model');
			$data['result']= $this->client_model->checkInDay();
			$data['count']= count($data['result']);
			$this->load->view('result',$data);

		}

		function checkInMonth(){

			$data = array();
			$this->load->model('client_model');
			$data['result']= $this->client_model->checkInMonth();
			$data['count']= count($data['result']);
			$this->load->view('result',$data);

		}

		function lockeradmin(){

			$data = array();
			$this->load->model('client_model');
			$data['locker']= $this->client_model->getLocker($_GET['number']);
			$this->load->view('client/lockeradmin',$data);

		}

		function clientsPop(){

			$data = array();
			$this->load->model('client_model');
			$data['pop']= $this->client_model->clientsPop();
			$this->load->view('client/clientspop',$data);

		}

		function newClientPop(){

			$data = array();
			$this->load->model('client_model');
			$this->client_model->newClientPop();
			$data['pop']= $this->client_model->clientsPop();
			redirect(base_url()."index.php?/client/clientsPop");

		}

		function enableLockers(){

			$data = array();
			$this->load->model('client_model');
			$data['lockers']= $this->client_model->enableLockers();
			$this->load->view('client/enablelockers',$data);

		}

		function addMasaje(){

			$data= array();
			$this->load->model('client_model');
			if ($_GET['type']==1) {
				$this->client_model->addMasaje1($_GET['locker']);
			}else{
				$this->client_model->addMasaje2($_GET['locker']);
			}
			$this->load->view('done');


		}

		function addLub(){

			$data= array();
			$this->load->model('client_model');
			$this->client_model->addLub($_GET['locker']);
			redirect('index.php?/client/locker?number='.$_GET["locker"]);


		}

		function addPopper(){

			$data= array();
			$this->load->model('client_model');
			$this->client_model->addPopper($_GET['locker']);
			redirect('index.php?/client/locker?number='.$_GET["locker"]);


		}

		function addCondon(){

			$data= array();
			$this->load->model('client_model');
			$this->client_model->addCondon($_GET['locker']);
			redirect('index.php?/client/locker?number='.$_GET["locker"]);


		}

		function registerBilling(){

			$posted_data = array();
		    if (!empty($_POST['json'])) {
		        $posted_data = json_decode($_POST['json'], true);
		    }
		    $this->load->model('client_model');
		    for ($i=0; $i < 45; $i++) {
		    	echo $posted_data[$i][0]; 
		    	$this->client_model->controlInventory($posted_data[$i][0],$posted_data[$i][1]);
		    }
			$this->client_model->register_billing($_POST['locker']);
			$this->client_model->clientExit();
			$this->client_model->specialExit();
			$this->client_model->updateLocker($_POST['locker']);
			$this->client_model->freeLocker($_POST['locker']);
			$this->load->view('done');
		
		}

		function clientPopDelete(){
	
			$this->load->model('client_model');
			$this->client_model->clientPopDelete(); 
			echo "Cliente eliminado";
			
		}

		function reportMassages(){
			$data = array();
			$this->load->model('client_model');
			$data['massages']= $this->client_model->getMassages($_POST['start'],$_POST['end']);
			$data['depilations']= $this->client_model->getDepilations($_POST['start'],$_POST['end']);
			$data['start'] =$_POST['start'];
			$data['end'] =$_POST['end'];
			$this->load->view('client/reportmassages',$data);
		}

	}

?>