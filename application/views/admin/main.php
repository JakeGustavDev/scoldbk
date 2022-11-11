<?php $this->load->view('header'); ?>
<script language="javascript">
			function salir(){
			
				if(confirm("Seguro desea salir?")){
				
					window.location.href = "index.php?/start/logout";
			
				} 

			}

			function abrir1(url) { 

				open(url,'','top=0,left=0,width=900,height=520') ;  

			}

			function abrir2(url) { 

				open(url,'','top=0,left=0,width=500,height=730') ; 

			}

			function abrir3(url) { 

				open(url,'','top=0,left=0,width=500,height=520') ; 

			}

			function abrir4(url) { 

				open(url,'','top=0,left=0,width=560,height=320') ; 

			}

			function confirm3(locker){
				
				if(confirm("Habilitar Locker?")){
				
					window.location.href = "index.php?/user/enableLocker?locker="+locker;

				} 

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
						<?php foreach ($specials as $client) {?>
							<div class="special" id="botton">
								<p id="l2"><?php echo $client['letter']; ?><br><img src="images/special_locker.png" width="35%"></p>
							</div>
						<?php } ?>
						<?php foreach ($lockers as $locker) {
							if ($locker['available']==1) { ?>
								<div class="available" id="botton">
									<p id="l2"><?php echo $locker['number']; ?><br><img src="images/locker_available.png" width="25%"></p>
								</div>
							<?php }else{ 
								if ($locker['available']==0){ ?>
								<a href="javascript:abrir2('index.php?/client/lockeradmin?number=<?php echo $locker['number'] ?>')">
									<div class="occupied" id="botton">
										<p id="l2"><?php echo $locker['number']; ?><br><img src="images/locker_occupied.png" width="25%"></p>
									</div>
								</a>
								<?php }else{ ?>
								<div class="unavailable" id="botton" onclick="confirm3(<?php echo $locker['number']; ?>)">
									<p id="l2"><?php echo $locker['number']; ?><br><img src="images/locker_unavailable.png" width="35%"></p>
								</div>	
						<?php }}} ?>
					</div>
				</div>
			</td>
			<td valign="top" align="center">
				<div class="" id="options">
					<a href="javascript:abrir1('index.php?/client/cashregister')">
						<div id="botton_options" class="payment" title="Corte de Caja">
							<img src="images/payment.png" alt="" width="50%" style="margin-top:20%;">
						</div>
					</a>
					<a href="index.php?/client/fullRecord" target="_blank">
						<div id="botton_options" class="enable" title="Registro completo">
							<img src="images/extra_cash.png" alt="" width="50%" style="margin-top:22%;">
						</div>
					</a>
					<a href="javascript:abrir4('index.php?/client/checkIn')">
						<div id="botton_options" class="cash" title="Registro de entradas">
							<img src="images/1.png" alt="" width="30%" style="margin-top:25%;">
						</div>
					</a>
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
				<br>
				<div id="containerentries">
					<p id="l3">ENTRADAS REGISTRADAS HOY:</p>
					<br>
					<p id="l1">
						<?php
							$entries=0;
							foreach ($count as $item) {
								$entries=$entries+1;
							}
							echo $entries;
						?>
					</p>
				</div>
			</td>
		</tr>
	</table>
<?php $this->load->view('footer'); ?>