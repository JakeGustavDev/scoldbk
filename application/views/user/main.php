<?php $this->load->view('header'); ?>
<script language="javascript">

			var funcion = 0;

			function salir(){
			
				if(confirm("Seguro desea salir?")){
				
					window.location.href = "index.php?/start/logout";
			
				} 

			}

			function abrir1(url) { 

				open(url,'','top=0,left=0,width=500,height=330') ; 

			}

			function abrir2(url) { 

				open(url,'','top=0,left=0,width=1000,height=730') ; 

			}

			function abrir3(url) { 

				open(url,'','top=0,left=0,width=900,height=520') ; 

			}

			function abrir5(url) { 

				open(url,'','top=0,left=0,width=290,height=520') ; 

			}

			function abrir6(url) { 

				open(url,'','top=0,left=0,width=900,height=500') ; 

			}

			function confirm3(locker){
				
				if(confirm("Habilitar Locker?")){
				
					window.location.href = "index.php?/user/enableLocker?locker="+locker;

				} 

			}

			function sendForm(form){
				
				var cover = parseFloat($('#cash').val()) + parseFloat($('#pos').val());
				if (cover == 0||cover == 5||cover == 7||cover ==10){
					if(confirm("Registrar Cliente?")){

						if(funcion==0){

							$('#'+form).submit();

						}
					
						funcion = 1;

					}
				}else{
					if ($("#solomasaje").is(':checked')) {
						if(confirm("Registrar Cliente?")){

						if(funcion==0){

							$('#'+form).submit();

						}
					
						funcion = 1;

					}
					}else{
						alert('El cover debe ser de $7.00/$10.00');
					}
					
				}

			} 

			function validar_formulario(){

				if($('#clientname').val()==''
				|| ($('#cash').val()=='' && $('#pos').val()=='')){
				
				alert("Todos los campos son obligatorios");
				return false;
				
				} else {

					if(document.getElementById("clientname").value.length <= 3){
						
						alert('Ingrese un nombre de minimo 4 caracteres');
						return false;

					}else{

					$('#form1').submit();

					}
				}
			} 

</script>
	<table border="0" width="990px" align="center">
		<tr>
			<td align="center">
				<div id="logo">
					<img src="images/logo.png" width="100%">
				</div>
			</td>
		</tr>
	</table>
	<table border="0" width="990px" align="center" height="550px">
		<tr>
			<td width="60%">
				<div id="container">
					<div id="container_2">
						<?php foreach ($specials as $client) {?>
							<a href="javascript:abrir1('index.php?/client/special?cod=<?php echo $client['cod'] ?>')">
								<div class="special" id="botton">
									<p id="l4"><?php echo $client['name']; ?><br><img src="images/special_locker.png" width="35%"></p>
								</div>
							</a>
						<?php } ?>
						<?php foreach ($lockers as $locker) {
							if ($locker['available']==1) { ?>
								<div class="available" id="botton">
									<p id="l2"><?php echo $locker['number']; ?><br><img src="images/locker_available.png" width="25%"></p>
								</div>
							<?php }else{ 
								if ($locker['available']==0){ ?>
								<a href="javascript:abrir2('index.php?/client/locker?number=<?php echo $locker['number'] ?>')">
									<div class="occupied" id="botton">
											<p id="l2" style="margin-bottom: 0px;"><?php echo $locker['number']; ?></p>
											<span id="tiempo<?php echo $locker['number']; ?>" class="l2" style="margin-top: -3px; font-size: 1.3em; color: #474B4E;">
												<?php
													$fecha1 = new DateTime($locker['date']);//fecha inicial
													$fecha2 = new DateTime('now');//fecha de cierre
													
													$intervalo = $fecha1->diff($fecha2);
												?>
												<script>
													(function(){
														var contador_s = <?php echo $intervalo->format('%s'); ?>;
														var contador_m = <?php echo $intervalo->format('%i'); ?>;
														var contador_h = <?php echo $intervalo->format('%H'); ?>;
														var spantiempo = document.getElementById("tiempo<?php echo $locker['number']; ?>");
														window.setInterval(() => {
															if(contador_s==60){
																contador_s=0;
																contador_m++;
																if(contador_m==60){
																	contador_m=0;
																	contador_h++;
																}
															}
															contador_s++;
															spantiempo.innerHTML = contador_h + ':' + contador_m + ':' + contador_s;
														}, 1000);
													}())
												</script>
											</span>
											<br>
											<img src="images/locker_occupied.png" width="25%">
										</p>
									</div>
								</a>
								<?php }else{ ?>
								<div class="unavailable" id="botton" onclick="confirm3(<?php echo $locker['number']; ?>)">
									<p id="l2"><?php echo $locker['number']; ?><br><img src="images/locker_unavailable.png" width="35%"></p>
								</div>	
						<?php }}} ?>
					</div>
				</div>
			</td>
			<td valign="top" align="center">
				<div class="" id="options">
					<a href="index.php?/client/clientsPop" target="_blank">
						<div id="botton_options" class="defaulters" title="Clientes POP - Pendiente o Penlizados">
							<img src="images/defaulters.png" alt="" width="50%" style="margin-top:25%;">
						</div>
					</a>
					<a href="javascript:abrir3('index.php?/client/cashregister')">
						<div id="botton_options" class="payment" title="Corte de Caja">
							<img src="images/payment.png" alt="" width="50%" style="margin-top:20%;">
						</div>
					</a>
					<a href="javascript:abrir5('index.php?/client/enablelockers')">
						<div id="botton_options" class="enable" title="Habilitar Lockers">
							<img src="images/enable_locker.png" alt="" width="50%" style="margin-top:22%;">
						</div>
					</a>
					<a href="javascript:abrir6('index.php?/client/extraMoney')">
						<div id="botton_options" class="cash" title="Dinero Adicional">
							<img src="images/extra_cash.png" alt="" width="50%" style="margin-top:22%;">
						</div>
					</a>
					<a href="index.php?/client/report">
						<div id="botton_options" class="chat" title="Reporte">
							<img src="images/repo.png" alt="" width="50%" style="margin-top:22%;">
						</div>
					</a>
					<div id="botton_options" class="exit" onclick="salir()" title="Salir del sistema">
						<img src="images/exit.png" alt="" width="50%" style="margin-top:22%;">
					</div>
				</div>
				<br>
				<div id="containerregistration">
					<form action="index.php?/client/register_client" name="form1" id="form1" method="post">
					<table aling="center" border="0">
						<tr>
							<td>
								<p id="l3">REGISTRAR ENTRADA</p>
							</td>
						</tr>
					</table>
					<table aling="center" border="0">
						<tr>
							<td width="100px"><p id="l5">Nombre:</p></td>
							<td width="180px"><input name="clientname" id="clientname" value="" size="20" autofocus required></td>
						</tr>
						<tr>
							<td><p id="l5">Nº de Locker:</p></td>
							<td>
								<select name="locker" id="locker" style="width:70px;" required>
										<option value="">Seleccione...</option>
									<?php foreach ($numbers as $item) { ?>
										<option value="<?php echo $item['number'] ?>"><?php echo $item['number'] ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><p id="l5">Costo Entrada:</p></td>
							<td></td>
						</tr>
						<tr>
							<td align="right"><p id="l5">Efectivo:</p><input type="text" name="cash" id="cash" value="0" size="1" onclick="document.getElementById('cash').value = '';">$</td>
							<td><p id="l5">/Pos:</p><input type="text" name="pos" id="pos" value="0" size="1" onclick="document.getElementById('pos').value = '';">$</td>
						</tr>
						<tr>
							<td colspan="2">
								<p id="l5"><input type="checkbox" name="masaje" id="solomasaje"> Solo masaje/depilación</p>
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td align="right">
								<input type="button" value="Registrar" onclick="sendForm('form1');">
							</td>
						</tr>
					</table>
					</form>
					<br>
					<hr>
					<br>
					<p id="l3">ENTRADAS REGISTRADAS HOY:</p>
					<p id="l1">
						<?php
							$entries=0;
							foreach ($count as $item) {
								$entries=$entries+1;
							}
							echo $entries;
						?>
					</p>
				</div>
			</td>
		</tr>
	</table>
	<?php
		$vodka=0;
		$vodkadoble=0;
		$vodka2=0;
		$ron=0;
		$rondoble=0;
		$ron2=0;
		$whisky=0;
		$whiskydoble=0;
		$tequila=0;
		$tequilacasa=0;
		$tequiladoble=0;
		$tequilacasadoble=0;
		$tequila1=0;
		$tequilacasa1=0;
		$pilsener=0;
		$pilsener1=0;
		$golden=0;
		$golden1=0;
		$pro3x5=0;
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
		$energizer=0;
		$botellavino=0;
		$botellaron=0;
		$botellavodka=0;
		$vasohielo=0;
		foreach ($lockers as $pendient) {
			$vodka=$vodka+$pendient['vodka'];
			$vodkadoble=$vodkadoble+$pendient['vodkadoble'];
			$vodka2=$vodka2+$pendient['vodka2'];
			$ron=$ron+$pendient['ron'];
			$rondoble=$rondoble+$pendient['rondoble'];
			$ron2=$ron2+$pendient['ron2'];
			$whisky=$whisky+$pendient['whisky'];
			$whiskydoble=$whiskydoble+$pendient['whiskydoble'];
			$tequila=$tequila+$pendient['tequila'];
			$tequilacasa=$tequilacasa+$pendient['tequilac'];
			$tequiladoble=$tequiladoble+$pendient['tequiladoble'];
			$tequilacasadoble=$tequilacasadoble+$pendient['tequilacdoble'];
			$tequila1=$tequila1+$pendient['tequila1'];
			$tequilacasa1=$tequilacasa1+$pendient['tequilac1'];
			$pilsener=$pilsener+$pendient['pilsener'];
			$pilsener1=$pilsener1+$pendient['pilsener1'];
			$golden=$golden+$pendient['golden'];
			$golden1=$golden1+$pendient['golden1'];
			$pro3x5=$pro3x5+$pendient['pro3x5'];
			$suprema=$suprema+$pendient['suprema'];
			$corona=$corona+$pendient['corona'];
			$smirnoff=$smirnoff+$pendient['smirnoff'];
			$cocktailscandinavia=$cocktailscandinavia+$pendient['cocktailscandinavia'];
			$cocktailscandinavia1=$cocktailscandinavia1+$pendient['cocktailscandinavia1'];
			$cokacola=$cokacola+$pendient['cokacola'];
			$sodas=$sodas+$pendient['sodas'];
			$water=$water+$pendient['water'];
			$icetea=$icetea+$pendient['icetea'];
			$gatorade=$gatorade+$pendient['gatorade'];
			$powerade=$powerade+$pendient['powerade'];
			$energizer=$energizer+$pendient['energizer'];
			$botellavino=$botellavino+$pendient['botellavino'];
			$botellaron=$botellaron+$pendient['botellaron'];
			$botellavodka=$botellavodka+$pendient['botellavodka'];
			$vasohielo=$vasohielo+$pendient['vasohielo'];
		}
	?>
	<table border="0" width="990px" align="center">
		<tr>
			<td align="center">
				<div id="container" style="height: 100%;">
				<h2>Circulando:</h2>
					<table border="1" id="tableborderfine_1">
						<tr>
							<td><p id="l6">Vodka Sencillo</p></td>
							<td align="center"><p id="l6"><?php echo $vodka; ?></p></td>
							<td><p id="l6">Vodka Doble</p></td>
							<td align="center"><p id="l6"><?php echo $vodkadoble; ?></p></td>
							<td><p id="l6">Vodka Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $vodka2; ?></p></td>
							<td><p id="l6">Ron Sencillo</p></td>
							<td align="center"><p id="l6"><?php echo $ron; ?></p></td>
							<td><p id="l6">Ron Doble</p></td>
							<td align="center"><p id="l6"><?php echo $rondoble; ?></p></td>
							<td><p id="l6">Ron Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $ron2; ?></p></td>
							<td><p id="l6">Whisky</p></td>
							<td align="center"><p id="l6"><?php echo $whisky; ?></p></td>
						</tr>
						<tr>
							<td><p id="l6">Whisky Doble</p></td>
							<td align="center"><p id="l6"><?php echo $whiskydoble; ?></p></td>
							<td><p id="l6">Tequila Sencillo</p></td>
							<td align="center"><p id="l6"><?php echo $tequila; ?></p></td>
							<td><p id="l6">Tequila Casa</p></td>
							<td align="center"><p id="l6"><?php echo $tequilacasa; ?></p></td>
							<td><p id="l6">Tequila Doble</p></td>
							<td align="center"><p id="l6"><?php echo $tequiladoble; ?></p></td>
							<td><p id="l6">Tequila Casa Doble</p></td>
							<td align="center"><p id="l6"><?php echo $tequilacasadoble; ?></p></td>
							<td><p id="l6">Tequila Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $tequila1; ?></p></td>
							<td><p id="l6">Tequila Casa Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $tequilacasa1; ?></p></td>
						</tr>
						<tr>
							<td><p id="l6">Pilsener</p></td>
							<td align="center"><p id="l6"><?php echo $pilsener; ?></p></td>
							<td><p id="l6">Pilsener Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $pilsener1; ?></p></td>
							<td><p id="l6">Golden</p></td>
							<td align="center"><p id="l6"><?php echo $golden; ?></p></td>
							<td><p id="l6">Golden Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $golden1; ?></p></td>
							<td><p id="l6">3x5 PG</p></td>
							<td align="center"><p id="l6"><?php echo $pro3x5; ?></p></td>
							<td><p id="l6">Suprema</p></td>
							<td align="center"><p id="l6"><?php echo $suprema; ?></p></td>
							<td><p id="l6">Corona</td>
							<td align="center"><p id="l6"><?php echo $corona; ?></p></td>
						</tr>
						<tr>
							<td><p id="l6">Smirnoff</p></td>
							<td align="center"><p id="l6"><?php echo $smirnoff; ?></p></td>
							<td><p id="l6">Cocktail Scandinavia</p></td>
							<td align="center"><p id="l6"><?php echo $cocktailscandinavia; ?></p></td>
							<td><p id="l6">Cocktail Scandinavia Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $cocktailscandinavia1; ?></p></td>
							<td><p id="l6">Coca-Cola</p></td>
							<td align="center"><p id="l6"><?php echo $cokacola; ?></p></td>
							<td><p id="l6">Sodas</p></td>
							<td align="center"><p id="l6"><?php echo $sodas; ?></p></td>
							<td><p id="l6">Botella Con Agua</p></td>
							<td align="center"><p id="l6"><?php echo $water; ?></p></td>
							<td><p id="l6">Ice Tea</p></td>
							<td align="center"><p id="l6"><?php echo $icetea; ?></p></td>
						</tr>
						<tr>
							<td><p id="l6">Gatorade</p></td>
							<td align="center"><p id="l6"><?php echo $gatorade; ?></p></td>
							<td><p id="l6">Powerade</p></td>
							<td align="center"><p id="l6"><?php echo $powerade; ?></p></td>
							<td><p id="l6">Energizante</p></td>
							<td align="center"><p id="l6"><?php echo $energizer; ?></p></td>
							<td><p id="l6">Botella Vino</p></td>
							<td align="center"><p id="l6"><?php echo $botellavino; ?></p></td>
							<td><p id="l6">Botella Ron</p></td>
							<td align="center"><p id="l6"><?php echo $botellaron; ?></p></td>
							<td><p id="l6">Botella Vodka</p></td>
							<td align="center"><p id="l6"><?php echo $botellavodka; ?></p></td>
							<td><p id="l6">Vaso Hielo</p></td>
							<td align="center"><p id="l6"><?php echo $vasohielo; ?></p></td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
	<?php
		$vodka=0;
		$vodkadoble=0;
		$vodka2=0;
		$ron=0;
		$rondoble=0;
		$ron2=0;
		$whisky=0;
		$whiskydoble=0;
		$tequila=0;
		$tequilacasa=0;
		$tequiladoble=0;
		$tequilacasadoble=0;
		$tequila1=0;
		$tequilacasa1=0;
		$pilsener=0;
		$pilsener1=0;
		$golden=0;
		$golden1=0;
		$pro3x5=0;
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
		$energizer=0;
		$botellavino=0;
		$botellaron=0;
		$botellavodka=0;
		$vasohielo=0;
		foreach ($result as $results) {
			$vodka=$vodka+$results['vodka'];
			$vodkadoble=$vodkadoble+$results['vodkadoble'];
			$vodka2=$vodka2+$results['vodka2'];
			$ron=$ron+$results['ron'];
			$rondoble=$rondoble+$results['rondoble'];
			$ron2=$ron2+$results['ron2'];
			$whisky=$whisky+$results['whisky'];
			$whiskydoble=$whiskydoble+$results['whiskydoble'];
			$tequila=$tequila+$results['tequila'];
			$tequilacasa=$tequilacasa+$results['tequilac'];
			$tequiladoble=$tequiladoble+$results['tequiladoble'];
			$tequilacasadoble=$tequilacasadoble+$results['tequilacdoble'];
			$tequila1=$tequila1+$results['tequila1'];
			$tequilacasa1=$tequilacasa1+$results['tequilac1'];
			$pilsener=$pilsener+$results['pilsener'];
			$pilsener1=$pilsener1+$results['pilsener1'];
			$golden=$golden+$results['golden'];
			$golden1=$golden1+$results['golden1'];
			$pro3x5=$pro3x5+$results['pro3x5'];
			$suprema=$suprema+$results['suprema'];
			$corona=$corona+$results['corona'];
			$smirnoff=$smirnoff+$results['smirnoff'];
			$cocktailscandinavia=$cocktailscandinavia+$results['cocktailscandinavia'];
			$cocktailscandinavia1=$cocktailscandinavia1+$results['cocktailscandinavia1'];
			$cokacola=$cokacola+$results['cokacola'];
			$sodas=$sodas+$results['sodas'];
			$water=$water+$results['water'];
			$icetea=$icetea+$results['icetea'];
			$gatorade=$gatorade+$results['gatorade'];
			$powerade=$powerade+$results['powerade'];
			$energizer=$energizer+$results['energizer'];
			$botellavino=$botellavino+$results['botellavino'];
			$botellaron=$botellaron+$results['botellaron'];
			$botellavodka=$botellavodka+$results['botellavodka'];
			$vasohielo=$vasohielo+$results['vasohielo'];
		}
	?>
	<table border="0" width="990px" align="center">
		<tr>
			<td align="center">
				<div id="container" style="height: 100%;">
				<h2>Consumido de Hoy:</h2>
					<table border="1" id="tableborderfine_1">
						<tr>
							<td><p id="l6">Vodka Sencillo</p></td>
							<td align="center"><p id="l6"><?php echo $vodka; ?></p></td>
							<td><p id="l6">Vodka Doble</p></td>
							<td align="center"><p id="l6"><?php echo $vodkadoble; ?></p></td>
							<td><p id="l6">Vodka Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $vodka2; ?></p></td>
							<td><p id="l6">Ron Sencillo</p></td>
							<td align="center"><p id="l6"><?php echo $ron; ?></p></td>
							<td><p id="l6">Ron Doble</p></td>
							<td align="center"><p id="l6"><?php echo $rondoble; ?></p></td>
							<td><p id="l6">Ron Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $ron2; ?></p></td>
							<td><p id="l6">Whisky</p></td>
							<td align="center"><p id="l6"><?php echo $whisky; ?></p></td>
						</tr>
						<tr>
							<td><p id="l6">Whisky Doble</p></td>
							<td align="center"><p id="l6"><?php echo $whiskydoble; ?></p></td>
							<td><p id="l6">Tequila Sencillo</p></td>
							<td align="center"><p id="l6"><?php echo $tequila; ?></p></td>
							<td><p id="l6">Tequila Casa</p></td>
							<td align="center"><p id="l6"><?php echo $tequilacasa; ?></p></td>
							<td><p id="l6">Tequila Doble</p></td>
							<td align="center"><p id="l6"><?php echo $tequiladoble; ?></p></td>
							<td><p id="l6">Tequila Casa Doble</p></td>
							<td align="center"><p id="l6"><?php echo $tequilacasadoble; ?></p></td>
							<td><p id="l6">Tequila Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $tequila1; ?></p></td>
							<td><p id="l6">Tequila Casa Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $tequilacasa1; ?></p></td>
						</tr>
						<tr>
							<td><p id="l6">Pilsener</p></td>
							<td align="center"><p id="l6"><?php echo $pilsener; ?></p></td>
							<td><p id="l6">Pilsener Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $pilsener1; ?></p></td>
							<td><p id="l6">Golden</p></td>
							<td align="center"><p id="l6"><?php echo $golden; ?></p></td>
							<td><p id="l6">Golden Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $golden1; ?></p></td>
							<td><p id="l6">3x5 PG</p></td>
							<td align="center"><p id="l6"><?php echo $pro3x5; ?></p></td>
							<td><p id="l6">Suprema</p></td>
							<td align="center"><p id="l6"><?php echo $suprema; ?></p></td>
							<td><p id="l6">Corona</td>
							<td align="center"><p id="l6"><?php echo $corona; ?></p></td>
						</tr>
						<tr>
							<td><p id="l6">Smirnoff</p></td>
							<td align="center"><p id="l6"><?php echo $smirnoff; ?></p></td>
							<td><p id="l6">Cocktail Scandinavia</p></td>
							<td align="center"><p id="l6"><?php echo $cocktailscandinavia; ?></p></td>
							<td><p id="l6">Cocktail Scandinavia Descuento</p></td>
							<td align="center"><p id="l6"><?php echo $cocktailscandinavia1; ?></p></td>
							<td><p id="l6">Coca-Cola</p></td>
							<td align="center"><p id="l6"><?php echo $cokacola; ?></p></td>
							<td><p id="l6">Sodas</p></td>
							<td align="center"><p id="l6"><?php echo $sodas; ?></p></td>
							<td><p id="l6">Botella Con Agua</p></td>
							<td align="center"><p id="l6"><?php echo $water; ?></p></td>
							<td><p id="l6">Ice Tea</p></td>
							<td align="center"><p id="l6"><?php echo $icetea; ?></p></td>
						</tr>
						<tr>
							<td><p id="l6">Gatorade</p></td>
							<td align="center"><p id="l6"><?php echo $gatorade; ?></p></td>
							<td><p id="l6">Powerade</p></td>
							<td align="center"><p id="l6"><?php echo $powerade; ?></p></td>
							<td><p id="l6">Energizante</p></td>
							<td align="center"><p id="l6"><?php echo $energizer; ?></p></td>
							<td><p id="l6">Botella Vino</p></td>
							<td align="center"><p id="l6"><?php echo $botellavino; ?></p></td>
							<td><p id="l6">Botella Ron</p></td>
							<td align="center"><p id="l6"><?php echo $botellaron; ?></p></td>
							<td><p id="l6">Botella Vodka</p></td>
							<td align="center"><p id="l6"><?php echo $botellavodka; ?></p></td>
							<td><p id="l6">Vaso Hielo</p></td>
							<td align="center"><p id="l6"><?php echo $vasohielo; ?></p></td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- centavitos2 -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:960px;height:90px"
		     data-ad-client="ca-pub-4459129747973233"
		     data-ad-slot="4579892705"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	<script type="text/javascript">
	    google_ad_client = "ca-pub-4459129747973233";
	    google_ad_slot = "6056625905";
	    google_ad_width = 728;
	    google_ad_height = 90;
	</script>
	<!-- CENTAVITOSOP -->
	<script type="text/javascript"
	src="//pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>

<?php $this->load->view('footer'); ?>