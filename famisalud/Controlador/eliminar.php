<?php
if(!empty($_GET)){
            include "conexion.php";       
            $sql = "DELETE FROM informacion WHERE CC=".$_GET["CC"];
            $query = $con->query($sql);
            if($query!=null){
                print "<script>alert(\"Eliminado exitosamente.\");window.location='../vista/index.php';</script>";
            }else{
                print "<script>alert(\"No se pudo eliminar.\");window.location='../vista/index.php';</script>";
            }
}
?>




