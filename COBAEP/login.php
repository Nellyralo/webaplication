<?php

  session_start();
  //Verificacion de inicio de sesion
  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }

$usuario =$_POST['usuario'];
$password =$_POST['password'];


if (!get_magic_quotes_gpc())
{
$usuario =addslashes($usuario);
$password=addslashes($password);
}
  //conexion
  require 'database.php';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usuario, password FROM usuarios WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

      if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: login.php");
    } else {
      $message = 'El Usuario o la Contraseña son incorrectos';
    }
  }

?>

   <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
<?php
    echo date('H:i jS F');
    ?>



