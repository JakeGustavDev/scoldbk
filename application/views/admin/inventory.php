<?php $this->load->view('header'); ?>
<table align="center" width="550px">
	<tr>
		<td>
			<div id="tableborder_2">
			<table align="center" border="0" width="100%">
				<tr>
					<td id="l2">Inventario</td>
				</tr>
			</table>
			</div>
		</td>
	</tr>
</table>
<form action="index.php?/bar/editInventory" name="form1" id="form1" method="post">
<table align="center" width="550px">
	<tr>
		<td>
			<div id="tableborder_2">
				<br>
				<table align="right" border="0" width="30%">
					<tr>
						<td>
							<input type="submit" value="Guardar" title="Guardar datos"></input>
							<input type="reset" value="Limpiar" title="Limpiar campos"></input>
						</td>
					</tr>
				</table>
				<table id="tableborderfine_1" align="center" border="1" width="90%">
					<tr>
						<td width="60%" id="l4" align="center">Descripción</td>
						<td width="20%" id="l4" align="center">Cantidad</td>
						<td width="20%" id="l4" align="center">Editar</td>
					</tr>
					<?php foreach ($inventory as $item) {?>
					<tr>
						<td id="l41" align="center"><?php echo $item['description'];?></td>
						<td id="l41" align="center"><?php echo (int) $item['amount'];?><p id="l7" style="display: inline;"><?php echo $item['unity']; ?><?php
																																						if ($item['cod']==1 || $item['cod']==2 || $item['cod']==3 || $item['cod']==4 || $item['cod']==5 || $item['cod']==6) {
																																				  ?> ~ <?php $shots=$item['amount']/$item['shot']; echo (int) $shots; ?> shots
																																				  <?php
																																						}
																																					?></p></td>
						<td id="l41" align="center"><input type="text" name="<?php echo $item['alias']; ?>" size="4"></input></td>
					</tr>
					<?php } ?>
				</table>
				<table align="right" border="0" width="30%">
					<tr>
						<td>
							<input type="submit" value="Guardar" title="Guardar datos"></input>
							<input type="reset" value="Limpiar" title="Limpiar campos"></input>
						</td>
					</tr>
				</table>
				<br>
				<br>
				<br>
			</div>
		</td>
	</tr>
</table>
</form>
<?php $this->load->view('footer'); ?>