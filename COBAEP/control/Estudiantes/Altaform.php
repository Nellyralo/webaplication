<!DOCTYPE html>
<html>
<head>
	<title>Altas | P9</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../styleform.css">
</head>
<body>
	<?php session_start();
    if (isset($_SESSION['user_id']))
    {
    require('encabezadoAltas.inc');
    }
  else
  {
  session_destroy();
  echo'<script type="text/javascript"> window.location="../../loginform.html"; </script>';
    }
  ?>
  <div align="center" >
  	<br><br><br>
		<h1>Altas Estudiantes</h1>
	<br>
	</div>

	<form action="Altadatosbd.php" enctype="multipart/form-data" method="post">
		<div align="center">
    <label for="foto"><b>Foto</b></label><br>
    <input type="file" placeholder="Foto" name="foto" id="foto" required="">
    <br>
    <label for="matricula"><b>Matricula</b></label><br>
    <input type="text" placeholder="Matricula" name="matricula" id="matricula" required=""><br>
    
    <label for="nombres_alumno"><b>Nombre</b></label><br>
    <input type="text" placeholder="Nombre del alumno" name="nombres_alumno" id= "nombres_alumno" required="">
    <br>

	 <label for="apellido_paterno"><b>Apellido Paterno</b></label><br>
    <input type="text" placeholder="Apellido Paterno" name="apellido_paterno" id= "apellido_paterno" required="">
    <br>
	 <label for="apellido_materno"><b>Apellido Materno</b></label><br>
    <input type="text" placeholder="Apellido Materno" name="apellido_materno" id= "apellido_materno" required="">
    <br>
    <label for="celular"><b>Numero Movil</b></label><br>
    <input type="text" placeholder="Numero Movil" name="celular" id="celular" required="">
    <br>
    <label for="email_alumno"><b>Correo </b></label><br>
    <input type="text" placeholder="Correo Electronico"name="email_alumno" id="email_alumno"> 
    <br>
    <label for="curp"><b>Curp</b></label><br>
    <input type="text" placeholder="Curp" name="curp" id="curp"><br>
    <label for="no_seguro"><b>Numero de seguro</b></label>
    <br>
    <input type="text" placeholder="Numero de seguro" name="no_seguro" id="no_seguro"><br>
    <label for="nombres_tutor"><b>Nombre de tutor</b></label><br>
    <input type="text" placeholder="Nombre del tutor" name="nombres_tutor" id="nombres_tutor"><br>
    <label for="apellidos_tutor"><b>Apellidos del tutor</b></label><br>
    <input type="text" placeholder="Apellidos del tutor" name="apellidos_tutor" id="apellidos_tutor">
    <br>
    <label for="telefono1"><b>Telefono</b></label><br>
    <input type="text" placeholder="Numero de telefono" name="telefono1" id="telefono1">
    <br>
    <label for="telefono2"><b>Telefono</b></label><br>
    <input type="text" placeholder="Numero de telefono" name="telefono2" id="telefono2">
    <br>
    <label for="domicilio"><b>Domicilio</b></label>
    <br>
    <input type="text" placeholder="Domicilio" name="domicilio" id="domicilio"><br>
    <label for="email_tutor"><b>Correo del tutor</b></label><br>
    <input type="text" placeholder="Correo del tutor" name="email_tutor" id="email_tutor">
    <br>

    <button type="submit">Agregar</button>
   </div>
		

	</form>


</body>
</html>