<?php $this->load->view('header'); ?>
<script language="javascript">
			function salir(){
			
				if(confirm("Seguro desea salir?")){
				
					window.location.href = "index.php?/start/logout";
			
				} 

			}

			function abrir2(url) { 

				open(url,'','top=0,left=0,width=850,height=760') ; 

			}

			function abrir3(url) { 

				open(url,'','top=0,left=0,width=420,height=500') ; 

			}

</script>
	<table border="0" width="990px" align="center">
		<tr>
			<td align="center">
				<div id="logo">
					<img src="images/logo.png" width="100%">
				</div>
			</td>
		</tr>
	</table>
	<table border="0" width="990px" align="center" height="550px">
		<tr>
			<td width="60%">
				<div id="container">
					<div id="container_2">
						<?php foreach ($lockers as $locker) {
							if ($locker['available']==1) { ?>
								<div class="available" id="botton">
									<p id="l2"><?php echo $locker['number']; ?><br><img src="images/locker_available.png" width="25%"></p>
								</div>
							<?php }else{ 
								if ($locker['available']==0){ ?>
								<a href="javascript:abrir2('index.php?/bar/lockerbar?number=<?php echo $locker['number'] ?>')">
									<div class="occupied" id="botton">
										<p id="l2"><?php echo $locker['number']; ?><br><img src="images/locker_occupied.png" width="25%"></p>
									</div>
								</a>
								<?php }else{ ?>
								<div class="unavailable" id="botton">
									<p id="l2"><?php echo $locker['number']; ?><br><img src="images/locker_unavailable.png" width="35%"></p>
								</div>	
						<?php }}} ?>
					</div>
				</div>
			</td>
			<td valign="top" align="center">
				<div class="" id="options">
					<div id="botton_options" class="defaulters" title="Actualizar página" onclick="javascript:location.reload()">
						<img src="images/8.png" alt="" width="50%" style="margin-top:20%;">
					</div>
					<!--<a href="javascript:abrir3('index.php?/client/martin')">
						<div id="botton_options" class="payment" title="Consumos de Martín Romero">
							<img src="images/10.png" alt="" width="50%" style="margin-top:20%;">
						</div>
					</a>-->
					<a href="index.php?/bar/inventory" target="_blank">
						<div id="botton_options" class="defaulters" title="Control de inventario">
							<img src="images/inventory.png" alt="" width="50%" style="margin-top:22%;">
						</div>
					</a>
					<div id="botton_options" class="chat" title="Mensajes">
						<img src="images/chat.png" alt="" width="50%" style="margin-top:22%;">
					</div>
					<div id="botton_options" class="exit" onclick="salir()" title="Salir del sistema">
						<img src="images/exit.png" alt="" width="50%" style="margin-top:22%;">
					</div>
				</div>
			</td>
		</tr>
	</table>
<?php $this->load->view('footer'); ?>