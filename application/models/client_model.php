<?php
class client_model extends CI_Model {

	function insertLockers($number){
		$data = true;
		$sql = "
			INSERT INTO lockers (
				number
				)
				VALUES ('".$number."')
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
	}

	function  safeClient($date) {
		$data = true;
		$sql = "
			INSERT INTO entries (
				cod,
				clientname,
				cash,
				pos,
				date
				)
				VALUES (
				NULL , '".$_POST['clientname']."', '".$_POST['cash']."',
				'".$_POST['pos']."', '".$date."'
				)
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addExtraProduct() {
		$data = true;
		$sql = "
			INSERT INTO extramoney (
				cod,
				name
				)
				VALUES (
				NULL , '".$_POST['name']."'
				)
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  register_special() {
		$data = true;
		$sql = "
			INSERT INTO entries (
				cod,
				clientname,
				cash,
				pos,
				date
				)
				VALUES (
				NULL , '".$_POST['name']."', 0,
				0, '".date('Y-m-d')."'
				)
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  newClientPop() {
		$data = true;
		$sql = "
			INSERT INTO clientspop (
				cod,
				name,
				reason,
				status
				)
				VALUES (
				NULL , '".$_POST['name']."', '".$_POST['reason']."',
				'".$_POST['status']."'
				)
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  cashSaveChanges($date) {
		$data = true;
		$sql = "
			INSERT INTO cash (
				cod,
				reason,
				amount,
				modus,
				type,
				date
				)
				VALUES (
				NULL , '".$_POST['reason']."', '".$_POST['amount']."',
				'".$_POST['modus']."', '".$_POST['type']."', '".$date."'
				)
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addRegistro($cod,$cantidad) {
		$data = true;
		$sql = "
			INSERT INTO registros (
				cod,
				descripcion,
				cantidad,
				fecha
				)
				VALUES (
				NULL , '".$cod."', '".$cantidad."', '".date('Y-m-d')."'
				)
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}
	function  registerExtraProduct() {
		$data = true;
		$sql = "
			INSERT INTO registerem (
				cod,
				description,
				amount,
				date
				)
				VALUES (
				NULL , '".$_POST['name']."', '".$_POST['amount']."', '".date('Y-m-d')."'
				)
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  extraMoneyPaid() {
		$data = true;
		$sql = "
			INSERT INTO additional (
				cod,
				description,
				amount,
				cash,
				pos,
				date
				)
				VALUES (
				NULL , '".$_POST['description']."', '".$_POST['amount']."',
				'".$_POST['cash']."','".$_POST['pos']."', '".date('Y-m-d')."'
				)
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  register_billing($number) {
		$data = true;
		$sql = "
			INSERT INTO scandina_spa.billing (
				date,
				clientname,
				posfee,
				discount,
				cashfee,
				locker,
				courtesy,
				masajecorto,
				masajelargo,
				vodka,
				ron,
				whisky,
				tequila,
				pilsener,
				golden,
				suprema,
				corona,
				smirnoff,
				cokacola,
				sodas,
				water,
				icetea,
				gatorade,
				powerade,
				pro3x5,
				golden1,
				pilsener1,
				cocktailscandinavia,
				tequila1,
				cocktailscandinavia1,
				vodka2,
				ron2,
				vodkadoble,
				rondoble,
				whiskydoble,
				tequiladoble,
				botellavino,
				botellaron,
				botellavodka,
				vasohielo,
				auxpilsener,
				auxgolden,
				tequilac,
				tequilac1,
				tequilacdoble,
				energizer,
				vodkafin,
				vodkafindoble,
				sunride,
				sunridedoble,
				tequilajc,
				tequilajcdoble,
				heineken,
				aguap,
				cadejo,
				cajetillag,
				cajetillap,
				cadejopro,
				remainingc,
				cadejopromocion,
				botellavino2,
				popper,
				michelada,
				lub,
				bombay,
				bombaydoble,
				budlight,
				whiskychivas,
				whiskychivasdoble,
				condon,
				depaxilas,
				depbrazos,
				depnariz,
				deppecho,
				depabdomen,
				deppechoabdomen,
				depanogluteos,
				depparteintima,
				depespalda,
				deppiernas,
				deppanomuslo,
				facialscan,
				facialprof,
				bañador,
				ropapm,
				ropap,
				suspensor,
				hilo,
				pulseras,
				short,
				acc1,
				acc2,
				acc3,
				regia,
				stela,
				santacruz,
				michelob,
				modelo,
				gin,
				jager,
				jagerbomb,
				greygoose,
				greygoosedoble,
				starkling,
				cabro,
				snack,
				suprema1,
				cabro1,
				michelob1,
				stela1,
				corona1
				)

				SELECT

				lockers.date,
				lockers.user,
				lockers.pos,
				lockers.discount,
				lockers.cash,
				lockers.number,
				lockers.courtesy,
				lockers.masajecorto,
				lockers.masajelargo,
				lockers.vodka,
				lockers.ron,
				lockers.whisky,
				lockers.tequila,
				lockers.pilsener,
				lockers.golden,
				lockers.suprema,
				lockers.corona,
				lockers.smirnoff,
				lockers.cokacola,
				lockers.sodas,
				lockers.water,
				lockers.icetea,
				lockers.gatorade,
				lockers.powerade,
				lockers.pro3x5,
				lockers.golden1,
				lockers.pilsener1,
				lockers.cocktailscandinavia,
				lockers.tequila1,
				lockers.cocktailscandinavia1,
				lockers.vodka2,
				lockers.ron2,
				lockers.vodkadoble,
				lockers.rondoble,
				lockers.whiskydoble,
				lockers.tequiladoble,
				lockers.botellavino,
				lockers.botellaron,
				lockers.botellavodka,
				lockers.vasohielo,
				lockers.auxpilsener,
				lockers.auxgolden,
				lockers.tequilac,
				lockers.tequilac1,
				lockers.tequilacdoble,
				lockers.energizer,
				lockers.vodkafin,
				lockers.vodkafindoble,
				lockers.sunride,
				lockers.sunridedoble,
				lockers.tequilajc,
				lockers.tequilajcdoble,
				lockers.heineken,
				lockers.aguap,
				lockers.cadejo,
				lockers.cajetillag,
				lockers.cajetillap,
				lockers.cadejopro,
				lockers.remainingc,
				lockers.cadejopromocion,
				lockers.botellavino2,
				lockers.popper,
				lockers.michelada,
				lockers.lub,
				lockers.bombay,
				lockers.bombaydoble,
				lockers.budlight,
				lockers.whiskychivas,
				lockers.whiskychivasdoble,
				lockers.condon,
				lockers.depaxilas,
				lockers.depbrazos,
				lockers.depnariz,
				lockers.deppecho,
				lockers.depabdomen,
				lockers.deppechoabdomen,
				lockers.depanogluteos,
				lockers.depparteintima,
				lockers.depespalda,
				lockers.deppiernas,
				lockers.deppanomuslo,
				lockers.facialscan,
				lockers.facialprof,
				lockers.bañador,
				lockers.ropapm,
				lockers.ropap,
				lockers.suspensor,
				lockers.hilo,
				lockers.pulseras,
				lockers.short,
				lockers.acc1,
				lockers.acc2,
				lockers.acc3,
				lockers.regia,
				lockers.stela,
				lockers.santacruz,
				lockers.michelob,
				lockers.modelo,
				lockers.gin,
				lockers.jager,
				lockers.jagerbomb,
				lockers.greygoose,
				lockers.greygoosedoble,
				lockers.starkling,
				lockers.cabro,
				lockers.snack,
				lockers.suprema1,
				lockers.cabro1,
				lockers.michelob1,
				lockers.stela1,
				lockers.corona1

				FROM lockers WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  clientExit() {
		$data = true;
		$sql = "
			UPDATE billing SET cashexit='".$_POST['cash']."', posexit='".$_POST['pos']."' WHERE locker='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  specialExit() {
		$data = true;
		$sql = "
			UPDATE specials SET onside=0 WHERE cod='".$_POST['codspecial']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  updateInventoryEM() {
		$data = true;
		$sql = "
			UPDATE extramoney SET amount=amount-1 WHERE name='".$_POST['description']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  enableLockersOn($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET available='1' WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  register_locker($masaje) {
		$data = true;
		$sql = "
			UPDATE lockers SET user='".$_POST['clientname']."',
			cash='".$_POST['cash']."', pos='".$_POST['pos']."', masajecorto='".$masaje."', date=NOW(),
			available='0' WHERE number='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  register_lockerSpecial() {
		$data = true;
		$sql = "
			UPDATE lockers SET user='".$_POST['name']."', special='1', date=NOW(),
			available='0',codspecial='".$_POST['cod']."' WHERE number='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  updatePromotion($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET remaining='0' WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}


	function  updatePromotionC($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET remainingc='0' WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  onside() {
		$data = true;
		$sql = "
			UPDATE specials SET onside='1', entradas=entradas+1 WHERE cod='".$_POST['cod']."'
			";
		echo $sql;
		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  onsideM() {
		$data = true;
		$sql = "
			UPDATE specials SET onside='1' WHERE cod='".$_POST['cod']."'
			";
		echo $sql;
		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  controlInventory($cod,$amount) {
		$data = true;
		$sql = "
			UPDATE inventory SET amount=amount-'".$amount."' WHERE cod='".$cod."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addInventory($cod,$amount) {
		$data = true;
		$sql = "
			UPDATE inventory SET amount=amount+'".$amount."' WHERE cod='".$cod."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  amountExtraProduct() {
		$data = true;
		$sql = "
			UPDATE extramoney SET amount=amount+'".$_POST['amount']."' WHERE cod='".$_POST['cod']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addCocktail($cocktail,$vodka) {
		$data = true;
		$sql = "
			UPDATE inventory SET amount=amount+'".$cocktail."' WHERE cod=20
			";

		$this->db->query($sql);
		$sql1 = "
			UPDATE inventory SET amount=amount-'".$vodka."' WHERE cod=7
			";
		$this->db->query($sql1);
		$this->db->close();
		return $data;
		
	}

	function  editInventory($cod,$amount) {
		$data = true;
		$sql = "
			UPDATE inventory SET amount='".$amount."' WHERE cod='".$cod."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  freeLocker($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET 
				date='0000-00-00',
				special='0',
				user='',
				cash='0',
				pos='0',
				discount='0',
				courtesy='0',
				courtesye='0',
				remaining='0',
				masajecorto='0',
				masajelargo='0',
				vodka='0',
				ron='0',
				whisky='0',
				tequila='0',
				pilsener='0',
				golden='0',
				suprema='0',
				corona='0',
				smirnoff='0',
				cokacola='0',
				sodas='0',
				water='0',
				icetea='0',
				gatorade='0',
				powerade='0',
				pro3x5='0',
				golden1='0',
				pilsener1='0',
				cocktailscandinavia='0',
				tequila1='0',
				cocktailscandinavia1='0',
				vodka2='0',
				ron2='0',
				vodkadoble='0',
				rondoble='0',
				whiskydoble='0',
				tequiladoble='0',
				botellavino='0',
				botellaron='0',
				botellavodka='0',
				vasohielo='0',
				auxpilsener='0',
				auxgolden='0',
				codspecial='0',
				tequilac='0',
				tequilac1='0',
				tequilacdoble='0',
				energizer='0',
				vodkafin='0',
				vodkafindoble='0',
				sunride='0',
				sunridedoble='0',
				tequilajc='0',
				tequilajcdoble='0',
				heineken='0',
				aguap='0',
				cadejo='0',
				cajetillag='0',
				cajetillap='0',
				cadejopro='0',
				remainingc='0',
				cadejopromocion='0',
				botellavino2='0',
				popper='0',
				michelada='0',
				lub='0',
				bombay='0',
				bombaydoble='0',
				budlight='0',
				whiskychivas='0',
				whiskychivasdoble='0',
				condon='0',
				depaxilas='0',
				depbrazos='0',
				depnariz='0',
				deppecho='0',
				depabdomen='0',
				deppechoabdomen='0',
				depanogluteos='0',
				depparteintima='0',
				depespalda='0',
				deppiernas='0',
				deppanomuslo='0',
				facialscan='0',
				facialprof='0',
				bañador='0',
				ropapm='0',
				ropap='0',
				suspensor='0',
				hilo='0',
				pulseras='0',
				short='0',
				acc1='0',
				acc2='0',
				acc3='0',
				regia='0',
				stela='0',
				santacruz='0',
				michelob='0',
				modelo='0',
				gin='0',
				jager='0',
				jagerbomb='0',
				greygoose='0',
				greygoosedoble='0',
				starkling='0',
				cabro='0',
				snack='0',
				suprema1='0',
				cabro1='0',
				michelob1='0',
				stela1='0',
				corona1='0'

				WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function getAvailableLocker() {
		
		$data = array();
		$sql = "select * from lockers where available='1' order by CAST(number as UNSIGNED)";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getAdmin() {
		
		$data = array();
		$sql = "select * from login where level='1'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getSpecial($cod) {
		
		$data = array();
		$sql = "select * from specials where cod='".$cod."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function recordsCash() {
		
		$data = array();
		$sql = "select * from cash where date='".date('Y-m-d')."' order by cod desc";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function littlecash($date) {
		
		$data = array();
		$sql = "select * from cash where modus=1 and date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function withdraw($date) {
		
		$data = array();
		$sql = "select * from cash where type=0 and date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function ticketPosEntries($date) {
		
		$data = array();
		$sql = "select * from entries where pos > 0 and date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function ticketPosExtra($date) {
		
		$data = array();
		$sql = "select * from additional where pos > 0 and date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function circulando($date) {
		
		$data = array();
		$sql = "select * from lockers where available = 0";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function recordToday($date) {
		
		$data = array();
		$date= date('Y-m-d');
		$sql = "select * from billing where date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function recordTodayAdditional($date) {
		
		$data = array();
		$date= date('Y-m-d');
		$sql = "select * from additional where date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function checkInDay() {
		
		$data = array();
		$sql = "select * from entries where date='".$_POST['year2']."-".$_POST['month2']."-".$_POST['day']."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function fullRecordDay() {
		
		$data = array();
		$sql = "select * from billing where date='".$_POST['year2']."-".$_POST['month2']."-".$_POST['day']."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}


	function getMesEspeciales() {
		
		$data = array();
		$sql = "select mes from specials limit 1";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data[0];
		
	}

	function extraMoneyProducts() {
		
		$data = array();
		$sql = "select * from extramoney";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function registersEM() {
		
		$data = array();
		$sql = "select * from registerem order by date desc limit 20 ";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function fullRecordDayToday() {
		
		$data = array();
		$sql = "select * from billing where date='".date('Y-m-d')."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function RecordDay($date) {
		
		$data = array();
		$sql = "select * from billing where date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}


	function dayAdditional() {
		
		$data = array();
		$sql = "select * from additional where date='".$_POST['year2']."-".$_POST['month2']."-".$_POST['day']."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function checkInMonth() {
		
		$month=$_POST['month'];
		$year=$_POST['year'];
		$lastDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$data = array();
		$sql = "select * from entries where date>='".$year."-".$month."-01' and date<='".$year."-".$month."-".$lastDay."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function fullRecordMonth() {
		
		$month=$_POST['month'];
		$year=$_POST['year'];
		$lastDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$data = array();
		$sql = "select * from billing where date>='".$year."-".$month."-01' and date<='".$year."-".$month."-".$lastDay."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function monthAdditional() {
		
		$month=$_POST['month'];
		$year=$_POST['year'];
		$lastDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$data = array();
		$sql = "select * from additional where date>='".$year."-".$month."-01' and date<='".$year."-".$month."-".$lastDay."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function dayAdditional2($date) {
		
		$data = array();
		$sql = "select * from additional where date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getEntries($date) {
		
		$data = array();
		$sql = "select * from entries where date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function registros() {
		
		$data = array();
		$sql = "select (select description from inventory where cod=registros.descripcion), cantidad, fecha from registros order by cod desc limit 100";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getRemaining($number) {
		
		$data = array();
		$sql = "select * from lockers where number='".$number."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function enableLockers() {
		
		$data = array();
		$sql = "select * from lockers where available='2'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function clientsPop() {
		
		$data = array();
		$sql = "select * from clientspop order by status";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getAvailableLockers() {

		$data = array();
		$sql = "select * from lockers order by available, CAST(number AS INT);";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;

	}

	function getAvailableSpecials() {

		$data = array();
		$sql = "select * from specials where (onside=0 and entradas<maxentradas) order by cod";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;

	}

	function getLocker($number){
		
		$data = array();
		$sql = "select * from lockers where number='".$number."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getMassages($start,$end){
		
		$data = array();
		$sql = "select * from billing where (masajecorto>0 OR masajelargo>0) AND date BETWEEN '{$start}' AND '{$end}'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getDepilations($start,$end){
		
		$data = array();
		$sql = "select * from billing where (depaxilas>0 OR depbrazos>0 OR depnariz>0 OR deppecho>0 OR depabdomen>0 OR deppechoabdomen>0 OR depanogluteos>0 OR depparteintima>0 OR depespalda>0 OR deppiernas>0) AND date BETWEEN '{$start}' AND '{$end}'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function inventory(){
		
		$data = array();
		$sql = "select * from inventory";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function  addMasaje1($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET masajecorto=masajecorto+1 WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addLub($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET lub=lub+1 WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  updateMesEspeciales($mes) {
		$data = true;
		$sql = "
			UPDATE specials SET mes='".$mes."', entradas=0
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addPopper($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET popper=popper+1 WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addCondon($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET condon=condon+1 WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  discount() {
		$data = true;
		$sql = "
			UPDATE lockers SET 	discount='".$_POST['discount']."' WHERE number='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  remaining() {
		$data = true;
		$sql = "
			UPDATE lockers SET remaining=remaining+3 WHERE number='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  remainingc() {
		$data = true;
		$sql = "
			UPDATE lockers SET remainingc=remainingc+3 WHERE number='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  pg3x5() {
		$data = true;
		$sql = "
			UPDATE lockers SET pro3x5=pro3x5 +1 WHERE number='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  pcadejo() {
		$data = true;
		$sql = "
			UPDATE lockers SET cadejopro=cadejopro +1 WHERE number='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  giveDrink($number,$type) {
		$data = true;
		$sql = "
			UPDATE lockers SET ".$type."=".$type."+1 WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  editLocker() {
		$data = true;
		$sql = "
			UPDATE lockers SET courtesy='".$_POST['drink']."', 
								masajecorto='".$_POST['masajecorto']."', 
								masajelargo='".$_POST['masajelargo']."', 
								vodka='".$_POST['vodka']."',
								vodka2='".$_POST['vodka2']."',
								ron='".$_POST['ron']."',
								ron2='".$_POST['ron2']."',
								whisky='".$_POST['whisky']."',
								whiskydoble='".$_POST['whiskydoble']."',
								tequiladoble='".$_POST['tequiladoble']."',
								pilsener='".$_POST['pilsener']."',
								pilsener1='".$_POST['pilsener1']."',
								golden='".$_POST['golden']."',
								golden1='".$_POST['golden1']."',
								pro3x5='".$_POST['3x5']."',
								suprema='".$_POST['suprema']."',
								corona='".$_POST['corona']."',
								smirnoff='".$_POST['smirnoff']."',
								cocktailscandinavia='".$_POST['cocktailscandinavia']."',
								cocktailscandinavia1='".$_POST['cocktailscandinavia1']."',
								cokacola='".$_POST['cokacola']."',
								sodas='".$_POST['sodas']."',
								water='".$_POST['water']."',
								icetea='".$_POST['icetea']."',
								gatorade='".$_POST['gatorade']."',
								powerade='".$_POST['powerade']."',
								vodkadoble='".$_POST['vodkadoble']."',
								rondoble='".$_POST['rondoble']."',
								tequila='".$_POST['tequila']."',
								tequila1='".$_POST['tequila1']."',
								botellavino='".$_POST['botellavino']."',
								botellaron='".$_POST['botellaron']."',
								botellavodka='".$_POST['botellavodka']."',
								vasohielo='".$_POST['vasohielo']."'

								WHERE number='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addMasaje2($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET masajelargo=masajelargo+1 WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  enableLocker($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET available='1' WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  updateLocker($number) {
		$data = true;
		$sql = "
			UPDATE lockers SET available='2' WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addDrink($number,$type) {
		$data = true;
		$sql = "
			UPDATE lockers SET remaining=remaining-1, ".$type."=".$type."+1 WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  addDrinkC($number,$type) {
		$data = true;
		$sql = "
			UPDATE lockers SET remainingc=remainingc-1, ".$type."=".$type."+1 WHERE number='".$number."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function  giveCourtesy() {
		$data = true;
		$sql = "
			UPDATE lockers SET courtesy='".$_POST['drink']."', courtesye='1' WHERE number='".$_POST['locker']."'
			";

		$this->db->query($sql);
		$this->db->close();
		return $data;
		
	}

	function getMoneyTodayExit($date){
		
		$data = array();
		$sql = "select * from billing where date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getMoneyTodayFee($date){
		
		$data = array();
		$sql = "select * from entries where date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getLockersCashToday($date){
		
		$data = array();
		$sql = "select * from billing where paymenttypeexit=1 and date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function extraMoneyToday($date){
		
		$data = array();
		$sql = "select * from additional where date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getEntriesPOSToday($date){
		
		$data = array();
		$sql = "select * from entries where (paymenttype=2 or paymenttype=3) and date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function getLockersPOSToday($date){
		
		$data = array();
		$sql = "select * from billing where (paymenttypeexit=2 or paymenttypeexit=3) and date='".$date."'";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data[] = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
		
	}

	function  validate($level) {
		$data = array();
		$sql = "
			select 
				* 
			from 
				login
			where 
				level='".$level."'
				";

		$res = $this->db->query($sql);
		if ($res->num_rows()>0){
			foreach ($res->result_array() as $row){
			$data = $row;
			}
		}
		$res->free_result();
		$this->db->close();
		return $data;
	}

	function clientPopDelete() {
		
		$sql = "delete from clientspop where cod='".$_POST['cod']."'";
		$this->db->query($sql);
		$this->db->close();
		return;
	}

}

?>