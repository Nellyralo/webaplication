<?php
  session_start();

  $user=;
 if(!empty($user)): ?>

      <div class="mensaje">

      <br> Bienvenido <?= $user['usuario']; ?>
      <br>Se inicio sesion correctamente.
      </a>
    </div>

  </body>
</html>