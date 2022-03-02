<?php session_start();
if (isset($_SESSION['user_id']))
    {
    require('encabezadoAltas.inc');
    }
  else
  {
  session_destroy();
  echo'<script type="text/javascript"> window.location="../../loginform.html"; </script>';
    }		?>
<div id="latest-post" class="post">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styleJC.css">
<h1 class="title"></h1>
<div class="entry">
<center>
<br><br><br>
<h1> Modificar </h1></br>
	  <?php
	$tipoBusqueda = $_POST['tipobusqueda'];
	$terminobusqueda = $_POST['terminobusqueda'];
	$terminobusqueda = trim($terminobusqueda);

	if(!$tipoBusqueda || !$terminobusqueda)
	{
	echo'No introdujo detalles para la busqueda,. intente de nuevo';
	exit;
	}

	if(!get_magic_quotes_gpc())
	{
	$tipoBusqueda = addslashes($tipoBusqueda);
	$terminobusqueda = addslashes($terminobusqueda);
	}
	$_SESSION['TiBu'] = stripslashes($tipoBusqueda);
	$_SESSION['TeBu'] = stripslashes($terminobusqueda);
	require('../../conexion/conexion1.php');
	switch($tipoBusqueda)
	{
	case "matricula":
	$query ="select * from t_datos where t_datos." . $tipoBusqueda . "  =  " . "'". $terminobusqueda ."'" ;
	$result= $db->query($query);
	$num_resultados = $result->num_rows;
	echo '<center> ';
	for($i=0; $i<$num_resultados;$i++)
	{
	$row = $result->fetch_assoc();


	echo '<form action="ModificarDatosConfirm.php" method=post>';

	echo "<h3> Matricula </h3></br>";
	echo "<input  name='matricula' type='Text' value='". $row['matricula']."'>";

	echo "<h3> Nombres del alumno </h3></br>";
	echo "<input  name='nombres_alumno' type='Text' value='". $row['nombres_alumno']."'>";

	echo "<h3> Apellido paterno del alumno </h3></br>";
	echo "<input  name='apellido_paterno' type='Text' value='". $row['apellido_paterno']."'>";

	echo "<h3> Apellido materno </h3></br>";
	echo "<input  name='apellido_materno' type='Text' value='". $row['apellido_materno']."'>";

	echo "<h3> Celular </h3></br>";
	echo "<input  name='celular' type='Text' value='". $row['celular']."'>";

	echo "<h3> Correo electronico </h3></br>";
	echo "<input  name='email_alumno' type='Text' value='". $row['email_alumno']."'>";

	echo "<h3> Curp </h3></br>";
	echo "<input  name='curp' type='Text' value='". $row['curp']."'>";

	echo "<h3> Numero de seguro social </h3></br>";
	echo "<input  name='no_seguro' type='Text' value='". $row['no_seguro']."'>";

	echo "<h3> Nombre del tutor </h3></br>";
	echo "<input  name='nombres_tutor' type='Text' value='". $row['nombres_tutor']."'>";

	echo "<h3> Apellidos del tutor </h3></br>";
	echo "<input  name='apellidos_tutor' type='Text' value='". $row['apellidos_tutor']."'>";

	echo "<h3> Telefono 1 </h3></br>";
	echo "<input  name='telefono1' type='Text' value='". $row['telefono1']."'>";

	echo "<h3> Telefono2 </h3></br>";
	echo "<input  name='telefono2' type='Text' value='". $row['telefono2']."'>";

	echo "<h3> Domicilio </h3></br>";
	echo "<input  name='domicilio' type='Text' value='". $row['domicilio']."'>";
	
	echo "<h3> Correo electronico </h3></br>";
	echo "<input  name='email_tutor' type='Text' value='". $row['email_tutor']."'>";
	echo "<center><input  type='Submit' value='Modificar'></center>";
	echo '</form>';
	}
	break;
	echo '<span class="tabla">' ;
	echo '<form action="ModificarDatos.php" method=post>';
	echo '<form action="ModificarDatosConfirm.php" method=post>';
	echo '</form>';
	echo '</span>';
	echo '</td>  ';
	echo '</tr>  ';
	}
	echo '</table>';
	echo '</center> ';
	$db->close();
?>

 </div>
</div>
