<?php $this->load->view('header'); ?>
<table width="450px">
<tr>
	<td>
	<div id="tableborder_2">
		<p id="l3" align="center">
			Registro de Entradas
		</p>
		<hr width="98%">
		<div>
			<table border="0" width="100%">
				<tr>
					<td><p id="l4">Consultar entradas en:</p></td>
				</tr>
			</table>
			<br>
			<form action="index.php?/client/checkInMonth" name="form1" id="form1" method="post">
			<table align="center" border="0">
				<tr>
					<td id="l5"> Mes: </td>
					<td>
						<select name="month" id="month" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="01">Enero</option>
							<option value="02">Febrero</option>
							<option value="03">Marzo</option>
							<option value="04">Abril</option>
							<option value="05">Mayo</option>
							<option value="06">Junio</option>
							<option value="07">Julio</option>
							<option value="08">Agosto</option>
							<option value="09">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option>
						</select>
					</td>
					<td id="l5">Año:</td>
					<td width="18%">
						<select name="year" id="year" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
						</select>
					</td>
					<td width="7%">
						<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="">
							<span class="ui-button-text">Consultar</span>
						</button>
					</td>
				</tr>
			</table>
			</form>
			<form action="index.php?/client/checkInDay" name="form2" id="form2" method="post">
			<table align="center" border="0">
				<tr>
					<td id="l5">Día</td>
					<td>
						<select name="day" id="day" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					</td>
					<td id="l5">Mes:</td>
					<td>
						<select name="month2" id="month" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="01">Enero</option>
							<option value="02">Febrero</option>
							<option value="03">Marzo</option>
							<option value="04">Abril</option>
							<option value="05">Mayo</option>
							<option value="06">Junio</option>
							<option value="07">Julio</option>
							<option value="08">Agosto</option>
							<option value="09">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option>
						</select>
					</td>
					<td id="l5">Año:</td>
					<td>
						<select name="year2" id="year" onclick="this.style.width = '100%';" onblur="this.style.width = '100%';" style="width:100%;">
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
						</select>
					</td>
					<td>
						<button id="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" onclick="">
							<span class="ui-button-text">Consultar</span>
						</button>
					</td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</td>
</tr>
</table>
<?php $this->load->view('footer'); ?>