<?php $this->load->view('header'); ?>
<script language="javascript">
	function confirm3(urlconection, name) {

		if (confirm("Agregar " + name + "?")) {

			window.location.href = urlconection;

		}

	}

	function despachar() {

		if ($('#drink').val() == 0) {

			alert("Ingrese una bebida");
			location.reload();

		} else {

			$('#form1').submit();

		}

	}

	function pg3x5() {

		if (confirm("Agregar PROMOCIÓN?")) {
			$('#form2').submit();
		}
	}

	function pcadejo() {

		if (confirm("Agregar PROMOCIÓN?")) {
			$('#form3').submit();
		}
	}
</script>
<?php
foreach ($locker as $user) {
?>

	<div id="accordion_locker">
		<p id="l4">Locker N° <?php echo $user['number']; ?> - Ocupante: <?php echo $user['user']; ?> | Cover: <?php $cover = $user['cash'] + $user['pos'];
																												echo $cover; ?>$</p>
		<hr width="95%">

		<!-- LISTA EN TABLA -->
		<div border="0" id="lateral2">
			<?php
			$day = date('N');
			if ($user['special'] == 0 && $user['courtesye'] == 0 && $cover > 0) {
			?>
				<form action="index.php?/bar/giveCourtesy" name="form1" id="form1" method="post">
					<div aling="center" border="0">
						<p id="l6">Cortesía:</p>
						<input type="text" name="locker" style="display:none" value="<?php echo $user['number']; ?>">
						<select name="drink" id="drink" style="width:110px;">
							<option value="0">Seleccione</option>
							<?php if ($day == 1) { ?>
								<option value="1">Agua</option>
								<option value="2">Cocktail</option>
							<?php } ?>
							<?php if ($day == 2) { ?>
								<option value="1">Agua</option>
								<option value="2">Cocktail</option>
								<?php if ($cover == 10) { ?>
									<option value="6">Ron</option>
								<?php } ?>
							<?php } ?>
							<?php if ($day == 3) { ?>
								<option value="1">Agua</option>
								<option value="2">Cocktail</option>
								<?php if ($cover == 10) { ?>
									<option value="6">Ron</option>
								<?php } ?>
							<?php } ?>
							<?php if ($day == 4) { ?>
								<option value="1">Agua</option>
								<option value="2">Cocktail</option>
								<option value="6">Ron</option>
							<?php } ?>
							<?php if ($day == 5) { ?>
								<option value="1">Agua</option>
								<option value="2">Cocktail</option>
								<!-- <option value="6">Ron</option> -->
							<?php } ?>
							<?php if ($day == 6) { ?>
								<option value="1">Agua</option>
								<option value="2">Cocktail</option>
								<option value="6">Ron</option>
							<?php } ?>
							<?php if ($day == 7) { ?>
								<option value="1">Agua</option>
								<option value="2">Cocktail</option>
								<option value="6">Ron</option>
							<?php } ?>
						</select>
						<div id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="despachar()">
							<span class="ui-button-text">Despachar</span>
						</div>
					</div>
				</form>
			<?php
			}
			?>
			<strong id="l4"> Consumos</strong>
			<table id="tableborderfine_1" aling="center" border="1" width="300px">
				<!-- Tabla productos -->
				<tr>
					<td>
						<p id="l6">Cortesía</p>
					</td>
					<td align="center">
						<p id="l6">
							<?php
							$courtesy = array("", "Agua", "Cocktail", "Pilsener", "Golden", "Vodka", "Ron", "Powerade", "Soda", "Coca-Cola");
							echo $courtesy[$user['courtesy']];
							?>
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6"><strong>Tipo </strong></p>
					</td>
					<td>
						<p id="l6"><strong> Cantidad </strong></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Masaje 1</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['masajecorto']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Masaje 2</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['masajelargo']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Cajetilla Grande</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['cajetillag']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Cajetilla Pequeña</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['cajetillap']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Popper</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['popper']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Snack</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['snack']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Vodka Red Sencillo</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['vodka']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Vodka Red Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['vodkadoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Vodka Descuento</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['vodka2']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Vodka Finlandia</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['vodkafin']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Vodka Finlandia Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['vodkafindoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Vodka Grey Goose</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['greygoose']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Vodka Grey Goose Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['greygoosedoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Ron Sencillo</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['ron']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Ron Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['rondoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Ron Descuento</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['ron2']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Whisky</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['whisky']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Whisky Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['whiskydoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Whisky Chivas Regal</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['whiskychivas']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Whisky Chivas Regal Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['whiskychivasdoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Tequila Imperio Sencillo</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['tequila']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Tequila José Cuervo Sencillo</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['tequilajc']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Tequila Casa</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['tequilac']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Tequila Imperio Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['tequiladoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Tequila José Cuervo Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['tequilajcdoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Tequila Casa Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['tequilacdoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Tequila Descuento</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['tequila1']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Tequila Casa Descuento</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['tequilac1']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Bombay Sencillo</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['bombay']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Bombay Doble</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['bombaydoble']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Gin Tonic</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['gin']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Shot Jager</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['jager']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Jager Bomb</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['jagerbomb']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Pilsener</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['pilsener']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Pilsener Descuento</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['pilsener1']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Golden</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['golden']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Golden Descuento</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['golden1']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">3x5 PG</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['pro3x5']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">3x5 Cabro</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['cadejopro']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Suprema</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['suprema']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Regia</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['regia']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Stela</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['stela']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Stela Desc.</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['stela1']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Santa Cruz</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['santacruz']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Cabro Desc.</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['cabro1']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Cihuatan</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['cadejo']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Corona</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['corona']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Corona Desc.</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['corona1']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Modelo</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['modelo']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Heineken</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['heineken']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Bud Light</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['budlight']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Michelob</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['michelob']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Michelob Desc.</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['michelob1']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Smirnoff</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['smirnoff']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Cocktail Scandinavia</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['cocktailscandinavia']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Cocktail Scandinavia Descuento</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['cocktailscandinavia1']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Michelada</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['michelada']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Coca-Cola</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['cokacola']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Sodas</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['sodas']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Botella Con Agua</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['water']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Botella Con Agua Peq.</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['aguap']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Ice Tea</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['icetea']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Gatorade</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['gatorade']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Powerade</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['powerade']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Sparkling</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['starkling']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Botella Vino</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['botellavino']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Botella Vino 2</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['botellavino2']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Botella Ron</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['botellaron']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Botella Vodka</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['botellavodka']; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p id="l6">Vaso Hielo</p>
					</td>
					<td align="center">
						<p id="l6"><?php echo $user['vasohielo']; ?></p>
					</td>
				</tr>
			</table>
		</div>
		<?php
		$ivodka = 750 / 20;
		$iron = 750 / 20;
		$iwhisky = 1000 / 26;
		$itequila = 1000 / 26;
		$itequilad = 750 / 20;
		$icocktail = 5500 / 20;
		?>
		<!-- LISTA EN BOTONES -->
		<?php
		$horai = new DateTime("14:00:00");
		$horaf = new DateTime("18:00:00");
		?>
		<div border="0" id="lateral" align="center">
			<div style="display: block;">
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=65','SNACK')">
					<div id="btnbar" align="center">
						<p id="l6">SNACK</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=0','VODKA')">
					<div id="btnbar" align="center">
						<p id="l6">VODKA<br>RED</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=1','VODKA DOBLE')">
					<div id="btnbar" align="center">
						<p id="l6">VODKA<br>DOBLE<br>RED</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=36','VODKA FINLANDIA')">
					<div id="btnbar" align="center">
						<p id="l6">VODKA<br>FINLANDIA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=37','VODKA FINLANDIA DOBLE')">
					<div id="btnbar" align="center">
						<p id="l6">VODKA<br>FINLANDIA<br>DOBLE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=61','GRAY GOOSE')">
					<div id="btnbar" align="center">
						<p id="l6">GREY<br>GOOSE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=62','GRAY GOOSE DOBLE')">
					<div id="btnbar" align="center">
						<p id="l6">GREY<br>GOOSE<br>DOBLE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=3','RON')">
					<div id="btnbar" align="center">
						<p id="l6">RON</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=4','RON DOBLE')">
					<div id="btnbar" align="center">
						<p id="l6">RON<br>DOBLE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=6','WHISKY')">
					<div id="btnbar" align="center">
						<p id="l6">WHISKY</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=7','WHISKY DOBLE')">
					<div id="btnbar" align="center">
						<p id="l6">WHISKY<br>DOBLE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=51','WHISKY CHIVAS')">
					<div id="btnbar" align="center">
						<p id="l6">WHISKY<br>CHIVAS</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=52','WHISKY CHIVAS DOBLE')">
					<div id="btnbar" align="center">
						<p id="l6">WHISKY<br>CHIVAS<br>DOBLE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=8','TEQUILA')">
					<div id="btnbar" align="center">
						<p id="l6">TEQUILA<br>IMPERIO</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=38','TEQUILA JOSE CUERVO')">
					<div id="btnbar" align="center">
						<p id="l6">TEQUILA<br>JOSE<br>CUERVO</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=32','TEQUILA DE LA CASA')">
					<div id="btnbar" align="center">
						<p id="l6">TEQUILA<br>CASA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=9','TEQUILA DOBLE')">
					<div id="btnbar" align="center">
						<p id="l6">TEQUILA<br>DOBLE<br>IMPERIO</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=39','TEQUILA JOSE CUERVO')">
					<div id="btnbar" align="center">
						<p id="l6">TEQUILA<br>DOBLE<br>JOSE<br>CUERVO</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=34','TEQUILA DE LA CASA')">
					<div id="btnbar" align="center">
						<p id="l6">TEQUILA<br>CASA<br>DOBLE</p>
					</div>
				</a><a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=48','BOMBAY')">
					<div id="btnbar" align="center">
						<p id="l6">BOMBAY</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=49','BOMBAY DOBLE')">
					<div id="btnbar" align="center">
						<p id="l6">BOMBAY<br>DOBLE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=58','GIN TONIC')">
					<div id="btnbar" align="center">
						<p id="l6">GIN<br>TONIC</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=59','SHOT JAGER')">
					<div id="btnbar" align="center">
						<p id="l6">SHOT<br>JAGER</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=60','JAGER BOMB')">
					<div id="btnbar" align="center">
						<p id="l6">JAGER<br>BOMB</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=11','PILSENER')">
					<div id="btnbar" align="center">
						<p id="l6">PILSENER</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=12','PILSENER DESC.')">
					<div id="btnbar" align="center">
						<p id="l6">PILSENER<br>DESC.</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=13','GOLDEN')">
					<div id="btnbar" align="center">
						<p id="l6">GOLDEN</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=14','GOLDEN DESC.')">
					<div id="btnbar" align="center">
						<p id="l6">GOLDEN<br>DESC.</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=17','SUPREMA')">
					<div id="btnbar" align="center">
						<p id="l6">SUPREMA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=67','CABRO DESC.')">
					<div id="btnbar" align="center">
						<p id="l6">CABRO<br>DESC.</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=53','REGIA')">
					<div id="btnbar" align="center">
						<p id="l6">REGIA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=54','STELA')">
					<div id="btnbar" align="center">
						<p id="l6">STELA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=69','STELA DESC.')">
					<div id="btnbar" align="center">
						<p id="l6">STELA<br>DESC.</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=55','SANTA CRUZ')">
					<div id="btnbar" align="center">
						<p id="l6">SANTA<br>CRUZ</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=42','CIHUATAN')">
					<div id="btnbar" align="center">
						<p id="l6">CIHUATAN</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=57','MODELO')">
					<div id="btnbar" align="center">
						<p id="l6">MODELO<br></p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=18','CORONA')">
					<div id="btnbar" align="center">
						<p id="l6">CORONA<br></p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=70','CORONA DESC.')">
					<div id="btnbar" align="center">
						<p id="l6">CORONA<br>DESC.</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=40','HEINEKEN')">
					<div id="btnbar" align="center">
						<p id="l6">HEINEKEN<br></p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=50','BUD LIGHT')">
					<div id="btnbar" align="center">
						<p id="l6">BUD<br>LIGHT</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=56','MICHELOB')">
					<div id="btnbar" align="center">
						<p id="l6">MICHELOB<br></p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=68','MICHELOB DESC.')">
					<div id="btnbar" align="center">
						<p id="l6">MICHELOB<br>DESC.</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=19','SMIRNOFF')">
					<div id="btnbar" align="center">
						<p id="l6">SMIRNOFF</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=20','COCKTAIL')">
					<div id="btnbar" align="center">
						<p id="l6">COCKTAIL<br>SCANDI</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=47','MICHELADA')">
					<div id="btnbar" align="center">
						<p id="l6">MIX<br>MICHE<br>LADA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=30','COCA-COLA')">
					<div id="btnbar" align="center">
						<p id="l6">COCA<br>COLA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=22','SODAS')">
					<div id="btnbar" align="center">
						<p id="l6">SODAS</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=23','BOTELLA CON AGUA')">
					<div id="btnbar" align="center">
						<p id="l6">BOTELLA<br>CON<br>AGUA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=41','BOTELLA CON AGUA PEQUEÑA')">
					<div id="btnbar" align="center">
						<p id="l6">BOTELLA<br>CON<br>AGUA<br>PEQ.</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=24','ICETEA')">
					<div id="btnbar" align="center">
						<p id="l6">ICETEA</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=25','GATORADE')">
					<div id="btnbar" align="center">
						<p id="l6">GATOR<br>ADE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=26','POWERADE')">
					<div id="btnbar" align="center">
						<p id="l6">POWER<br>ADE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=63','SPARKLING')">
					<div id="btnbar" align="center">
						<p id="l6">SPARK<br>LING</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=43','CAJETILLA GRANDE')">
					<div id="btnbar" align="center">
						<p id="l6">CAJETI<br>GRANDE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=44','CAJETILLA PEQUEÑA')">
					<div id="btnbar" align="center">
						<p id="l6">CAJETI<br>PEQUE</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=27','BOTELLA VINO')">
					<div id="btnbar" align="center">
						<p id="l6">BOTELLA<br>VINO</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=45','BOTELLA VINO')">
					<div id="btnbar" align="center">
						<p id="l6">BOTELLA<br>VINO<br>2</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=28','BOTELLA RON')">
					<div id="btnbar" align="center">
						<p id="l6">BOTELLA<br>RON</p>
					</div>
				</a>
				<a href="javascript:confirm3('index.php?/bar/giveDrink?locker=<?php echo $user['number']; ?>&type=29','BOTELLA VODKA')">
					<div id="btnbar" align="center">
						<p id="l6">BOTELLA<br>VODKA</p>
					</div>
				</a>
			</div>
		</div>
		<div id="lateral">
			<div style="display: block;">
				<?php if ($user['remaining'] == 0) { ?>
					<form action="index.php?/bar/remaining" name="form2" id="form2" method="post">
						<p id="l6">Añadir Promoción</p><br>
						<input type="text" name="locker" id="locker" style="display:none" value="<?php echo $user['number']; ?>">
						<a href="javascript:pg3x5()">
							<div id="btnbar" align="center">
								<p id="l6">3x5<br>PG</p>
							</div>
						</a>
					</form>
				<?php } else { ?>
					<div aling="center" border="0">
						<div>
							<br>
							<p id="l6">Cervezas de Promoción Restantes: <?php echo $user['remaining']; ?></p>
							<br>
						</div>
					</div>
					<div aling="center" border="0">
						<div>
							<a href="index.php?/bar/addDrink?locker=<?php echo $user['number']; ?>&type=0">
								<div id="btnbar" align="center">
									<p id="l6">SERVIR<br>PILSENER</p>
								</div>
							</a>
						</div>
						<div>
							<a href="index.php?/bar/addDrink?locker=<?php echo $user['number']; ?>&type=1">
								<div id="btnbar" align="center">
									<p id="l6">SERVIR<br>GOLDEN</p>
								</div>
							</a>
						</div>
					</div>
				<?php } ?>
				<?php if ($user['remainingc'] == 0) { ?>
					<form action="index.php?/bar/remainingc" name="form3" id="form3" method="post">
						<input type="text" name="locker" id="locker" style="display:none" value="<?php echo $user['number']; ?>">
						<a href="javascript:pcadejo()">
							<div id="btnbar" align="center">
								<p id="l6">3x5<br>CABRO</p>
							</div>
						</a>
					</form>
				<?php } else { ?>
					<div aling="center" border="0">
						<div>
							<br>
							<p id="l6">Restantes: <?php echo $user['remainingc']; ?></p>
							<br>
						</div>
					</div>
					<div aling="center" border="0">
						<div>
							<a href="index.php?/bar/addDrinkC?locker=<?php echo $user['number']; ?>&type=0">
								<div id="btnbar" align="center">
									<p id="l6">CABRO</p>
								</div>
							</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

<?php } ?>

<?php $this->load->view('footer'); ?>