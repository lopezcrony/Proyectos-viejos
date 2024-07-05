<?php
?>
<html>
    <head>
        <title>famisalud </title>
       
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Anton|Caveat+Brush" rel="stylesheet"> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
	      <link rel="stylesheet" href="css/font-awesome.min.css">
	      <link rel="stylesheet" href="css/animate.css">
	      <link href="css/animate.min.css" rel="stylesheet"> 
	      <link rel="shortcut icon" href="img/ICONO.png" width="20PX">
	      <link href="css/style.css" rel="stylesheet"/>	
	      <script src="https://kit.fontawesome.com/1c85f0ba21.js" crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      </head>
    <body>
    <?php include "../controlador/navbar.php"; ?> <!-- se incluye el menu del Crud -->    
<div class="row">
<div class="col-md-12 crudY">
  
<!-- Button trigger modal -->
<!--  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
<br><br>
   Modal -->
<!--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header ">
          <button type="button" class="close boton1" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">-->
          
    <div class="contenedor">
		<img src="img/fondo.jpg" height="585" width="1350 px ">
    <div class="centrado">
      <br><br>
<div class="container">
<form method="post" action="../Controlador/agregar.php" class="ff">
  <div class="form-group">
    <br>
  <center><h3><b>NUEVA ORDEN</b></h3>
<div class="row">
  <div class="col-md-6">
<br>
    <label for="placa">CC</label>
    <input type="text" class="form-control" name="CC" placeholder="Ingrese cédula " required>
  </div>
  <div class="col-md-6">
<br>
    <label for="propietario">Nombre</label>
    <input type="text" class="form-control" name="Nombre" placeholder="Ingrese su nombre" required>
  </div>
    </div>
    <br>
  <div class="row">
  <div class="form-group col-md-6">
    <label for="conductor">Número de Orden</label>
    <input type="text" class="form-control" name="Numero_orden" placeholder="Ingrese número de orden" required>
  </div><br>
  <div class="form-group col-md-6">
  <label for="ESTADO">ESTADO</label>
     <select class="form-control" name="Estado" required>
      <option value="">-- SELECCIONE --</option>
      <option value="ACTIVO">ACTIVO</option>
      <option value="SUSPENDIDO">SUSPENDIDO</option>
      </select> </div><br>
    </div>
<div class="form-group">
<label for="conductor">Info. Orden</label>
    <textarea type="text" class="form-control" name="Info_orden" placeholder="Ingrese número de orden" required></textarea>
  </div>
    <!--<input type="text" class="form-control"  >-->
  </div>
  <br>
  </center> 
  <button type="submit" class="btn btn-primary" name="BtnGuardar">Agregar</button>
  <button onclick="location.href='index.php'"class="btn btn-primary">Cancelar</button>
  </div>
</form>
 <br><br>
        </div>
<!--    </div> /.modal-content -->
   <!-- </div> /.modal-dialog -->
 <!-- </div> /.modal -->
</div>
</div>
</div>
    </div>  
    </div>
    </div>
<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
    </body>
</html>
