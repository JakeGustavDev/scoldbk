<?php $this->load->view('header'); ?>
<script language="javascript">

	function validar_formulario(){

		if($('#reason').val()==''
		|| ($('#amount').val()=='')){
		
		alert("Todos los campos son obligatorios");
		return false;
		
		} else {

			if(document.getElementById("reason").value.length <= 3){
				
				alert('Ingrese una motivo más específico');
				return false;

			}else{

			$('#form1').submit();

			}
		}
	}

	function report(){
		$('#form2').submit();
	} 
</script>
	<table width="800px" border="0">
		<tr>
			<td width="50%">
				<div id="tableborder_2">
					<table aling="center" border="0" width="100%">
						<tr>
							<td width="50%" align="center"><p id="l2">Efectivo</p></td>
							<td width="50%" align="center"><p id="l2">POS</p></td>
						</tr>
						<tr>
							<?php
								$totalcash=0;
								foreach ($fee as $value) {
									$totalcash=$totalcash+$value['cash'];
								} 
								foreach ($exit as $value) {
									$totalcash=$totalcash+$value['cashexit'];
								}
								foreach ($extra as $value) {
									$totalcash=$totalcash+$value['cash'];
								}
								$totalday=$totalcash;
								foreach ($withdraw as $value) {
									if ($value['modus']==0) {
										$totalcash=$totalcash+$value['amount'];
									}else{
										$totalcash=$totalcash-$value['amount'];
									}
								}
							?>
							<td align="center"><p id="l1"><?php echo $totalcash; ?>$</p></td>
							<?php
								$totalpos=0;
								foreach ($fee as $value) {
									$totalpos=$totalpos+$value['pos'];
								} 
								foreach ($exit as $value) {
									$totalpos=$totalpos+$value['posexit'];
								}
								foreach ($extra as $value) {
									$totalpos=$totalpos+$value['pos'];
								}
							?>
							<td align="center"><p id="l1"><?php echo $totalpos; ?>$</p></td>
						</tr>
						<tr>
							<td align="center"><p id="l5">Circulando:</p>
							<p id="l4"><?php
								$totalcirculando=0; 
								foreach ($circulando as $user) {
									$totalc=0;
									$day=date('N');
									if($day==5){
										$totalc=$user['vodka'] * 1.5+
											$user['vodkadoble'] * 5+
											$user['vodka2'] * 2+
											$user['ron'] * 1.5+
											$user['rondoble'] * 5+
											$user['ron2'] * 2+
											$user['whisky'] * 5+
											$user['whiskydoble'] * 8+
											$user['tequila'] * 3+
											$user['tequilac'] * 2+
											$user['tequilajc'] * 3+
											$user['tequilajcdoble'] * 5+
											$user['tequiladoble'] * 5+
											$user['tequilacdoble'] * 3+
											$user['tequila1'] * 1+
											$user['tequilac1'] * 1+
											$user['pilsener'] * 2+
											$user['pilsener1'] * 1+
											$user['golden'] * 2+
											$user['golden1'] * 1+
											$user['pro3x5'] * 5+
											$user['suprema'] * 2.5+
											$user['cadejo'] * 3+
											$user['corona'] * 3+
											$user['smirnoff'] * 3+
											$user['cocktailscandinavia'] * 2+
											$user['cocktailscandinavia1'] * 1+
											$user['sodas'] * 1.50+
											$user['water'] * 1+
											$user['icetea'] * 1.50+
											$user['gatorade'] * 1.50+
											$user['powerade'] * 1+
											$user['energizer'] * 2+
											$user['botellavino'] * 15+
											$user['botellaron'] * 20+
											$user['botellavodka'] * 20+
											$user['cokacola'] * 1.50+
											$user['sunride'] * 3+
											$user['sunridedoble'] * 5+
											$user['vodkafin'] * 4+
											$user['vodkafindoble'] * 6+
											$user['vasohielo'] * 0.1+
											$user['heineken'] * 3+
											$user['aguap'] * 0.75+
											$user['cajetillag'] * 5+
											$user['cajetillap'] * 2.5+
											$user['cadejopro'] * 5+
											$user['botellavino2'] * 20+
											$user['michelada'] * 1+
											$user['budlight'] * 3+
											$user['bombay'] * 5+
											$user['bombaydoble'] * 8+
											$user['regia'] * 4+
											$user['stela'] * 2.5+
											$user['santacruz'] * 2.5+
											$user['michelob'] * 2.5+
											$user['modelo'] * 2.5;

										}elseif($day==6){
											$totalc=$user['vodka'] * 3+
											$user['vodkadoble'] * 5+
											$user['vodka2'] * 2+
											$user['ron'] * 3+
											$user['rondoble'] * 5+
											$user['ron2'] * 2+
											$user['whisky'] * 5+
											$user['whiskydoble'] * 8+
											$user['tequila'] * 3+
											$user['tequilac'] * 1+
											$user['tequilajc'] * 3+
											$user['tequilajcdoble'] * 5+
											$user['tequiladoble'] * 5+
											$user['tequilacdoble'] * 3+
											$user['tequila1'] * 1+
											$user['tequilac1'] * 1+
											$user['pilsener'] * 2+
											$user['pilsener1'] * 1.25+
											$user['golden'] * 2+
											$user['golden1'] * 1.25+
											$user['pro3x5'] * 5+
											$user['suprema'] * 2.5+
											$user['cadejo'] * 3+
											$user['corona'] * 3+
											$user['smirnoff'] * 3+
											$user['cocktailscandinavia'] * 2+
											$user['cocktailscandinavia1'] * 1+
											$user['sodas'] * 1.50+
											$user['water'] * 1+
											$user['icetea'] * 1.50+
											$user['gatorade'] * 1.50+
											$user['powerade'] * 1+
											$user['energizer'] * 2+
											$user['botellavino'] * 15+
											$user['botellaron'] * 20+
											$user['botellavodka'] * 20+
											$user['cokacola'] * 1.50+
											$user['sunride'] * 3+
											$user['sunridedoble'] * 5+
											$user['vodkafin'] * 4+
											$user['vodkafindoble'] * 6+
											$user['vasohielo'] * 0.1+
											$user['heineken'] * 3+
											$user['aguap'] * 0.75+
											$user['cajetillag'] * 5+
											$user['cajetillap'] * 2.5+
											$user['cadejopro'] * 5+
											$user['botellavino2'] * 20+
											$user['michelada'] * 1+
											$user['budlight'] * 3+
											$user['bombay'] * 5+
											$user['bombaydoble'] * 8+
											$user['regia'] * 4+
											$user['stela'] * 2.5+
											$user['santacruz'] * 2.5+
											$user['michelob'] * 2.5+
											$user['modelo'] * 2.5;
										}else{
											$totalc=$user['vodka'] * 3+
											$user['vodkadoble'] * 5+
											$user['vodka2'] * 2+
											$user['ron'] * 3+
											$user['rondoble'] * 5+
											$user['ron2'] * 2+
											$user['whisky'] * 5+
											$user['whiskydoble'] * 8+
											$user['tequila'] * 3+
											$user['tequilac'] * 2+
											$user['tequilajc'] * 3+
											$user['tequilajcdoble'] * 5+
											$user['tequiladoble'] * 5+
											$user['tequilacdoble'] * 3+
											$user['tequila1'] * 1+
											$user['tequilac1'] * 1+
											$user['pilsener'] * 2+
											$user['pilsener1'] * 1.25+
											$user['golden'] * 2+
											$user['golden1'] * 1.25+
											$user['pro3x5'] * 5+
											$user['suprema'] * 2.5+
											$user['cadejo'] * 3+
											$user['corona'] * 3+
											$user['smirnoff'] * 3+
											$user['cocktailscandinavia'] * 2+
											$user['cocktailscandinavia1'] * 1+
											$user['sodas'] * 1.50+
											$user['water'] * 1+
											$user['icetea'] * 1.50+
											$user['gatorade'] * 1.50+
											$user['powerade'] * 1+
											$user['energizer'] * 2+
											$user['botellavino'] * 15+
											$user['botellaron'] * 20+
											$user['botellavodka'] * 20+
											$user['cokacola'] * 1.50+
											$user['sunride'] * 3+
											$user['sunridedoble'] * 5+
											$user['vodkafin'] * 4+
											$user['vodkafindoble'] * 6+
											$user['vasohielo'] * 0.1+
											$user['heineken'] * 3+
											$user['aguap'] * 0.75+
											$user['cajetillag'] * 5+
											$user['cajetillap'] * 2.5+
											$user['cadejopro'] * 5+
											$user['botellavino2'] * 20+
											$user['michelada'] * 1+
											$user['budlight'] * 3+
											$user['bombay'] * 5+
											$user['bombaydoble'] * 8+
											$user['regia'] * 4+
											$user['stela'] * 2.5+
											$user['santacruz'] * 2.5+
											$user['michelob'] * 2.5+
											$user['modelo'] * 2.5;
										}
										if($user['special']==1){
											if($user['codspecial']==18||$user['codspecial']==6||$user['codspecial']==8){
												$totalc=$totalc-$user['pilsener1'] * 1-$user['golden1'] * 1;
												$totalc=$totalc/2;
												$totalc=$totalc+$user['pilsener1'] * 1+$user['golden1'] * 1;
											}
										}
										$cover=$user['cash']+$user['pos'];
										if($day==7){
											if($totalc<=$cover){
												$totalc=0;
											}else{
												$totalc=$totalc-$cover;	
											}
										}

										$totalc=$totalc+$user['masajecorto']*15+$user['masajelargo']*30+$user['popper']*30+$user['lub']*0.25;
										if($user['codspecial']==15){
											$totalc=0;
										}
										$totalcirculando=$totalcirculando+$totalc;
								}
							?>$<?php echo $totalcirculando; ?></p></td>
							<td align="center"><p id="l5">Gastos:</p><p id="l3">
							<?php
								$little=0;
								foreach ($littlecash as $lcash) {
									$little=$little+$lcash['amount'];
								}
								echo $little;
							?>$</p></td>
						</tr>
						<tr>
							<td align="center"><p id="l3">Total en caja:</p><p id="l1"><?php $total=$totalcash+$totalpos; echo $total; ?>$</p></td>
							<td align="center"><p id="l3">Total día:</p><p id="l1"><?php $total=$totalday+$totalpos; echo $total; ?>$</p></td>
						</tr>
						<tr>
							<td align="center">
							<form action="index.php?/client/report" name="form2" id="form2" method="post">
								<input type="date" name="date" id="date" value="<?php echo date('Y-m-d') ?>">
							</form>
								<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="report();">
									<span class="ui-button-text">Registro de Consumos</span>
								</button>
							</td>
							<td align="center">
								<form action="index.php?/client/reportMassages" method="post">
									<input type="date" name="start" value="<?php echo date('Y-m-d') ?>">
									<input type="date" name="end" value="<?php echo date('Y-m-d') ?>">
								<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
									<span class="ui-button-text">Reprote masajes</span>
								</button>
								</form>
							</td>
						</tr>
					</table>
				</div>
			</td>
			<td valign="top">
				<form action="index.php?/client/cashSaveChanges" name="form1" id="form1" method="post">
				<div id="tableborder_2">
					<p id="l3" style="text-align: center;">Administrar Caja</p>
					<p id="l5">Motivo: <input type="text" name="reason" id="reason"> Cantidad: <input type="text" name="amount" size="1" id="amount">$</p>
					<p id="l5">Acción: <select name="modus" id="" style="width: 70px;">
											<option value="0">Añadir</option>
											<option value="1">Retirar</option>
										</select> 
					Objetivo: <select name="type" id="" style="width: 70px;">
									<option value="0">Caja</option>
									<option value="1">C. Chica</option>
								</select>&nbsp;&nbsp;<a id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="validar_formulario()">
									<span class="ui-button-text">Guardar</span>
								</a></p>
				</div>
				</form>
				<br>
				<div id="container" style="height: 260px;">
					<div id="container_2">
						<table border="0" width="100%">
							<tr>
								<th id="l6" style="font-weight: bold;">Motivo</th>
								<th id="l6" style="font-weight: bold;">Cantidad</th>
								<th id="l6" style="font-weight: bold;">Acción</th>
								<th id="l6" style="font-weight: bold;">Objetivo</th>
								<th id="l6" style="font-weight: bold;">Fecha</th>
							</tr>
							<?php foreach ($records as $record) {?>
							<tr>
								<td id="l6" align="center"><?php echo $record['reason']; ?></td>
								<td id="l6" align="center"><?php echo $record['amount']; ?>$</td>
								<td id="l6" align="center"><?php if ($record['modus']==0) {
									echo "Añadir";
								}else{
									echo "Retirar";
									} ?></td>
								<td id="l6" align="center"><?php if ($record['type']==0) {
									echo "Caja";
								}else{
									echo "C. Chica";
									} ?></td>
								<td id="l6" align="center"><?php echo $record['date']; ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</td>
		</tr>
	</table>
<?php $this->load->view('footer'); ?>