<?php $this->load->view('header'); ?>
<script language="javascript">

	function confirm1(locker){
				
		if(confirm("Agregar Masaje 1?")){
		
			window.location.href = "index.php?/client/addMasaje?type=1&locker="+locker;
	
		} 

	}

	function confirm2(locker){
				
		if(confirm("Agregar Masaje 2?")){
		
			window.location.href = "index.php?/client/addMasaje?type=2&locker="+locker;
	
		} 

	}

	function confirm9(locker){
				
		//if(confirm("Agregar Lubricante?")){
		
			window.location.href = "index.php?/client/addLub?locker="+locker;
	
		//} 

	}

	function confirm4(locker){
				
		if(confirm("Agregar Popper?")){
		
			window.location.href = "index.php?/client/addPopper?locker="+locker;
	
		} 

	}

	function confirm5(locker){
				
		//if(confirm("Agregar Condon?")){
		
			window.location.href = "index.php?/client/addCondon?locker="+locker;
	
		//} 

	}

	function confirm3(urlconection,name){
				
		if(confirm("Agregar "+name+"?")){
		
			window.location.href = urlconection;
	
		} 

	}

	function verga(){

		var cash= parseInt(document.getElementsByName("cash")[0].value);
		var pos= parseInt(document.getElementsByName("pos")[0].value);
		var total= parseInt(document.getElementsByName("total")[0].value);

		if(cash+pos==total){
				
			if(confirm("Confirmar pago?")){
			
				$('#form1').submit();

			}

		}else{

			alert("La suma de los valores ingresados no son iguales al total.");
			location.reload();

		} 

	}

	function verga2(){
				
		if(confirm("Confirmar descuento?")){
		
			$('#form2').submit();

		} 

	}

	function hola(){

		alert("hola");

	}

	function passwordAC() {

		var testV = 1;
		var pass1 = prompt('Escribe tu contraseña');
		var pass = pass1.toLowerCase();
		var pass2 = ""+calcMD5(pass);
		var pass3 = "db99cfbf781078882fd6ad4f53343e0d";

		while (testV < 3) {

			if (!pass1) window.close()

				if (pass2 == pass3) {

					$('#form2').submit();

				} 

			testV+=1;
			var pass1 = prompt('¡Equivocada! Puedes volver a intentarlo.');

		}

		if (pass1.toLowerCase()!="otra" & testV ==3) window.close();
		return " ";

	}

</script>
<?php 
foreach ($locker as $user) {
?>
	<table width="900px" border="0">
		<tr>
			<td>
			<div id="accordion_locker2">
				<table border="0" align="center" width="100%"> 
					<tr>
						<td>
							<p id="l4">Locker N° <?php echo $user['number']; ?> - Ocupante: <?php echo $user['user']; ?> | Cover: <?php $cover=$user['cash']+$user['pos']; echo $cover; ?>$</p>
						</td>
					</tr>
					<tr>
						<td>
							<hr width="95%">
							<table aling="center" border="0">
								<tr valing="top">
									<td>
										<table id="" aling="center" border="0" width="250px">
											<tr valing="top">
												<td>
													<div id="l4">
														<strong>Consumos</strong>
														<?php
															$courtesytype=array(0,9,1,10,11,1,3,19,16,15);
															$consumption=array(
																array($courtesytype[$user['courtesy']],1),
																array(2,$user['vodka']*750/20),
																array(2,$user['vodkadoble']*750/10),
																array(2,$user['vodka2']*750/20),
																array(3,$user['ron']*750/20),
																array(3,$user['rondoble']*750/20),
																array(3,$user['ron2']*750/20),
																array(4,$user['whisky']*1000/26),
																array(4,$user['whiskydoble']*1000/13),
																array(5,$user['tequila']*1000/26),
																array(5,$user['tequiladoble']*1000/13),
																array(5,$user['tequila1']*750/20),
																array(10,$user['pilsener']*1),
																array(10,$user['pilsener1']*1),
																array(10,$user['auxpilsener']*1),
																array(11,$user['golden']*1),
																array(11,$user['golden1']*1),
																array(11,$user['auxgolden']*1),
																array(12,$user['suprema']*1),
																array(13,$user['corona']*1),
																array(14,$user['smirnoff']*1),
																array(15,$user['cokacola']*1),
																array(16,$user['sodas']*1),
																array(8,$user['water']*1),
																array(17,$user['icetea']*1),
																array(18,$user['gatorade']*1),
																array(19,$user['powerade']*1),
																array(20,$user['heineken']*1),
																array(23,$user['botellavino']*1),
																array(29,$user['vodkafin']*750/20),
																array(29,$user['vodkadoble']*750/10),
																array(6,$user['tequilac']*750/20),
																array(6,$user['tequilacdoble']*750/10),
																array(6,$user['energizer']*1),
																array(22,$user['tequilajc']*750/20),
																array(22,$user['tequilajcdoble']*750/10),
																array(2,$user['vodkafin']*750/20),
																array(2,$user['vodkafindoble']*750/10),
																array(9,$user['aguap']*1),
																array(24,$user['cadejo']*1),
																array(31,$user['cadejopromocion']*1),
																array(25,$user['cajetillag']*1),
																array(26,$user['cajetillap']*1),
																array(23,$user['botellavino2']*1),
																array(27,$user['santacruz']*1),
																array(28,$user['michelob']*1),
																array(29,$user['stela']*1),
																array(30,$user['regia']*1),
																array(28,$user['michelob']*1),
																array(31,$user['cabro']*1),
																array(32,$user['starkling']*1),
															);
															$myjson=json_encode($consumption);

														 // echo "<pre>";
														 // print_r($hola);
														?>
													</div>
												</td>
											</tr>
											<tr valing="top">
												<td>
													<table id="tableborderfine_1" aling="center" border="1"  width="245px">
														<tr>
															<td>
																<p id="l6">Cortesía</p>
															</td>
															<td align="center">
																<p id="l6">
																<?php
																	$courtesy=array("","Agua","Cocktail","Pilsener","Golden","Vodka","Ron","Powerade","Soda","Coca-Cola"); 
																	echo $courtesy[$user['courtesy']]; 
																?>
																</p>
															</td>
														</tr>
														<tr>
															<td><p id="l6"><strong>Tipo </strong></p></td>
															<td><p id="l6"><strong> Cantidad </strong></p></td>
														</tr>
														<tr>
															<td><p id="l6">Masaje 1</p></td>
															<td align="center"><p id="l6"><?php echo $user['masajecorto']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Masaje 2</p></td>
															<td align="center"><p id="l6"><?php echo $user['masajelargo']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Axilas</p></td>
															<td align="center"><p id="l6"><?php echo $user['depaxilas']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Brazos</p></td>
															<td align="center"><p id="l6"><?php echo $user['depbrazos']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Nariz</p></td>
															<td align="center"><p id="l6"><?php echo $user['depnariz']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Pecho</p></td>
															<td align="center"><p id="l6"><?php echo $user['deppecho']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Pecho y Abdomen</p></td>
															<td align="center"><p id="l6"><?php echo $user['deppechoabdomen']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Ano y Gluteos</p></td>
															<td align="center"><p id="l6"><?php echo $user['depanogluteos']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Parte Intima</p></td>
															<td align="center"><p id="l6"><?php echo $user['depparteintima']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Espalda</p></td>
															<td align="center"><p id="l6"><?php echo $user['depespalda']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Piernas Completas</p></td>
															<td align="center"><p id="l6"><?php echo $user['deppiernas']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Dep Pantorrilla o Muslo</p></td>
															<td align="center"><p id="l6"><?php echo $user['deppanomuslo']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Facial Scandinavia</p></td>
															<td align="center"><p id="l6"><?php echo $user['facialscan']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Facil Profundo</p></td>
															<td align="center"><p id="l6"><?php echo $user['facialprof']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Bañador</p></td>
															<td align="center"><p id="l6"><?php echo $user['bañador']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Ropa Interior +</p></td>
															<td align="center"><p id="l6"><?php echo $user['ropapm']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Ropa Interior</p></td>
															<td align="center"><p id="l6"><?php echo $user['ropap']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Suspensor</p></td>
															<td align="center"><p id="l6"><?php echo $user['suspensor']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Hilo</p></td>
															<td align="center"><p id="l6"><?php echo $user['hilo']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Pulsera</p></td>
															<td align="center"><p id="l6"><?php echo $user['pulseras']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Short</p></td>
															<td align="center"><p id="l6"><?php echo $user['short']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Toalla</p></td>
															<td align="center"><p id="l6"><?php echo $user['acc1']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Accesorio 1</p></td>
															<td align="center"><p id="l6"><?php echo $user['acc2']; ?></p></td>
														</tr>
														<tr>
															<td><p id="l6">Accesorio 2</p></td>
															<td align="center"><p id="l6"><?php echo $user['acc3']; ?></p></td>
														</tr>
														<tr>
				<td><p id="l6">Cajetilla Grande</p></td>
				<td align="center"><p id="l6"><?php echo $user['cajetillag']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Cajetilla Pequeña</p></td>
				<td align="center"><p id="l6"><?php echo $user['cajetillap']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Popper</p></td>
				<td align="center"><p id="l6"><?php echo $user['popper']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Lubricante</p></td>
				<td align="center"><p id="l6"><?php echo $user['lub']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Condón</p></td>
				<td align="center"><p id="l6"><?php echo $user['condon']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Snack</p></td>
				<td align="center"><p id="l6"><?php echo $user['snack']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Vodka Red Sencillo</p></td>
				<td align="center"><p id="l6"><?php echo $user['vodka']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Vodka Red Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['vodkadoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Vodka Descuento</p></td>
				<td align="center"><p id="l6"><?php echo $user['vodka2']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Vodka Finlandia</p></td>
				<td align="center"><p id="l6"><?php echo $user['vodkafin']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Vodka Grey Goose</p></td>
				<td align="center"><p id="l6"><?php echo $user['greygoose']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Vodka Grey Goose Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['greygoosedoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Vodka Finlandia Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['vodkafindoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Ron Sencillo</p></td>
				<td align="center"><p id="l6"><?php echo $user['ron']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Ron Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['rondoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Ron Descuento</p></td>
				<td align="center"><p id="l6"><?php echo $user['ron2']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Cihuatan</p></td>
				<td align="center"><p id="l6"><?php echo $user['cadejo']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Whisky</p></td>
				<td align="center"><p id="l6"><?php echo $user['whisky']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Whisky Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['whiskydoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Whisky Chivas Regal</p></td>
				<td align="center"><p id="l6"><?php echo $user['whiskychivas']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Whisky Chivas Regal Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['whiskychivasdoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Tequila Imperio Sencillo</p></td>
				<td align="center"><p id="l6"><?php echo $user['tequila']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Tequila José Cuervo Sencillo</p></td>
				<td align="center"><p id="l6"><?php echo $user['tequilajc']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Tequila Casa</p></td>
				<td align="center"><p id="l6"><?php echo $user['tequilac']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Tequila Imperio Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['tequiladoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Tequila José Cuervo Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['tequilajcdoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Tequila Casa Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['tequilacdoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Tequila Descuento</p></td>
				<td align="center"><p id="l6"><?php echo $user['tequila1']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Tequila Casa Descuento</p></td>
				<td align="center"><p id="l6"><?php echo $user['tequilac1']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Bombay Sencillo</p></td>
				<td align="center"><p id="l6"><?php echo $user['bombay']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Bombay Doble</p></td>
				<td align="center"><p id="l6"><?php echo $user['bombaydoble']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Gin Tonic</p></td>
				<td align="center"><p id="l6"><?php echo $user['gin']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Shot Jager</p></td>
				<td align="center"><p id="l6"><?php echo $user['jager']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Jager Bomb</p></td>
				<td align="center"><p id="l6"><?php echo $user['jagerbomb']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Pilsener</p></td>
				<td align="center"><p id="l6"><?php echo $user['pilsener']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Pilsener Descuento</p></td>
				<td align="center"><p id="l6"><?php echo $user['pilsener1']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Golden</p></td>
				<td align="center"><p id="l6"><?php echo $user['golden']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Golden Descuento</p></td>
				<td align="center"><p id="l6"><?php echo $user['golden1']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">3x5 PG</p></td>
				<td align="center"><p id="l6"><?php echo $user['pro3x5']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">3x5 Cabro</p></td>
				<td align="center"><p id="l6"><?php echo $user['cadejopro']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Suprema</p></td>
				<td align="center"><p id="l6"><?php echo $user['suprema']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Regia</p></td>
				<td align="center"><p id="l6"><?php echo $user['regia']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Santa Cruz</p></td>
				<td align="center"><p id="l6"><?php echo $user['santacruz']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Stella Artois</p></td>
				<td align="center"><p id="l6"><?php echo $user['stela']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Corona</p></td>
				<td align="center"><p id="l6"><?php echo $user['corona']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Modelo</p></td>
				<td align="center"><p id="l6"><?php echo $user['modelo']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Heineken</p></td>
				<td align="center"><p id="l6"><?php echo $user['heineken']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Bud Light</p></td>
				<td align="center"><p id="l6"><?php echo $user['budlight']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Michelob</p></td>
				<td align="center"><p id="l6"><?php echo $user['michelob']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Smirnoff</p></td>
				<td align="center"><p id="l6"><?php echo $user['smirnoff']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Cocktail Scandinavia</p></td>
				<td align="center"><p id="l6"><?php echo $user['cocktailscandinavia']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Cocktail Scandinavia Descuento</p></td>
				<td align="center"><p id="l6"><?php echo $user['cocktailscandinavia1']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Michelada</p></td>
				<td align="center"><p id="l6"><?php echo $user['michelada']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Coca-Cola</p></td>
				<td align="center"><p id="l6"><?php echo $user['cokacola']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Sodas</p></td>
				<td align="center"><p id="l6"><?php echo $user['sodas']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Botella Con Agua</p></td>
				<td align="center"><p id="l6"><?php echo $user['water']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Botella Con Agua Peq.</p></td>
				<td align="center"><p id="l6"><?php echo $user['aguap']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Ice Tea</p></td>
				<td align="center"><p id="l6"><?php echo $user['icetea']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Gatorade</p></td>
				<td align="center"><p id="l6"><?php echo $user['gatorade']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Powerade</p></td>
				<td align="center"><p id="l6"><?php echo $user['powerade']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Sparkling</p></td>
				<td align="center"><p id="l6"><?php echo $user['starkling']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Botella Vino</p></td>
				<td align="center"><p id="l6"><?php echo $user['botellavino']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Botella Vino 2</p></td>
				<td align="center"><p id="l6"><?php echo $user['botellavino2']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Botella Ron</p></td>
				<td align="center"><p id="l6"><?php echo $user['botellaron']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Botella Vodka</p></td>
				<td align="center"><p id="l6"><?php echo $user['botellavodka']; ?></p></td>
			</tr>
			<tr>
				<td><p id="l6">Vaso Hielo</p></td>
				<td align="center"><p id="l6"><?php echo $user['vasohielo']; ?></p></td>
			</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
									<td valign="top">
										<table aling="center" border="0">
											<tr>
												<td colspan="2">
													<p id="l4" >Agregar Masajes</p>
												</td>
												
											</tr>
											<tr valing="top">
												<td>
													<div id="bt_menu" class="b_massage" align="center" style="vertical-align:middle;" onclick="confirm1(<?php echo $user['number']; ?>)">
														<div id="l3">1ro</div>
														<img src="images/botton_massage.png" width="40%">
													</div>
												</td>
												<td>
													<div id="bt_menu" class="b_massage" align="center" style="vertical-align:middle;" onclick="confirm2(<?php echo $user['number']; ?>)">
														<div id="l3">2do</div>
														<img src="images/botton_massage.png" width="40%x">
													</div>
												</td>
											</tr>
											<tr valing="top">
												<td>
													<div id="bt_menu" class="b_massage" align="center" style="vertical-align:middle;" onclick="confirm9(<?php echo $user['number']; ?>)">
														<div id="l3">Lubricante</div>
														<!-- <img src="images/botton_massage.png" width="40%">-->
													</div>
												</td>		
												<td>
													<div id="bt_menu" class="b_massage" align="center" style="vertical-align:middle;" onclick="confirm4(<?php echo $user['number']; ?>)">
														<div id="l3">Popper</div>
														<!-- <img src="images/botton_massage.png" width="40%">-->
													</div>
												</td>
											</tr>
											<tr valing="top">
												<td>
													<div id="bt_menu" class="b_massage" align="center" style="vertical-align:middle;" onclick="confirm5(<?php echo $user['number']; ?>)">
														<div id="l3">Condón</div>
														<!-- <img src="images/botton_massage.png" width="40%">-->
													</div>
												</td>
											</tr>				
											<form action="index.php?/client/registerBilling" name="form1" id="form1" method="post">
													<?php 
													 $day=date('N');
													//if($day==5){
																$total=$user['vodka'] * 5+
																	$user['vodkadoble'] * 8+
																	$user['vodka2'] * 2+
																	$user['ron'] * 5+
																	$user['rondoble'] * 8+
																	$user['ron2'] * 5+
																	$user['whisky'] * 5+
																	$user['whiskydoble'] * 8+
																	$user['whiskychivas'] * 5+
																	$user['whiskychivasdoble'] * 8+
																	$user['tequila'] * 3+
																	$user['tequilac'] * 2+
																	$user['tequilajc'] * 3+
																	$user['tequilajcdoble'] * 5+
																	$user['tequiladoble'] * 5+
																	$user['tequilacdoble'] * 4+
																	$user['tequila1'] * 1+
																	$user['tequilac1'] * 1+
																	$user['pilsener'] * 2.5+
																	$user['pilsener1'] * 2.5+
																	$user['golden'] * 2.5+
																	$user['golden1'] * 2.5+
																	$user['pro3x5'] * 5+
																	$user['suprema'] * 2.5+
																	$user['cadejo'] * 2.5+
																	$user['corona'] * 3.5+
																	$user['smirnoff'] * 3.5+
																	$user['cocktailscandinavia'] * 2+
																	$user['cocktailscandinavia1'] * 2+
																	$user['sodas'] * 2+
																	$user['water'] * 2+
																	$user['icetea'] * 2+
																	$user['gatorade'] * 2+
																	$user['powerade'] * 2+
																	$user['starkling'] * 2+
																	$user['energizer'] * 4+
																	$user['botellavino'] * 15+
																	$user['botellaron'] * 20+
																	$user['botellavodka'] * 20+
																	$user['cokacola'] * 1.50+
																	$user['sunride'] * 3+
																	$user['sunridedoble'] * 5+
																	$user['vodkafin'] * 3+
																	$user['vodkafindoble'] * 5+
																	$user['vasohielo'] * 0.1+
																	$user['heineken'] * 3.5+
																	$user['aguap'] * 0.75+
																	$user['cajetillag'] * 5+
																	$user['cajetillap'] * 2.5+
																	$user['cadejopro'] * 5+
																	$user['botellavino2'] * 20+
																	$user['michelada'] * 2+
																	$user['budlight'] * 3+
																	$user['bombay'] * 5+
																	$user['bombaydoble'] * 8+
																	$user['regia'] * 4.5+
																	$user['stela'] * 3.5+
																	$user['santacruz'] * 2.5+
																	$user['michelob'] * 3.5+
																	$user['modelo'] * 2.5+
																	$user['gin'] * 5+
																	$user['jager'] * 5+
																	$user['jagerbomb'] * 7+
																	$user['greygoose'] * 7+
																	$user['greygoosedoble'] * 10+
																	$user['snack'] * 5;

																// }elseif($day==5){
																// 	$total=$user['vodka'] * 5+
																// 		$user['vodkadoble'] * 8+
																// 		$user['vodka2'] * 2+
																// 		$user['ron'] * 5+
																// 		$user['rondoble'] * 8+
																// 		$user['ron2'] * 5+
																// 		$user['whisky'] * 5+
																// 		$user['whiskydoble'] * 8+
																// 		$user['whiskychivas'] * 5+
																// 		$user['whiskychivasdoble'] * 8+
																// 		$user['tequila'] * 3+
																// 		$user['tequilac'] * 2+
																// 		$user['tequilajc'] * 3+
																// 		$user['tequilajcdoble'] * 5+
																// 		$user['tequiladoble'] * 5+
																// 		$user['tequilacdoble'] * 4+
																// 		$user['tequila1'] * 1+
																// 		$user['tequilac1'] * 1+
																// 		$user['pilsener'] * 1.5+
																// 		$user['pilsener1'] * 1.5+
																// 		$user['golden'] * 1.5+
																// 		$user['golden1'] * 1.5+
																// 		$user['pro3x5'] * 5+
																// 		$user['suprema'] * 1.5+
																// 		$user['cadejo'] * 1.5+
																// 		$user['corona'] * 3.5+
																// 		$user['smirnoff'] * 3.5+
																// 		$user['cocktailscandinavia'] * 2+
																// 		$user['cocktailscandinavia1'] * 2+
																// 		$user['sodas'] * 2+
																// 		$user['water'] * 2+
																// 		$user['icetea'] * 2+
																// 		$user['gatorade'] * 2+
																// 		$user['powerade'] * 2+
																// 		$user['starkling'] * 2+
																// 		$user['energizer'] * 4+
																// 		$user['botellavino'] * 15+
																// 		$user['botellaron'] * 20+
																// 		$user['botellavodka'] * 20+
																// 		$user['cokacola'] * 1.50+
																// 		$user['sunride'] * 3+
																// 		$user['sunridedoble'] * 5+
																// 		$user['vodkafin'] * 3+
																// 		$user['vodkafindoble'] * 5+
																// 		$user['vasohielo'] * 0.1+
																// 		$user['heineken'] * 3.5+
																// 		$user['aguap'] * 0.75+
																// 		$user['cajetillag'] * 5+
																// 		$user['cajetillap'] * 2.5+
																// 		$user['cadejopro'] * 5+
																// 		$user['botellavino2'] * 20+
																// 		$user['michelada'] * 2+
																// 		$user['budlight'] * 3+
																// 		$user['bombay'] * 5+
																// 		$user['bombaydoble'] * 8+
																// 		$user['regia'] * 4.5+
																// 		$user['stela'] * 3.5+
																// 		$user['santacruz'] * 2.5+
																// 		$user['michelob'] * 2.5+
																// 		$user['modelo'] * 2.5+
																// 		$user['gin'] * 5+
																// 		$user['jager'] * 5+
																// 		$user['jagerbomb'] * 7+
																// 		$user['greygoose'] * 7+
																// 		$user['greygoosedoble'] * 10+
																// 		$user['snack'] * 5;
																// }else{
																	
																// $total=$user['vodka'] * 5+
																// $user['vodkadoble'] * 8+
																// $user['vodka2'] * 2+
																// $user['ron'] * 5+
																// $user['rondoble'] * 8+
																// $user['ron2'] * 5+
																// $user['whisky'] * 5+
																// $user['whiskydoble'] * 8+
																// $user['whiskychivas'] * 5+
																// $user['whiskychivasdoble'] * 8+
																// $user['tequila'] * 3+
																// $user['tequilac'] * 2+
																// $user['tequilajc'] * 3+
																// $user['tequilajcdoble'] * 5+
																// $user['tequiladoble'] * 5+
																// $user['tequilacdoble'] * 4+
																// $user['tequila1'] * 1+
																// $user['tequilac1'] * 1+
																// $user['pilsener'] * 1.5+
																// $user['pilsener1'] * 1.5+
																// $user['golden'] * 1.5+
																// $user['golden1'] * 1.5+
																// $user['pro3x5'] * 5+
																// $user['suprema'] * 1.5+
																// $user['cadejo'] * 1.5+
																// $user['corona'] * 3.5+
																// $user['smirnoff'] * 3.5+
																// $user['cocktailscandinavia'] * 2+
																// $user['cocktailscandinavia1'] * 2+
																// $user['sodas'] * 2+
																// $user['water'] * 2+
																// $user['icetea'] * 2+
																// $user['gatorade'] * 2+
																// $user['powerade'] * 2+
																// $user['starkling'] * 2+
																// $user['energizer'] * 4+
																// $user['botellavino'] * 15+
																// $user['botellaron'] * 20+
																// $user['botellavodka'] * 20+
																// $user['cokacola'] * 1.50+
																// $user['sunride'] * 3+
																// $user['sunridedoble'] * 5+
																// $user['vodkafin'] * 3+
																// $user['vodkafindoble'] * 5+
																// $user['vasohielo'] * 0.1+
																// $user['heineken'] * 3.5+
																// $user['aguap'] * 0.75+
																// $user['cajetillag'] * 5+
																// $user['cajetillap'] * 2.5+
																// $user['cadejopro'] * 5+
																// $user['botellavino2'] * 20+
																// $user['michelada'] * 2+
																// $user['budlight'] * 3+
																// $user['bombay'] * 5+
																// $user['bombaydoble'] * 8+
																// $user['regia'] * 4.5+
																// $user['stela'] * 3.5+
																// $user['santacruz'] * 2.5+
																// $user['michelob'] * 2.5+
																// $user['modelo'] * 2.5+
																// $user['gin'] * 5+
																// $user['jager'] * 5+
																// $user['jagerbomb'] * 7+
																// $user['greygoose'] * 7+
																// $user['greygoosedoble'] * 10+
																// $user['snack'] * 5;
																// }
														 ?>
														<?php  ?>
											<tr>
<?php 
if($day==7 ){
	if($total<=$cover){
		$total=0;
	}else{
		$total=$total-$cover;	
	}
}

$total=$total+$user['masajecorto']*20+$user['masajelargo']*30+$user['popper']*30+$user['lub']*1+$user['condon']*1+$user['depaxilas']*8+$user['depbrazos']*13+$user['depnariz']*5+$user['deppecho']*10+$user['depabdomen']*12+$user['deppechoabdomen']*20+$user['depanogluteos']*20+$user['depparteintima']*15+$user['depespalda']*20+$user['deppiernas']*25+$user['deppanomuslo']*16+$user['facialscan']*20+$user['facialprof']*35+$user['bañador']*20+$user['ropapm']*25+$user['ropap']*20+$user['suspensor']*14+$user['hilo']*10+$user['pulseras']*5+$user['short']*16+$user['acc1']*2+$user['acc2']*4+$user['acc3']*14;
if($user['codspecial']==15){
	$total=0;
}
																?>	<td colspan="2">
													<!--<a href="index.php?/client/registerBilling?locker=<?php echo $user['number']; ?>">-->
														<input type="text" name="total" style="display:none" value="<?php echo $total; ?>">
														<input type="text" name="json" style="display:none" value="<?php echo $myjson ?>">
														<input type="text" name="locker" style="display:none" value="<?php echo $user['number']; ?>">
														<input type="text" name="codspecial" style="display:none" value="<?php echo $user['codspecial']; ?>">
														
														<div class="btnmenu" align="center" style="vertical-align:middle;" onclick="verga()">
															<p id="l3">
																COBRAR
															</p>
															<img src="images/5.png" width="30%">
														</div>
													<!--</a>-->
												</td>
											</tr>
											<tr>
												<td colspan="2" id="l6">
													Efectivo:<input name="cash" type="number" id="cash" value="0" min="0" size="2" onclick="document.getElementById('cash').value = '';">$/Pos:<input name="pos" type="number" id="pos" min="0" value="0" size="2" onclick="document.getElementById('pos').value = '';">$
												</td>
											</tr>
											</form>
											<tr>
												<td colspan="2">
													<p id="l4">Total:</p>
													<p id="l1"><?php echo $total; ?>$</p>
												</td>
											</tr>
											<form action="index.php?/client/discount" name="form2" id="form2" method="post">
											<tr>
												<td colspan="2">
													<input type="text" name="locker" style="display:none" value="<?php echo $user['number']; ?>">
												</td>
											</tr>
											</form>
											</table>

			<td valign="top">
				<div style="display: block; margin: 0 20px;">
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=20','TOALLA')">
					<div id="btnbar" align="center">
						<p id="l6">TOALLA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=0','DEP AXILAS')">
				<div id="btnbar" align="center">
					<p id="l6">DEP<br>AXILAS</p> </div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=1','DEP BRAZOS')">
					<div id="btnbar" align="center">
						<p id="l6">DEP<br>BRAZOS</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=2','DEP NARIZ')">
				<div id="btnbar" align="center">
					<p id="l6">DEP<br>NARIZ</p> </div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=3','DEP PECHO')">
				<div id="btnbar" align="center">
					<p id="l6">DEP<br>PECHO</p> </div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=4','DEP ABDOMEN')">
					<div id="btnbar" align="center">
						<p id="l6">DEP<br>ABDOMEN</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=5','DEP PECHO Y ABDOMEN')">
					<div id="btnbar" align="center">
						<p id="l6">DEP<br>PECHO<br>ABDOMEN</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=6','DEP ANO Y GLUTEOS')">
					<div id="btnbar" align="center">
						<p id="l6">DEP<br>ANO<br>GLUTEOS</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=7','DEP PARTE INTIMA')">
					<div id="btnbar" align="center">
						<p id="l6">DEP<br>PARTE<br>INTIMA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=8','DEP ESPALDA')">
					<div id="btnbar" align="center">
						<p id="l6">DEP<br>ESPALDA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=9','DEP PIERNAS COMPLETAS')">
					<div id="btnbar" align="center">
						<p id="l6">DEP<br>PIERNAS<br>COMPLE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=10','DEP PANTORRILLAS O MUSLO')">
					<div id="btnbar" align="center">
						<p id="l6">DEP<br>PANTORRI<br>O<br>MUSLO</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=11','FACIAL SCANDINAVIA')">
					<div id="btnbar" align="center">
						<p id="l6">FACIAL<br>SCANDI</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=12','FACIAL PROFUNDO')">
					<div id="btnbar" align="center">
						<p id="l6">FACIAL<br>PROFUN</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=13','BAÑADOR')">
					<div id="btnbar" align="center">
						<p id="l6">BAÑADOR</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=14','ROPA INTERIOR PLUS')">
					<div id="btnbar" align="center">
						<p id="l6">ROPA<br>INT<br>+</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=15','ROPA INTERIOR')">
					<div id="btnbar" align="center">
						<p id="l6">ROPA<br>INT</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=16','SUSPENSOR')">
					<div id="btnbar" align="center">
						<p id="l6">SUSPENSOR</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=17','HILO')">
					<div id="btnbar" align="center">
						<p id="l6">HILO</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=18','PULSERAS')">
					<div id="btnbar" align="center">
						<p id="l6">PULSERAS</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=19','SHORT')">
					<div id="btnbar" align="center">
						<p id="l6">SHORT</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=21','ACESSORIO 1')">
					<div id="btnbar" align="center">
						<p id="l6">ACC<br>1</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=22','ACESSORIO 2')">
					<div id="btnbar" align="center">
						<p id="l6">ACC<br>2</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/client/giveService?locker=<?php echo $user['number']; ?>&type=23','SNACK')">
					<div id="btnbar" align="center">
						<p id="l6">SNACK</p>
					</div>
				</a>
				</div>
			</td>
				</table>				
			</td>
		</tr>
	</table>
						</td>		
					</tr>
	</table>


		</div>
<?php } ?>	
			</td>
		</tr>

	</table>
		
<?php $this->load->view('footer'); ?>