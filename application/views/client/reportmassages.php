<?php $this->load->view('header'); ?>
<table width="800px" border="0">
    <tr>
        <td align="center">
            <h1>Reporte de masajes desde: <?php echo $start ?> hasta: <?php echo $end ?></h1>
        </td>
    </tr>
    <tr>
        <td>
            <table border="1" class="reportMassages">
                <?php if (count($massages) > 0) {
                    $total = 0;
                    $cantidadcortos = 0;
                    $cantidadlargos = 0; ?>
                    <tr>
                        <th>Fecha</th>
                        <th>Locker</th>
                        <th>Masaje Corto</th>
                        <th>Pago Corto</th>
                        <th>Masaje Largo</th>
                        <th>Pago Largo</th>
                    </tr>
                    <?php foreach ($massages as $massage) { ?>
                        <tr>
                            <td align="center"><?php echo $massage["date"] ?></td>
                            <td align="center"><?php echo $massage["locker"] ?></td>
                            <td align="center"><?php echo $massage["masajecorto"] ?></td>
                            <td align="center">$<?php echo $massage["masajecorto"] * 15 ?></td>
                            <td align="center"><?php echo $massage["masajelargo"] ?></td>
                            <td align="center">$<?php echo $massage["masajelargo"] * 30 ?></td>
                        </tr>
                        <?php $total += $massage["masajecorto"] * 15 + $massage["masajelargo"] * 30; ?>
                        <?php $cantidadcortos += $massage["masajecorto"]; ?>
                        <?php $cantidadlargos += $massage["masajelargo"]; ?>
                    <?php } ?>
                    <tr>
                        <td colspan="6">
                            <h2>Masajes Cortos: <?php echo $cantidadcortos; ?> Masajes Largos: <?php echo $cantidadlargos; ?> Total: $<?php echo $total; ?></h2>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </td>
    </tr>
    <tr>
        <td align="center">
            <h1>Reporte de depilación desde: <?php echo $start ?> hasta: <?php echo $end ?></h1>
        </td>
    </tr>
    <tr>
        <td>
            <table border="1" class="reportMassages">
            <?php if (count($depilations) > 0) {
                    $total = 0; ?>
                    <tr>
                        <th>Fecha</th>
                        <th>Locker</th>
                        <th>Dep. Axilas</th>
                        <th>Dep. Brazos</th>
                        <th>Dep. Nariz</th>
                        <th>Dep. Pecho</th>
                        <th>Dep. Abdomen</th>
                        <th>Dep. Pecho y abdomen</th>
                        <th>Dep. Ano y gluteos</th>
                        <th>Dep. Parte intima</th>
                        <th>Dep. Espalda</th>
                        <th>Dep. Piernas</th>
                    </tr>
                    <?php foreach ($depilations as $depilation) { ?>
                        <tr>
                            <td align="center"><?php echo $depilation["date"] ?></td>
                            <td align="center"><?php echo $depilation["locker"] ?></td>
                            <td align="center"><?php echo $depilation["depaxilas"] ?></td>
                            <td align="center"><?php echo $depilation["depbrazos"] ?></td>
                            <td align="center"><?php echo $depilation["depnariz"] ?></td>
                            <td align="center"><?php echo $depilation["deppecho"] ?></td>
                            <td align="center"><?php echo $depilation["depabdomen"] ?></td>
                            <td align="center"><?php echo $depilation["deppechoabdomen"] ?></td>
                            <td align="center"><?php echo $depilation["depanogluteos"] ?></td>
                            <td align="center"><?php echo $depilation["depparteintima"] ?></td>
                            <td align="center"><?php echo $depilation["depespalda"] ?></td>
                            <td align="center"><?php echo $depilation["deppiernas"] ?></td>
                        </tr>
                        <?php $total += $depilation['depaxilas']*8+$depilation['depbrazos']*13+$depilation['depnariz']*5+$depilation['deppecho']*10+$depilation['depabdomen']*12+$depilation['deppechoabdomen']*20+$depilation['depanogluteos']*20+$depilation['depparteintima']*15+$depilation['depespalda']*20+$depilation['deppiernas']*25; ?>
                    <?php } ?>
                    <tr>
                        <td colspan="6">
                            <h2>Total: $<?php echo $total; ?></h2>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </td>
    </tr>
</table>
<?php $this->load->view('footer'); ?>