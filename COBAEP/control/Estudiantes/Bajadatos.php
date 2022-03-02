<!DOCTYPE html>
<html>
<head>
	<title>BAJAS DE ALUMNOS </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../styleJC.css">
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
<div id="latest-post" class="post">
<h1 class="title"></h1>
<div class="entry">
<center>
  <br><br><br>
<h1> Eliminar alumno  </h1></br>
<form action="BajaDatosBD.php" method=post>
<center>
<table>
<tr>
<td color="white">
<label for="tipobusqueda"> <span class="tabla"> Tipo de b&uacutesqueda </span></label>
<br/>
<select name="tipobusqueda">
	<option>-</option>
	<option value="matricula"> Matricula </option>
	</select>
<br/>
</td></tr><tr>
<td><label for="tipobusqueda"> <span class="tabla"> Introduzca la cadena de búsqueda  de acuerdo con el criterio elegido
<br>
</span></label>
<br/>
<input name="terminobusqueda" type="Text">
<br/></td></tr><tr><td>
</center>
<button type="submit">Buscar</button>
</td></tr></table></form>
</center><br/>
</div></div>
</body></html>