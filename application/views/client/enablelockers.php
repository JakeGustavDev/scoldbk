<?php $this->load->view('header'); ?>
<script language="javascript">

	function seleccionar_todo(){ 

	   for (i=0;i<document.form1.elements.length;i++) 
	      if(document.form1.elements[i].type == "checkbox")	
	         document.form1.elements[i].checked=1 

	}

	function deseleccionar_todo(){ 

	   for (i=0;i<document.form1.elements.length;i++) 
	      if(document.form1.elements[i].type == "checkbox")	
	         document.form1.elements[i].checked=0 

	} 
</script>
	<table aling="center" border="0" width="70%">
		<tr>
			<td><input name="" type="checkbox" onclick="seleccionar_todo()" ondblclick="deseleccionar_todo()"></td>
			<td><h3>Seleccionar todos</h3></td>
		</tr>
	</table>
	<form action="index.php?/client/enableLockersOn" name="form1" id="form1" method="post">
	<table aling="center" border="0" width="100%">
		<tr>
			<td width="100%" align="center"></td>
				<div id="zone7">
					<div id="zone6scroll">
						<?php foreach ($lockers as $locker) { ?>
							<input name="<?php echo $locker['number'] ?>" type="checkbox" value="<?php echo $locker['number'] ?>"><?php echo $locker['number'] ?>
							<br>
						<?php } ?>
					</div>
				</div>
			<td align="right">
				<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
					<span class="ui-button-text">Habilitar<br>Selección</span>
				</button>
				<br><br>
				<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="window.close();">
					<span class="ui-button-text">Volver</span>
				</button>
			</td>
		</tr>
	</table>
	</form>
<?php $this->load->view('footer'); ?>