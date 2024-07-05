<?php 
include ('conexion.php');

	echo $cedula = $_POST['CC']; echo '<br>';
	$Num_orden = $_POST['Numero_orden'];
	$Nombre = $_POST['Nombre'];
	$Info_orden = $_POST['Info_orden'];
    $Estado=$_POST['Estado'];

	$eje = $con-> query("UPDATE informacion SET CC='$cedula',`Numero_orden`='$Num_orden',`Nombre`='$Nombre',`Info_orden`='$Info_orden',`Estado`='$Estado' WHERE CC='$cedula'");

if ($eje) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/editar.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/editar.php';
	</script>";
}


 ?>