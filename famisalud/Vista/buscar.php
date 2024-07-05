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
  <?php include "../controlador/navbar.php"; ?>

  <div class="contenedor">
		<img src="img/fondo.jpg" height="585" width="1500 px" >
    <div class="centrado">
        <div class="ff">
<div class="row">
<div class="col-md-12">
    <center><h2>BUSCAR ORDEN</center>
<p class="intro_buscar">Selecciona el tipo de busqueda: CC - Num. Orden - Estado</p>
<div class="cajas_buscar"> 
<form class="navbar-form navbar-center" role="search" action="../vista/buscar_CC.php">
      <div class="form-group">    
        <input type="text" name="CC" class="form-control" placeholder="Buscar cedula" required>
      </div>

</form>
<form class="navbar-form navbar-center" role="search" action="../vista/buscar_orden.php">
      <div class="form-group">
        <input type="text" name="Numero_orden" class="form-control" placeholder="Buscar Numero de orden" required>
      </div>

</form> 
 <form class="navbar-form navbar-center" role="search" action="../vista/buscar_estado.php">
      <div class="form-group">
        <select name="Estado" class="form-control" placeholder="Buscar Estado" required>
        <option value="">--SELECCIONE UNA OPCION--</option>
        <option value="ACTIVO">ACTIVO</option>
        <option value="SUSPENDIDO">SUSPENDIDO</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Buscar Estado</button>

    </form>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
