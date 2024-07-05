<?php

include "conexion.php";
$user_id=null;
$sql1= "select * from informacion";
$query = $con->query($sql1);
?>
<div class="contenedor">
		<img src="img/fondo.jpg" height="585" width="1500 px" >
    <div class="centrado">
        <div class="ff">
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover crudX">
<center><h2>ELIMINAR ORDEN</h2></center>
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
    <td><?php echo $r["Estado"]; ?></td>
    <td style="width:150px;">       
    <a href="../Controlador/eliminar.php?CC=<?php echo $r["CC"];?>" class="btn btn-sm btn-danger">Eliminar</a>
        
    </td>
</tr>

<?php endwhile;?>
</table>
<button onclick="location.href='index.php'" class="btn btn-default">Cancelar</button></center>

<?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
</div></div></div>
