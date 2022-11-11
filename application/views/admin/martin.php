<?php $this->load->view('header'); ?>
	<table width="50px" border="0">
		<tr>
			<td>
				<div id="tableborder_2">
					<table aling="center" border="0">
						<tr>
							<td>
							<?php
								$ivodka=750/20;
								$iron=750/20;
								$iwhisky=1000/26;
								$itequila=1000/26;
								$itequilad=750/20;
								$icocktail=5500/20;
							?>
								<a href="index.php?/bar/martinDrink?cod=2&amount=<?php echo $ivodka; ?>">
									<div id="btnbar" align="center">
										<p id="l6">VODKA</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=3&amount=<?php echo $iron; ?>">
									<div id="btnbar" align="center">
										<p id="l6">RON</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=4&amount=<?php echo $iwhisky; ?>">
									<div id="btnbar" align="center">
										<p id="l6">WHISKY</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=6&amount=<?php echo $itequila; ?>">
									<div id="btnbar" align="center">
										<p id="l6">TEQUILA</p>
									</div>
								</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="index.php?/bar/martinDrink?cod=10&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">PILSENER</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=11&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">GOLDEN</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=12&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">SUPREMA</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=13&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">CORONA</p>
									</div>
								</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="index.php?/bar/martinDrink?cod=14&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">SMIRNOFF</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=20&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">COCKTAIL</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=15&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">COKA<br>COLA</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=16&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">SODA</p>
									</div>
								</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="index.php?/bar/martinDrink?cod=8&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">BOTELLA<br>CON<br>AGUA</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=17&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">ICE TEA</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=18&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">GATOR<br>ADE</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=19&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">POWER<br>ADE</p>
									</div>
								</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="index.php?/bar/martinDrink?cod=21&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">BOTELLA<br>VINO</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=3&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">BOTELLA<br>RON</p>
									</div>
								</a>
							</td>
							<td>
								<a href="index.php?/bar/martinDrink?cod=2&amount=1">
									<div id="btnbar" align="center">
										<p id="l6">BOTELLA<br>VODKA</p>
									</div>
								</a>
							</td>
							<td>
								<div id="btnclose" align="center" onclick="window.close()">
									<p id="l6">CERRAR</p>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
<?php $this->load->view('footer'); ?>