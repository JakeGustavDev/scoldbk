<?php $this->load->view('header'); ?>
<script language="javascript">
	function validar_formulario(){
		
		var str1 = "<?php echo $special[0]['dui'] ?>";
		var str2 = document.getElementById('dui').value;

		var n = str1.localeCompare(str2);

		if(!(str1===str2)){
		
		alert("Dui incorrecto");
		location.reload();
		
		} else {

			$('#form1').submit();
		}
	}
</script>
<table width="400px" border="0">
	<tr>
		<td>
			<div id="tableborder_2">
			<form action="index.php?/client/register_special" name="form1" id="form1" method="post">
			<?php foreach ($special as $client) { ?>
				<table width="100%" border="0">
					<tr>
						<td>
							<p id="l4"><?php echo $client['name']; ?></p>
						</td>
						<td align="right">
							<img src="images/10.png" alt="" width="70px">
						</td>
					</tr>
				</table>
				<hr width="98%">
				<table width="100%">
					<tr>
						<td>
							<p id="l5">Introduzca su dui:</p>
						</td>
						<td align="center">
							<input type="password" name="dui" id="dui">
						</td>
					</tr>
					<tr>
						<td><p id="l5">Nº de Locker:</p></td>
						<td align="center">
							<select name="locker" id="locker" style="width:55px;">
								<?php foreach ($numbers as $item) { ?>
									<option value="<?php echo $item['number'] ?>"><?php echo $item['number'] ?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td align="right">
							<input type="text" name="name" style="display:none" value="<?php echo $client['name']; ?>">
							<input type="text" name="cod" style="display:none" value="<?php echo $client['cod']; ?>">
							<div id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="validar_formulario()">
								<span class="ui-button-text">Registrar</span>
							</div>
							<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.close();">
								<span class="ui-button-text">Cancelar</span>
							</button>
						</td>
					</tr>
				</table>
			<?php } ?>
			</form>
			</div>
		</td>
	</tr>
</table>
<?php $this->load->view('footer'); ?>