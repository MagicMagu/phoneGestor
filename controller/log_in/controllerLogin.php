<?php 
  require_once('C:/xampp/htdocs/phoneGestor/models/log_in/log_inUser.php');
  $login = new log_InModel();
  if (isset($_POST['log-in'])) {
    $message = $login->verifyUser($_POST['user'], $_POST['password']);
  }
  require_once('C:/xampp/htdocs/phoneGestor/view/log_in/log_in.php');
?>