<?php $this->load->view('header'); ?>
<table width="350px">
	<tr>
		<td>
			<div id="tableborder_2">
				<p id="l3" align="center">
					Entradas
				</p>
				<hr width="98%">
				<div>
					<table align="center" border="0">
						<tr>
							<td align="center">
								<p id="l4">Entradas Registradas</p>
								<p id="l1"><?php echo $count ?></p>
								<a href="index.php?/client/checkIn">
									<div id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="">
										<span class="ui-button-text">Volver</span>
									</div>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</td>
	</tr>
</table>
<?php $this->load->view('footer'); ?>