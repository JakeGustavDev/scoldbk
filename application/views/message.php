<?php $this->load->view('header'); ?>
<script language="javascript">
			function salir(){
			
				if(confirm("Seguro desea salir?")){
				
					window.location.href = "index.php?/start/logout";
			
				} 

			}
</script>
	<div id="zone2">
	<?php if($message_type==1){ ?>
		<div class="ui-widget">
			<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
				<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
				<strong>Hey! </strong><?php echo $message?>.  
				<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
					<a href="<?php echo $url?>"><span class="ui-button-text">Continuar</span></a>
				</button>
				<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="salir()">
					<span class="ui-button-text">Salir</span>
				</button>
				</p>
			</div>
		</div>
	<?php }else{ ?>
		<div class="ui-widget">
			<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
				<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
				<strong>Alerta: </strong><?php echo $message?>.
				<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
					<a href="index.php?/start"><span class="ui-button-text">Continuar</span></a>
				</button>
				</p>
			</div>
		</div>
	<?php } ?>
	</div>

<?php $this->load->view('footer'); ?>