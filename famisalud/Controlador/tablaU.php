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
<h2>EDITAR ENTRADAS</h2>

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
    <td style="width:150px;">
    <a href="editar_no.php? CC=<?php echo $r["CC"];?>" class="btn btn-sm btn-warning">Editar</a>
    <script>
        $("#del-"+<?php echo $r["CC"];?>).click(function(e){
            e.preventDefault();
            p = confirm("Estas seguro?");
            if(p){
                window.location="Controlador/eliminar.php?CC="+<?php echo $r["CC"];?>;
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