<?php $this->load->view('header'); ?>
<script language="javascript">
	function validar_formulario(ev) {

		if ($('#description').val() == '' ||
			$('#amount').val() == '' ||
			$('#price').val() == '') {

			alert("Todos los campos son obligatorios");
			ev.preventDefault;
		} else {
			var description = document.getElementById("description").value
			var cash = parseFloat(document.getElementById("cash").value)
			var pos = parseFloat(document.getElementById("pos").value)
			var amount = parseFloat(document.getElementById("amount").value)
			var pago = (cash + pos) / amount;
			if (description == "popper pequeño $35") {
				if (pago != 30) {
					alert("Precio por unidad incorrecto")
				} else {
					$('#form1').submit();
				}
			} else {
				$('#form1').submit();
			}
		}
	}
</script>
<table width="350px">
	<tr>
		<td valign="top">
			<div id="tableborder_2">
				<p id="l3" align="center">
					Registrar Entrada
				</p>
				<hr width="98%">
				<form action="index.php?/client/extraMoneyPaid" name="form1" id="form1" method="post">
					<div>
						<table aling="center" border="0" width="100%">
							<tr>
								<td width="20%">
									<p id="l4">Descripción:</p>
								</td>
								<td width="70%">
									<select name="description" id="description">
										<?php foreach ($extraproducts as $extraproduct) {
											if ($extraproduct['amount'] > 0) { ?>
												<option value="<?php echo $extraproduct['name']; ?>"><?php echo $extraproduct['name']; ?></option>
										<?php }
										} ?>
									</select>
								</td>
							</tr>
							<tr>
								<td width="20%">
									<p id="l4">Cantidad: </p>
								</td>
								<td>
									<input name="amount" id="amount" value="" size="3">
								</td>
							</tr>
							<tr>
								<td width="10%">
									<p id="l4">Tipo de Pago:</p>
								</td>
								<td width="50%" id="l5">
									Efectivo: <input name="cash" id="cash" value="0" size="2" onclick="document.getElementById('cash').value = '';">$/Pos: <input name="pos" id="pos" value="0" size="2" onclick="document.getElementById('pos').value = '';">$
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td align="right">
									<div id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="validar_formulario(event)">
										<span class="ui-button-text">Registrar</span>
									</div>
									<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.close();">
										<span class="ui-button-text">Cancelar</span>
									</button>
								</td>
							</tr>
						</table>
					</div>
				</form>
				<p id="l3" align="center">
					Registros de Hoy
				</p>
				<table cellspacing=0 style="width: 100%; text-align: center; border: 1px solid darkcyan; border-collapse: none; font-size: 1.2em;">
					<tr>
						<th style="border: 1px solid darkcyan;">Producto</th>
						<th style="border: 1px solid darkcyan;">Cantidad</th>
						<th style="border: 1px solid darkcyan;">Efectivo</th>
						<th style="border: 1px solid darkcyan;">Pos</th>
					</tr>
					<?php foreach ($extra as $producto) { ?>
						<tr>
							<td style="border: 1px solid darkcyan;"><?php echo $producto['description']; ?></td>
							<td style="border: 1px solid darkcyan;"><?php echo $producto['amount']; ?></td>
							<td style="border: 1px solid darkcyan;">$<?php echo $producto['cash']; ?></td>
							<td style="border: 1px solid darkcyan;">$<?php echo $producto['pos']; ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</td>
		<td>
			<div id="tableborder_3">
				<form action="index.php?/client/addExtraProduct" method="POST">
					<table aling="center" border="0" width="100%">
						<tr>
							<td>
								<p id="l4">Nuevo producto:</p>
							</td>
							<td>
								<input type="text" size="10" name="name" required>
								<button>Guardar</button>
							</td>
						</tr>
					</table>
				</form>
				<hr width="98%">
				<p id="l3" align="center">
					Inventario
				</p>
				<div>
					<table cellspacing=0 style="width: 100%; text-align: center; border: 1px solid darkcyan; border-collapse: none; font-size: 1.2em;">
						<tr>
							<th>Producto</th>
							<th>Cantidad</th>
							<th>Agregar</th>
							<th>Opciones</th>
						</tr>
						<?php foreach ($extraproducts as $extraproduct) { ?>
							<form action="index.php?/client/amountExtraProduct" method="POST">
								<tr>
									<td><?php echo $extraproduct['name']; ?></td>
									<td><?php echo $extraproduct['amount']; ?></td>
									<td>
										<input type="number" name="amount" value="0" min="1" required>
										<input type="number" name="cod" value="<?php echo $extraproduct['cod']; ?>" hidden>
										<input type="text" name="name" value="<?php echo $extraproduct['name']; ?>" hidden>
									</td>
									<td><button>Agregar</button></td>
								</tr>
							</form>
						<?php } ?>
					</table>
				</div>
				<p id="l3" align="center">
					Registros
				</p>
				<table cellspacing=0 style="width: 100%; text-align: center; border: 1px solid darkcyan; border-collapse: none; font-size: 1.2em;">
					<tr>
						<th style="border: 1px solid darkcyan;">Producto</th>
						<th style="border: 1px solid darkcyan;">Cantidad</th>
						<th style="border: 1px solid darkcyan;">Fecha</th>
					</tr>
					<?php foreach ($registers as $register) { ?>
						<tr>
							<td><?php echo $register['description']; ?></td>
							<td><?php echo $register['amount']; ?></td>
							<td><?php echo $register['date']; ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</td>
	</tr>
</table>
<?php $this->load->view('footer'); ?>