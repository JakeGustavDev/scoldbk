<?php $this->load->view('header'); ?>
<table align="center" width="990px">
	<tr>
		<td>
			<div id="tableborder_2">
			<table align="center" border="0" width="100%">
				<tr>
					<td id="l2">Consultar Registros Completos</td>
				</tr>
			</table>
			</div>
		</td>
	</tr>
</table>
<table align="center" width="990px">
	<tr>
		<td>
			<div id="tableborder_2">
			<form action="index.php?/client/fullRecordMonth" name="form1" id="form1" method="post">
			<table align="center" border="0" width="50%">
				<tr>
					<td id="l4" align="right">Mes:</td>
					<td>
						<select id="l5" name="month" id="month" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="01" id="l6">Enero</option>
							<option value="02" id="l6">Febrero</option>
							<option value="03" id="l6">Marzo</option>
							<option value="04" id="l6">Abril</option>
							<option value="05" id="l6">Mayo</option>
							<option value="06" id="l6">Junio</option>
							<option value="07" id="l6">Julio</option>
							<option value="08" id="l6">Agosto</option>
							<option value="09" id="l6">Septiembre</option>
							<option value="10" id="l6">Octubre</option>
							<option value="11" id="l6">Noviembre</option>
							<option value="12" id="l6">Diciembre</option>
						</select>
					</td>
					<td id="l4" align="right">Año:</td>
					<td width="18%">
						<select id="l5" name="year" id="year" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="2016" id="l6">2016</option>
							<option value="2017" id="l6">2017</option>
							<option value="2018" id="l6">2018</option>
							<option value="2019" id="l6">2019</option>
							<option value="2020" id="l6">2020</option>
							<option value="2021" id="l6">2021</option>
							<option value="2022" id="l6">2022</option>
							<option value="2023" id="l6">2023</option>
							<option value="2024" id="l6">2024</option>
							<option value="2025" id="l6">2025</option>
						</select>
					</td>
					<td width="7%">
						<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="">
							<span class="ui-button-text">Consultar</span>
						</button>
					</td>
				</tr>
			</table>
			<hr width="80%">
			</form>
			<form action="index.php?/client/fullRecordDay" name="form2" id="form2" method="post">
			<table align="center" border="0" width="100%">
				<tr>
					<td id="l4" align="right">Día:</td>
					<td>
						<select id="l5" name="day" id="day" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="01" id="l6">01</option>
							<option value="02" id="l6">02</option>
							<option value="03" id="l6">03</option>
							<option value="04" id="l6">04</option>
							<option value="05" id="l6">05</option>
							<option value="06" id="l6">06</option>
							<option value="07" id="l6">07</option>
							<option value="08" id="l6">08</option>
							<option value="09" id="l6">09</option>
							<option value="10" id="l6">10</option>
							<option value="11" id="l6">11</option>
							<option value="12" id="l6">12</option>
							<option value="13" id="l6">13</option>
							<option value="14" id="l6">14</option>
							<option value="15" id="l6">15</option>
							<option value="16" id="l6">16</option>
							<option value="17" id="l6">17</option>
							<option value="18" id="l6">18</option>
							<option value="19" id="l6">19</option>
							<option value="20" id="l6">20</option>
							<option value="21" id="l6">21</option>
							<option value="22" id="l6">22</option>
							<option value="23" id="l6">23</option>
							<option value="24" id="l6">24</option>
							<option value="25" id="l6">25</option>
							<option value="26" id="l6">26</option>
							<option value="27" id="l6">27</option>
							<option value="28" id="l6">28</option>
							<option value="29" id="l6">29</option>
							<option value="30" id="l6">30</option>
							<option value="31" id="l6">31</option>
						</select>
					</td>
					<td id="l4" align="right">Mes:</td>
					<td>
						<select id="l5" name="month2" id="month" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="01" id="l6">Enero</option>
							<option value="02" id="l6">Febrero</option>
							<option value="03" id="l6">Marzo</option>
							<option value="04" id="l6">Abril</option>
							<option value="05" id="l6">Mayo</option>
							<option value="06" id="l6">Junio</option>
							<option value="07" id="l6">Julio</option>
							<option value="08" id="l6">Agosto</option>
							<option value="09" id="l6">Septiembre</option>
							<option value="10" id="l6">Octubre</option>
							<option value="11" id="l6">Noviembre</option>
							<option value="12" id="l6">Diciembre</option>
						</select>
					</td>
					<td id="l4" align="right">Año:</td>
					<td>
						<select id="l5" name="year2" id="year" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="2016" id="l6">2016</option>
							<option value="2017" id="l6">2017</option>
							<option value="2018" id="l6">2018</option>
							<option value="2019" id="l6">2019</option>
							<option value="2020" id="l6">2020</option>
							<option value="2021" id="l6">2021</option>
							<option value="2022" id="l6">2022</option>
							<option value="2023" id="l6">2023</option>
							<option value="2024" id="l6">2024</option>
							<option value="2025" id="l6">2025</option>
						</select>
					</td>
					<td>
						<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="">
							<span class="ui-button-text">Consultar</span>
						</button>
					</td>
				</tr>
			</table>
			</form>
			</div>
		</td>
	</tr>
</table>
<table align="center" width="990px">
	<tr>
		<td>
			<div id="tableborder_2">
			<table align="center" border="0" width="100%">
				<tr>
					<td width="50%">
					<?php
						$extraTotal=0;
						foreach ($additional as $extraMoney) {
							$extraTotal=$extraTotal+$extraMoney['cash']+$extraMoney['pos'];
						}
					?>
					<?php
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
										$consumption['vasohielo'] * 0.1;

						}
						$total=$neto+$fees+$extraTotal;
					?>
						<div id="containerfixed">
							<div id="container_2">
								<table id="tableborderfine_1" aling="center" border="1"  width="100%"> <!-- Tabla productos -->
									<tr>
										<td>
											<p id="l6"><strong>Cortesías</strong></p>
										</td>
										<td align="center">
											<p id="l6"><strong>Cantidad</strong></p>
										</td>
									</tr>
									<tr>
										<td><p id="l6">Agua Cortesía</p></td>
										<td align="center"><p id="l6"><?php echo $waterc; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Cocktail Cortesía</p></td>
										<td align="center"><p id="l6"><?php echo $cocktailc; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Pilsener Cortesía</p></td>
										<td align="center"><p id="l6"><?php echo $pilsenerc; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Golden Cortesías</p></td>
										<td align="center"><p id="l6"><?php echo $goldenc; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Vodka Cortesía</p></td>
										<td align="center"><p id="l6"><?php echo $vodkac; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Ron Cortesía</p></td>
										<td align="center"><p id="l6"><?php echo $ronc; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Powerade Cortesía</p></td>
										<td align="center"><p id="l6"><?php echo $poweradec; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6"><strong>Consumos</strong></p></td>
										<td align="center"><p id="l6"><strong>Cantidad</strong></p></td>
									</tr>
									<tr>
										<td><p id="l6">Masaje 1</p></td>
										<td align="center"><p id="l6"><?php echo $masaje1; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Masaje 2</p></td>
										<td align="center"><p id="l6"><?php echo $masaje2; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Vodka Sencillo</p></td>
										<td align="center"><p id="l6"><?php echo $vodka; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Vodka Doble</p></td>
										<td align="center"><p id="l6"><?php echo $vodkadoble; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Vodka Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $vodka2; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Ron Sencillo</p></td>
										<td align="center"><p id="l6"><?php echo $ron; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Ron Doble</p></td>
										<td align="center"><p id="l6"><?php echo $rondoble; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Ron Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $ron2; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Whisky</p></td>
										<td align="center"><p id="l6"><?php echo $whisky; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Whisky Doble</p></td>
										<td align="center"><p id="l6"><?php echo $whiskydoble; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Tequila Sencillo</p></td>
										<td align="center"><p id="l6"><?php echo $tequila; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Tequila Doble</p></td>
										<td align="center"><p id="l6"><?php echo $tequiladoble; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Tequila Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $tequila1; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Pilsener</p></td>
										<td align="center"><p id="l6"><?php echo $pilsener; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Pilsener Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $pilsener1; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Golden</p></td>
										<td align="center"><p id="l6"><?php echo $golden; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Golden Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $golden1; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">3x5 PG</p></td>
										<td align="center"><p id="l6"><?php echo $pro3x5; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Pilsener Promoción</p></td>
										<td align="center"><p id="l6"><?php echo $auxpilsener; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Golden Promoción</p></td>
										<td align="center"><p id="l6"><?php echo $auxgolden; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Suprema</p></td>
										<td align="center"><p id="l6"><?php echo $suprema; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Corona</td>
										<td align="center"><p id="l6"><?php echo $corona; ?></td>
									</tr>
									<tr>
										<td><p id="l6">Smirnoff</p></td>
										<td align="center"><p id="l6"><?php echo $smirnoff; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Cocktail Scandinavia</p></td>
										<td align="center"><p id="l6"><?php echo $cocktailscandinavia; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Cocktail Scandinavia Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $cocktailscandinavia1; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Coca-Cola</p></td>
										<td align="center"><p id="l6"><?php echo $cokacola; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Sodas</p></td>
										<td align="center"><p id="l6"><?php echo $sodas; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Botella Con Agua</p></td>
										<td align="center"><p id="l6"><?php echo $water; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Ice Tea</p></td>
										<td align="center"><p id="l6"><?php echo $icetea; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Gatorade</p></td>
										<td align="center"><p id="l6"><?php echo $gatorade; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Powerade</p></td>
										<td align="center"><p id="l6"><?php echo $powerade; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Botella Vino</p></td>
										<td align="center"><p id="l6"><?php echo $botellavino; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Botella Ron</p></td>
										<td align="center"><p id="l6"><?php echo $botellaron; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Botella Vodka</p></td>
										<td align="center"><p id="l6"><?php echo $botellavodka; ?></p></td>
									</tr>
									<tr>
										<td><p id="l4">Producido Consumos</p></td>
										<td align="center"><p id="l4"><?php echo $neto; ?>$</p></td>
									</tr>
									<tr>
										<td><p id="l4">Dinero Adicional</p></td>
										<td align="center"><p id="l4"><?php echo $extraTotal; ?>$</p></td>
									</tr>
									<tr>
										<td><p id="l4">Covers</p></td>
										<td align="center"><p id="l4"><?php echo $fees; ?>$</p></td>
									</tr>
									<tr>
										<td><p id="l2">Total</p></td>
										<td align="center"><p id="l2"><?php echo $total; ?>$</p></td>
									</tr>
								</table>
							</div>
						</div>
					</td>
					<td width="50%">
						<div id="containerfixed">
							<div id="container_2">
								<?php foreach ($additional as $additionalItem) { ?>
								<table id="tableborderfine_1" aling="center" border="1"  width="100%">
									<tr>
										<td><p id="l6">Descripción</p></td>
										<td align="center"><p id="l6"><?php echo $additionalItem['description']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Cantidad</p></td>
										<td align="center"><p id="l6"><?php echo $additionalItem['amount']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l4">Total</p></td>
										<td align="center"><p id="l4"><?php $money=$additionalItem['cash']+$additionalItem['pos']; echo $money; ?>$</p></td>
									</tr>
								</table>
								<hr>
								<?php } ?>
								<?php foreach ($result as $consumption) { ?>
								<table id="tableborderfine_1" aling="center" border="1"  width="100%"> <!-- Tabla productos -->
									<tr>
										<td><p id="l6"><strong>Cliente</strong></p></td>
										<td align="center"><p id="l6"><strong><?php echo $consumption['clientname']; ?></strong></p></td>
									</tr>
									<tr>
										<td>
											<p id="l6">Cortesía</p>
										</td>
										<td align="center">
											<p id="l6">
											<?php
												$courtesy=array("","Agua","Cocktail","Pilsener","Golden","Vodka","Ron","Powerade"); 
												echo $courtesy[$consumption['courtesy']]; 
											?>
											</p>
										</td>
									</tr>
									<tr>
										<td><p id="l6"><strong>Tipo </strong></p></td>
										<td align="center"><p id="l6"><strong> Cantidad </strong></p></td>
									</tr>
									<tr>
										<td><p id="l6">Masaje 1</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['masajecorto']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Masaje 2</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['masajelargo']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Vodka Sencillo</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['vodka']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Vodka Doble</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['vodkadoble']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Vodka Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['vodka2']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Ron Sencillo</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['ron']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Ron Doble</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['rondoble']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Ron Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['ron2']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Whisky</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['whisky']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Whisky Doble</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['whiskydoble']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Tequila Sencillo</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['tequila']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Tequila Doble</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['tequiladoble']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Tequila Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['tequila1']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Pilsener</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['pilsener']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Pilsener Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['pilsener1']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Golden</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['golden']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Golden Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['golden1']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">3x5 PG</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['pro3x5']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Suprema</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['suprema']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Corona</td>
										<td align="center"><p id="l6"><?php echo $consumption['corona']; ?></td>
									</tr>
									<tr>
										<td><p id="l6">Smirnoff</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['smirnoff']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Cocktail Scandinavia</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['cocktailscandinavia']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Cocktail Scandinavia Descuento</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['cocktailscandinavia1']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Coca-Cola</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['cokacola']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Sodas</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['sodas']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Botella Con Agua</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['water']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Ice Tea</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['icetea']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Gatorade</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['gatorade']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Powerade</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['powerade']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Botella Vino</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['botellavino']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Botella Ron</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['botellaron']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Botella Vodka</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['botellavodka']; ?></p></td>
									</tr>
									<tr>
										<td><p id="l6">Vaso Hielo</p></td>
										<td align="center"><p id="l6"><?php echo $consumption['vasohielo']; ?></p></td>
									</tr>
									<tr>
										
										<?php
											$fee=0;
											$fee=$consumption['cashfee']+$consumption['posfee']; 
											$subtotal=0;
											$subtotal=$consumption['masajecorto'] * 15+
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
														$consumption['vasohielo'] * 0.1;
										?>
										<td><p id="l4">Cover</p></td>
										<td align="center"><p id="l4"><?php echo $fee; ?>$
										</p></td>
									</tr>
									<tr>
										<td><p id="l4">Subtotal</p></td>
										<td align="center"><p id="l4"><?php echo $subtotal; ?>$</p></td>
									</tr>
									<tr>
										<td><p id="l3">Total</p></td>
										<td align="center"><p id="l3">
										<?php 
											$totald=$subtotal+$fee;
											echo $totald;
										?>$
										</p></td>
									</tr>
								</table>
								<hr>
								<?php } ?>
							</div>
						</div>
					</td>
				</tr>
			</table>
			</div>
		</td>
	</tr>
</table>

<?php $this->load->view('footer'); ?>