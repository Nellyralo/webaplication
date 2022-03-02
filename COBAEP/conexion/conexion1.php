<?php
@ $db = new mysqli ('localhost', 'root', '', 'sistema_estudiantes_cobaep');
if(mysqli_connect_errno()){
	echo 'Conexion fallida:',mysqli_connect_errno();
exit();}
	?>