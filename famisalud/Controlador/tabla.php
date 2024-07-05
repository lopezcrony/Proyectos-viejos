<?php
include "conexion.php";
$user_id=null;
$sql1= "select * from informacion";
$query = $con->query($sql1);
$san=0;
$susp=0;
?>

<div class="contenedor">
		<img src="img/fondo.jpg" height="585" width="1500 px" >
    <div class="centrado">
        <div class="ff">
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover crudX" >
<h2>VER ENTRADAS</h2>

<thead>
    <th>CC</th>
    <th>Num. Orden</th>
    <th>Nombre</th><br>
    <th>Inf. Orden</th>
    <th>ESTADO</th>
    </thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
    <td><?php echo $r["CC"]; ?></td>
    <td><?php echo $r["Numero_orden"]; ?></td>
    <td><?php echo $r["Nombre"]; ?></td>
    <td><?php echo $r["Info_orden"]; ?></td>
<?php if($r["Estado"]=="SUSPENDIDO"):?>
    <?php $susp++; ?>
    <td class="suspendido"><?php echo $r["Estado"]; ?></td>
<?php else: ?>
<?php if($r["Estado"]=="SANCIONADO"):?>
    <?php $san++; ?>
    <td class="sancionado"><?php echo $r["Estado"]; ?></td>
<?php else:?>
        <td class="activo"><?php echo $r["Estado"]; ?></td>
<?php endif;?>
<?php endif;?>
</tr>
<?php endwhile;?>
</table>
<?php if($susp>0):?>
<p class="alert alertwarning suspendido">Alerta: Hay <?php echo $susp ?> orden SUSPENDIDA
</p><br>
<?php endif;?>
<?php if($san==0 && $susp==0):?>
<p class="alert alert-warning activo">FELICIDADES: Ordenes ACTIVAS</p><br>
<?php endif;?>  
    <?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

    </div>
    </div></div>
