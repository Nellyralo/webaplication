<!DOCTYPE html>
<html>
<head>
	<title>GENERAR CITATORIO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../styleJC.css">

</head>
<body>

    <?php session_start();
    if (isset($_SESSION['user_id']))
    {
    require('encabezadoCitatorios.inc');
    }
  else
  {
  session_destroy();
  echo'<script type="text/javascript"> window.location="../../loginform.html"; </script>';
    }
  ?>
 	<div align="center">
    <br><br><br>
 		<h1>Generar citatorio</h1>
 	</div>
 	<br>
 <!-- <form action="Altadatosbd.php" enctype="multipart/form-data" method=post>-->
  <form name="Citatorio" action="Cittatorio.php" method="post">
  <div align="center">  
    <label for="nombre"><b>Nombre del alumno: </b></label><br>
    <input type="text" placeholder="nombre" name="nombre" id= "nombre" required>
    <br>
    <label for="nombres_tutor"><b>Nombre del tutor: </b></label><br>
    <input type="text" placeholder="nombres del tutor" name="nombres_tutor" id= "nombres_tutor" required>
    <br>

  
  <p> <b>Dia:</b><br>
 <select name="Dia">
  <option value="0">---</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  </select>
  </p>


   <p><b>Mes:</b><br>
  <select name="Mes">
  <option value="1">---</option>
  <option value="Enero">Enero</option>
  <option value="Febrero">Febrero</option>
  <option value="Marzo">Marzo</option>
	<option value="Abril">Abril</option>
  <option value="Mayo">Mayo</option>
  <option value="Junio">Junio</option>
  <option value="Julio">Julio</option>
  <option value="Agosto">Agosto</option>
  <option value="Septiembre">Septiembre</option>
  <option value="Octubre">Octubre</option>
  <option value="Noviembre">Noviembre</option>
  <option value="Dociembre">Dociembre</option>
  </select>
  </p>


  <p><b>Hora:</b><br> 
  <input type="time" name="Hora">
  </p>

  <p><b>Semestre:</b><br>
    <select name="Semestre">
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

  <p><b>Grupo:</b><br>
    <select name="Grupo">
      <option value="1">---</option>
      <option value="'A'">'A'</option>
      <option value="'B'">'B'</option>
      <option value="'C'">'C'</option>
    </select>
    
  </p>

    <button type="submit">Generar</button>
   </div>


</body>
</html>