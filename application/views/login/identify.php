<?php $this->load->view('header'); ?>
<script language="javascript">
		function validar_formulario(){
			
			if($('#user').val()=='' 
			|| $('#pass').val()==''){
			
				alert("Todos los campos son obligatorios");
			
			} else {
				
				$('#form2').submit();	

				}
				});
			
			}

		}
</script>
	<?php //$clave="usuariocaja2016";
			//echo md5($clave);
	?>
<table width="500px" align="center">
	<tr>
		<td>
			<div id="containerlogin">
				<form action="index.php?/start/valida_login" name="form2" id="form2" method="post">
					<table align="center" border="0">
						<tr>
							<td align="center">
								<img src="images/logo.png" width="235px">
							</td>
						</tr>
					</table>
					<table border="0" align="center">
						<tr>
							<td><p id="l5">Usuario:</p></td>
							<td><input name="user" id="user" value=""></td>
						</tr>
						<tr>
							<td><p id="l5">Clave:</p></td>
							<td><input name="pass" id="pass" value="" type="password"></td>
						</tr>
						<tr>
							<td></td>
							<td align="right">
								<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="">
									<span class="ui-button-text">Entrar</span>
								</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</td>
	</tr>
</table>
<?php $this->load->view('footer'); ?>