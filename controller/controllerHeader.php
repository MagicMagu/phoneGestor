<?php 
  require_once('c:/xampp/htdocs/phoneGestor/models/routes.php');
  require_once('c:/xampp/htdocs/phoneGestor/models/headerModel.php');
  session_start();
  $head = new headerModel();
  if (isset($_SESSION['user_id'])) {
    $userData = $head->verifySession($_SESSION['user_id']);
  }
  require_once('c:/xampp/htdocs/phoneGestor/includes/header.php');
?>