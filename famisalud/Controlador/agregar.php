<?php 
include ('conexion.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
        $cedula = $_POST['CC']; echo '<br>';
        $Num_orden = $_POST['Numero_orden'];
        $Nombre = $_POST['Nombre'];
        $Info_orden = $_POST['Info_orden'];
        $Estado = $_POST['Estado'];

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO `informacion`(`CC`, `Numero_orden`, `Nombre`, `Info_orden`, `Estado`) VALUES ('$cedula','$Num_orden','$Nombre','$Info_orden','$Estado')";
	
	if(mysqli_query($con,$ins)==TRUE){
		echo "<script>
				alert('El registro se guardó exitosamente');
				location.href='../Vista/ver.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/index.php';
					</script>";
			}
  }

  mysqli_close($con);
 ?>

