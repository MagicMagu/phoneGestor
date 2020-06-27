<?php 
  require_once('C:/xampp/htdocs/phoneGestor/models/log_in/regisUser.php');
  $regis = new registModel();
  if (isset($_POST['create'])) {
    $message = $regis->insert_user($_POST['user'], $_POST['password'], $_POST['email']);
  }
  require_once('C:/xampp/htdocs/phoneGestor/view/log_in/registry.php');
?>