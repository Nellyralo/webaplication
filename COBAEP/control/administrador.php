<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INICIO | P9</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/fondoStyle.css">
  </head>
  <body>

    <?php session_start();
    if (isset($_SESSION['user_id']))
    {
    require('encabezado.inc');
    }
  else
  {
  session_destroy();
  echo'<script type="text/javascript"> window.location="../loginform.html"; </script>';
    }


    //require('../mensaje.php');
  ?>
  
   
  </body>
</html>
