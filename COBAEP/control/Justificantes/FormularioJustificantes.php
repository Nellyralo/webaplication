<!DOCTYPE html>
<html>
<head>
	<title>GENERAR JUSTIFICANTE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../styleJC.css">
</head>
<body>
<?php session_start();
if (isset($_SESSION['user_id']))
    {
    require('encabezadoJustificante.inc');
    }
  else
  {
  session_destroy();
  echo'<script type="text/javascript"> window.location="../../loginform.html"; </script>';
    }

    ?>
 	<div align="center">
    <br><br><br>
 		<h1>Generar justificante</h1>
 	</div>
 	<br>
 <!-- <form action="Altadatosbd.php" enctype="multipart/form-data" method=post>-->
 <form name="justificante" action="justificantePDF.php" method="post">
  <div align="center">
    <label for="alumno"><b>Nombre: </b></label><br>
    <input type="text" placeholder="nombre del alumno" name="alumno" id= "alumno" required>
    <br>
 <p> <b>Grupo:</b><br>
    <select name="grupo">
      <option value="1">---</option>
      <option value="'A'">'A'</option>
      <option value="'B'">'B'</option>
      <option value="'C'">'C'</option>
    </select>
</p>

<p> <b>Semestre:</b><br>
    <select name="semestre">
      <option value="1">---</option>
      <option value="1.°">1.°</option>
      <option value="2.°">2.°</option>
      <option value="3.°">3.°</option>
      <option value="4.°">4.°</option>
      <option value="5.°">5.°</option>
      <option value="6.°">6.°</option>
      <option value="7.°">7.°</option>
      <option value="8.°">8.°</option>
      <option value="9.°">9.°</option>
    </select>
  </p>

   <p> <b>Dias:</b><br>
  <select name="Dias">
  <option value="0">---</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
</p>
  
   <p> <b>Motivo:</b><br>
  <select name="Motivo">
  <option value="0">---</option>
  <option value="Enfermedad">Enfermedad</option>
  <option value="Cita médica">Cita Médica</option>
  <option value="Deceso familiar">Deceso familiar</option>
  <option value="Personal">Personal</option>
  <option value="Tramite personal">Tramite personal</option>
</select>
</p>
    <label for="Fecha"><b>Fecha:</b></label><br>
    <input type="text" placeholder="Fecha" name="Fecha" id="Fecha">
    <br>
	 

    <button type="submit">Generar</button><br>
    <button type="reset">Borrar campos</button>
   </div>

</form>
</body>
</html>