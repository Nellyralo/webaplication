
<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, usuario, password FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = user ;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INICIO | P9</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

   <?php
   if (isset($_SESSION['user_id']))
    {
    header('Location: control/administrador.php');
    }
      ?>

   <?php if(!empty($user)): ?>

      <div class="mensaje">

      <br> Welcome. <?= $user['usuario']; ?>
      <br>You are Successfully Logged In 

      </div>
    <?php else: ?>
      <div align="center">
      <h1>Por favor inicie sesion </h1>

      <a href="loginform.html">Iniciar Sesion</a>
       </div>
    <?php endif; ?>
  </body>
</html>

