<!DOCTYPE html>
<html>
<head>
	<title>BAJA</title>

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
<h1> Baja datos</h1></br>
<?php
	$tipoBusqueda = $_POST['Campo'];
	$terminobusqueda = $_POST['Criterio'];
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
	require('../../conexion/conexion1.php');
	$query ="delete from t_datos where " . $tipoBusqueda . "  =  " . "'". $terminobusqueda ."'" ;
	$result= $db->query($query);
	if($result = $terminobusqueda){
	//echo  '<center>'. $db->affected_rows;
	?>
		<center><h2>
		<div class="alert">
			Eliminaci&oacuten exitosa
			<a href="Bajadatos.php">
       			 Regresar</a>
		</div>
	</h2></center>
		<?php
	}
	else
	{
	?>
		<center><h2><div class="alert Success">
		ELiminaci&oacuten no exitosa, intentelo de nuevo
			<a href="Bajadatos.php">
       			 Regresar</a>
		</div></h2></center>
		<?php
	}
	$db->close();
?>
</body>
</html>