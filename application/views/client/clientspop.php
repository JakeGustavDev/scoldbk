<?php $this->load->view('header'); ?>
<script language="javascript">

	function deletePop(cod,name){
	
		if(confirm("Borrar registro de "+name)){

			$.ajax({
			type: "POST",
			url : 'index.php?/client/clientPopDelete',
			data: {	cod:cod },
			success: function(datos) { 
				alert(datos);
				window.location.href = "index.php?/client/clientsPop" ;
			}
			});
		}

	}

</script>
<table align="center" width="990px">
	<tr>
		<td>
			<div id="tableborder_2">
			<table align="center" border="0" width="100%">
				<tr>
					<th id="l3">Añadir Cliente Pop</th>
				</tr>
				<tr>
					<td>

						<form action="index.php?/client/newClientPop" name="form1" id="form1" method="post">
						<table align="center" width="80%">
							<tr>
								<td id="l4">
									Nombre: <input name="name" value="" title="Nombre del cliente">
								</td>
								<td id="l4">
									Motivo: <input name="reason" value="" title="Motivo por el cual dicho cliente esta en estado POP">
								</td>
								<td id="l4">
									Estatus:
											<select name="status" id="" style="width:7em;" title="Nombre del cliente">
												<option value="0">Pendiente</option>
												<option value="1">Penalizado</option>
											</select>
								</td>
								<td>
									<input type="submit" value="Guardar" title="Guardar datos"></input>
									<input type="reset" value="Limpiar" title="Limpiar campos"></input>
								</td>
							</tr>
						</table>
						</form>
					</td>
				</tr>
				<tr>
					<td>
						<br>
					</td>
				</tr>
			</div>
			</table>
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
					<th id="l4">Nombre</th>
					<th id="l4">Motivo</th>
					<th id="l4">Estatus</th>
					<th id="l4">Opciones</th>
				</tr>
				<br><br>
				<?php foreach ($pop as $client) { ?>
				<tr>
					<td align="center" id="l5">
						<?php echo $client['name']; ?>
					</td>
					<td align="center" id="l5">
						<?php echo $client['reason']; ?>
					</td>
					<td align="center" id="l5">
						<?php if ($client['status']==0) {?>
							Pendiente
						<?php }else{ ?>
							Penalizado
						<?php } ?>
					</td>
					<td align="center" width="100px">
						<input type="text" name="locker" style="display:none" value="<?php echo $client['cod']?>">
						<a href="javascript:deletePop('<?php echo $client['cod']?>','<?php echo $client['name']?>')"><img  src="images/trash.png" width="30%"></a>
					</td>
				</tr>
				<?php } ?>
			</table>
			</div>
		</td>
	</tr>
</table>
<?php $this->load->view('footer'); ?>