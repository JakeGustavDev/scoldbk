<?php $this->load->view('header'); ?>
<script language="javascript">

	document.getElementById("drink").selectedIndex=<?php $user['courtesy']; ?>

	function confirm1(locker){
				
		if(confirm("Agregar Masaje Corto?")){
		
			window.location.href = "index.php?/client/addMasaje?type=1&locker="+locker;
	
		} 

	}

	function confirm2(locker){
				
		if(confirm("Agregar Masaje Largo?")){
		
			window.location.href = "index.php?/client/addMasaje?type=2&locker="+locker;
	
		} 

	}

	function helou(){
		
			

	}

</script>
<?php 
foreach ($locker as $user) {
?>
<table width="400px" border="0">
	<tr>
		<td>
			<div id="tableborder_2">
				<form action="index.php?/client/editLocker" name="form1" id="form1" method="post">
					<table aling="center" border="0" width="100%">
						<tr>
							<td width="70%">
								<table aling="center" border="0">
									<tr>
										<td>
											<div id="l4">
												<strong>Consumos:</strong>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<table id="tableborderfine_1" aling="center" border="1">
												<tr>
													<td><p id="l6">Cortesía:</p> </td>
													<td align="center">
													<?php
														if ($user['special']==0) {
													?>
													<input type="text" name="locker" style="display:none" value="<?php echo $user['number']; ?>">
													<select name="drink" id="drink" style="width:110px;">
														<option value="0">Seleccione</option>
														<option value="1">Agua</option>
														<option value="2">Cocktail</option>
														<option value="3">Pilsener</option>
														<option value="4">Golden</option>
														<option value="5">Vodka</option>
														<option value="6">Ron</option>
														<option value="7">Powerade</option>
														<option value="8">Soda</option>
														<option value="9">Coca-cola</option>
													</select>
													<?php
														}
													?>
													</td>
												</tr>
												<tr>
													<td><p id="l6">Tipo</p></td>
													<td align="center"><p id="l6">Cantidad</p></td>
												</tr>
												<tr>
													<td><p id="l6">Masaje 1:</p> </td>
													<td align="center"><input name="masajecorto" id="user" size="3" value="<?php echo $user['masajecorto']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Masaje 2:</p> </td>
													<td align="center"><input name="masajelargo" id="user" size="3" value="<?php echo $user['masajelargo']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Vodka Sencillo:</p> </td>
													<td align="center"><input name="vodka" id="user" size="3" value="<?php echo $user['vodka']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Vodka Doble:</p> </td>
													<td align="center"><input name="vodkadoble" id="user" size="3" value="<?php echo $user['vodkadoble']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Vodka Descuento:</p> </td>
													<td align="center"><input name="vodka2" id="user" size="3" value="<?php echo $user['vodka2']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Vodka Finlandia</p></td>
													<td align="center"><p id="l6"><?php echo $user['vodkafin']; ?></p></td>
												</tr>
												<tr>
													<td><p id="l6">Vodka Finlandia Doble</p></td>
													<td align="center"><p id="l6"><?php echo $user['vodkafindoble']; ?></p></td>
												</tr>
												<tr>
													<td><p id="l6">Ron Sencillo:</p> </td>
													<td align="center"><input name="ron" id="user" size="3" value="<?php echo $user['ron']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Ron Doble:</p> </td>
													<td align="center"><input name="rondoble" id="user" size="3" value="<?php echo $user['rondoble']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Ron Descuento:</p> </td>
													<td align="center"><input name="ron2" id="user" size="3" value="<?php echo $user['ron2']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Whisky:</p> </td>
													<td align="center"><input name="whisky" id="user" size="3" value="<?php echo $user['whisky']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Whisky Doble: </p></td>
													<td align="center"><input name="whiskydoble" id="user" size="3" value="<?php echo $user['whiskydoble']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Tequila Sencillo</p></td>
													<td align="center"><p id="l6"><?php echo $user['tequila']; ?></p></td>
												</tr>
												<tr>
													<td><p id="l6">Tequila Casa</p></td>
													<td align="center"><p id="l6"><?php echo $user['tequilac']; ?></p></td>
												</tr>
												<tr>
													<td><p id="l6">Tequila Doble</p></td>
													<td align="center"><p id="l6"><?php echo $user['tequiladoble']; ?></p></td>
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
													<td><p id="l6">Pilsener:</p> </td>
													<td align="center"><input name="pilsener" id="user" size="3" value="<?php echo $user['pilsener']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Pilsener Descuento:</p> </td>
													<td align="center"><input name="pilsener1" id="user" size="3" value="<?php echo $user['pilsener1']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Golden:</p> </td>
													<td align="center"><input name="golden" id="user" size="3" value="<?php echo $user['golden']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Golden Descuento:</p> </td>
													<td align="center"><input name="golden1" id="user" size="3" value="<?php echo $user['golden1']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">3x5 PG:</p> </td>
													<td align="center"><input name="3x5" id="user" size="3" value="<?php echo $user['pro3x5']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Suprema:</p> </td>
													<td align="center"><input name="suprema" id="user" size="3" value="<?php echo $user['suprema']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Corona:</p> </td>
													<td align="center"><input name="corona" id="user" size="3" value="<?php echo $user['corona']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Smirnoff:</p> </td>
													<td align="center"><input name="smirnoff" id="user" size="3" value="<?php echo $user['smirnoff']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Cocktail Scandinavia:</p> </td>
													<td align="center"><input name="cocktailscandinavia" id="user" size="3" value="<?php echo $user['cocktailscandinavia']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Cocktail Scandinavia Descuento:</p> </td>
													<td align="center"><input name="cocktailscandinavia1" id="user" size="3" value="<?php echo $user['cocktailscandinavia1']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Sun Ride</p></td>
													<td align="center"><p id="l6"><?php echo $user['sunride']; ?></p></td>
												</tr>
												<tr>
													<td><p id="l6">Sun Ride Doble</p></td>
													<td align="center"><p id="l6"><?php echo $user['sunridedoble']; ?></p></td>
												</tr>
												<tr>
													<td><p id="l6">Coca-Cola:</p> </td>
													<td align="center"><input name="cokacola" id="user" size="3" value="<?php echo $user['cokacola']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Sodas:</p> </td>
													<td align="center"><input name="sodas" id="user" size="3" value="<?php echo $user['sodas']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Botella Con Agua:</p> </td>
													<td align="center"><input name="water" id="user" size="3" value="<?php echo $user['water']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Ice Tea:</p> </td>
													<td align="center"><input name="icetea" id="user" size="3" value="<?php echo $user['icetea']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Gatorade:</p> </td>
													<td align="center"><input name="gatorade" id="user" size="3" value="<?php echo $user['gatorade']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Powerade:</p> </td>
													<td align="center"><input name="powerade" id="user" size="3" value="<?php echo $user['powerade']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Energizante</p></td>
													<td align="center"><p id="l6"><?php echo $user['energizer']; ?></p></td>
												</tr>
												<tr>
													<td><p id="l6">Botella Vino:</p> </td>
													<td align="center"><input name="botellavino" id="user" size="3" value="<?php echo $user['botellavino']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Botella Ron:</p> </td>
													<td align="center"><input name="botellaron" id="user" size="3" value="<?php echo $user['botellaron']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Botella Vodka:</p> </td>
													<td align="center"><input name="botellavodka" id="user" size="3" value="<?php echo $user['botellavodka']; ?>"></td>
												</tr>
												<tr>
													<td><p id="l6">Vaso Hielo:</p> </td>
													<td align="center"><input name="vasohielo" id="user" size="3" value="<?php echo $user['vasohielo']; ?>"></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
							<td valign="top" align="left" width="30%">
								<br>
								<br>
								<br>
								<br>
								<table aling="center" border="0">
									<tr>
										<td>
											<div id="botton_save" align="center" class="b_save" onclick="$('#form1').submit();">
												<img src="images/9.png" width="60%" style="margin-top: 22%;" title="Guardar cambios">
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<hr>
											<p id="l6">Total:</p>
												<?php $total=$user['masajecorto'] * 15+
																	$user['masajelargo'] * 25+
																	$user['vodka'] * 3+
																	$user['vodkadoble'] * 5+
																	$user['vodka2'] * 2+
																	$user['ron'] * 3+
																	$user['rondoble'] * 5+
																	$user['ron2'] * 2+
																	$user['whisky'] * 5+
																	$user['whiskydoble'] * 8+
																	$user['tequila'] * 3+
																	$user['tequilac'] * 2+
																	$user['tequiladoble'] * 5+
																	$user['tequilacdoble'] * 4+
																	$user['tequila1'] * 1+
																	$user['tequilac1'] * 1+
																	$user['pilsener'] * 2+
																	$user['pilsener1'] * 1+
																	$user['golden'] * 2+
																	$user['golden1'] * 1+
																	$user['pro3x5'] * 5+
																	$user['suprema'] * 2.5+
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
																	$user['vasohielo'] * 0.1
														; ?>
												<p id="l1"><?php echo $total; ?>$</p>
										</td>
									</tr>
								</table>							
							</td>
						</tr>
					</table>
				</form>
			</div>
		</td>
	</tr>
</table>
<?php } ?>
<?php $this->load->view('footer'); ?>