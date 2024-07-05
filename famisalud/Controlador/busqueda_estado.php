<?php
include "conexion.php";
$user_id=null;
$sql1= "select * from informacion where Estado like '%$_GET[Estado]%'";
$query = $con->query($sql1);
$san=0;
$susp=0;
?>
<div class="contenedor">
		<img src="img/fondo.jpg" height="585" width="1500 px" >
    <div class="centrado">
        <div class="ff">
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
    <h2>Buscar Orden por Cédula</h2>
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
    <td class="sancionado"><?php echo $r["Estado"]; ?></td>
    <?php else: ?>
<?php if($r["Estado"]=="SANCIONADO"):?>
    <?php $san++; ?>
    <td class="sancionado"><?php echo $r["Estado"]; ?></td>
<?php else:?>
    <td class="activo"><?php echo $r["Estado"]; ?></td>
<?php endif;?>
<?php endif;?>


    <td style="width:150px;">
        <a href="./editar_no.php?CC=<?php echo $r["CC"];?>" class="btn btn-sm btn-warning">Editar</a>
        <a href="../Controlador/eliminar.php?CC=<?php echo $r["CC"];?>" class="btn btn-sm btn-danger">Eliminar</a>
        <script>
        $("#del-"+<?php echo $r["CC"];?>).click(function(e){
            e.preventDefault();
            p = confirm("Estas seguro?");
            if(p){
                window.location="../Controlador/eliminar.php?CC="+<?php echo $r["CC"];?>;
            }
        });
        </script>
    </td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
</div></div></div>