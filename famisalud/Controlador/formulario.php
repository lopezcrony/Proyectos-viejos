<?php
include "conexion.php";
$user_id=null;
$sql1= "select * from informacion where CC=".$_GET["CC"];
$query = $con->query($sql1);
$registro = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $informacion=$r;
  break;
}
  }
?>
<div class="contenedor">
		<img src="img/fondo.jpg" height="585" width="1500 px" >
    <div class="centrado">
        <div class="ff">
<?php if($informacion!=null):?>
    <h2>EDITAR</h2>
 <form role="form" method="post" action="../Controlador/actualizar.php">
 <div class="row">
  <div class="col-md-6">
    <label for="name">CC</label>
    <input type="number" class="form-control" value="<?php echo $informacion->CC; ?>" name="CC" requiered>
  </div>
  <div class="form-group">
    <label for="lastname">Numero orden</label>
    <input type="number" class="form-control" value="<?php echo $informacion->Numero_orden; ?>" name="Numero_orden" required>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <label for="address">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $informacion->Nombre; ?>" name="Nombre" required>
  </div>
  <div class="form-group">
    <label for="lastname">Info. Orden anterior</label>
    <input type="text" class="form-control" value="<?php echo $informacion->Info_orden; ?>" name="Info_orden" disabled>
  </div>
</div>
  <div class="form-group">
     <div class="form-group">
    <label for="SOAT">Info. orden nuevo</label>
    <textarea type="text" class="form-control" value="<?php echo $informacion->Info_orden; ?>" name="Info_orden"></textarea>

    <!--<input type="email" class="form-control"  >-->
    <br>
    <div class="row">
  <div class="col-md-6">
     <label for="lastname">ESTADO ANTERIOR</label>
    <input type="text" class="form-control" value="<?php echo $informacion->Estado; ?>" name="Estado" disabled>
  </div><br>
<div class="form-group">
    <label for="Estado">ESTADO</label>
     <select class="form-control" name="Estado" required>
      <option value="">--Seleccione un estado--</option>
      <option value="ACTIVO">ACTIVO</option>
      <option value="SUSPENDIDO">SUSPENDIDO</option>
      </select>
    <!--<input type="text" class="form-control"  >-->
  </div>
</div>
  <br>
   <input type="hidden" name="CC" value="<?php echo $informacion->CC; ?>">
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
</div>
</div>
</div>
