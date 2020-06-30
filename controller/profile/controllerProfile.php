<?php 
  require_once('c:/xampp/htdocs/phoneGestor/models/routes.php');
  require_once('c:/xampp/htdocs/phoneGestor/models/profile/viewProfile.php');
  $useData = new showProfile();
  $useId = '';
  if (isset($_GET['id'])) {
    $useId = $_GET['id'];
  }
  $myData = $useData->viewUser($useId);
  require_once('c:/xampp/htdocs/phoneGestor/view/profile/profile.php');
?>