<?php session_start();
if (isset($_SESSION['user_id']))
    {
    }
  else
  {
  session_destroy();
  echo'<script type="text/javascript"> window.location="../../loginform.html"; </script>';
    }
		?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="../tabla.css">
<div id="latest-post" class="post">
<h1 class="title"></h1>
<div class="entry">
<center>
<br><br><br>
<h1> Consulta </h1></br>
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
	echo '<table border="1">';
	echo '<thead>';
	echo '<tr>';
	echo '<th> <span class="tabla"> Foto</span> </th>';
	echo '<th> <span class="tabla"> Matricula</span> </th>';
	echo '<th> <span class="tabla"> Nombre del alumno </span></th>';
	echo '<th> <span class="tabla"> Apellido paterno</span></th>';
	echo '<th> <span class="tabla"> Apellido materno </span></th>';
	echo '<th> <span class="tabla"> Celular</span> </th>';
	echo '<th> <span class="tabla"> Correo</span> </th>';
	echo '<th> <span class="tabla"> Curp</span> </th>';
	echo '<th> <span class="tabla"> Numero de seguro</span> </th>';
	echo '<th> <span class="tabla"> Tutor</span> </th>';
	echo '<th> <span class="tabla"> Apellidos del tutor</span> </th>';
	echo '<th> <span class="tabla"> Celular 1</span> </th>';
	echo '<th> <span class="tabla"> Celular 2</span> </th>';
	echo '<th> <span class="tabla"> Domicilio</span> </th>';
	echo '<th> <span class="tabla"> Correo electronico</span> </th>';
	echo '</tr>';
	echo '</thead>';
	for($i=0; $i<$num_resultados;$i++)
	{
	$row = $result->fetch_assoc();
	echo '<tr>';
	echo '<td data-label="Foto">  ';
    echo '<img src="'.$row["foto"].'" width="70" height="170">';
	echo '</td>  ';
	echo '<td data-label= "Matricula">  ';
	echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['matricula'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Nombre">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['nombres_alumno'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Apellido paterno">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['apellido_paterno'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Apellido materno">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['apellido_materno'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Celular">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['celular'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Correo">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['email_alumno'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Curp">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['curp'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Numero de seguro">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['no_seguro'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Nombre del tutor">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['nombres_tutor'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Apellidos">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['apellidos_tutor'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Telefono">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['telefono1'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Telefono">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['telefono2'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Domicilio">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['domicilio'])) . '</span>';
	echo '</td>  ';
	echo '<td data-label="Correo del tutor">  ';
    echo '<span class="tabla">' . htmlspecialchars(stripslashes ($row['email_tutor'])) . '</span>';
	echo '</td>  ';
	echo '</tr>  ';
	}
	echo '</table>';
	echo '</center> ';
	echo '<td align="center" colspan="6"><a title=" Regresar? " href="ConsultaDatos.php?matricula=<?php echo $row[matricula]; ?>"><font size=3 color="#003300"><input type="Submit" value="REGRESAR"><br></font></td>';
	break;
			}
	$db->close();
?>
</div>
</div>