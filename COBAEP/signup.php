<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'El usuario se ingreso correctamente';
    } else {
      $message = 'El usuario que ingreso no es compaltible';
    }
  }
?>
 <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    