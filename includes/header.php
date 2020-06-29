<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet"  href="../../phoneGestor/css/compile/main.css">
  <title>PhoneGestor</title>
</head>
<body>
  
  <header>
    <div class="logo">
      <a href="../index.php">PhoneGestor</a>
    </div>
    <?php if(!empty($userData) && isset($_SESSION['user_id'])) {?>
      <div class="sesion">
        <div class="nav-routes">
          <a href="#">Perfil</a>
          <a href="#">Contactos</a>
        </div>
        <div class="user-sesion">
          <span><?php echo $userData['user']; ?></span>
          <a href="../../phoneGestor/models/log_in/log_outUser.php" class="btn">Cerrar sesión</a>
        </div>
      </div>
    <?php }else{ ?>
      <div class="sesion">
        <a href="<?php echo $routes['login']; ?>" class="btn btn-load">Iniciar Sesión</a>
        <a href="<?php echo $routes['registry']; ?>" class="btn btn-get-in">Registrarse</a>
      </div>
    <?php } ?>
  </header>

</body>
</html>