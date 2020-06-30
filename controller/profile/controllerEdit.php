<?php  
  require_once('c:/xampp/htdocs/phoneGestor/models/profile/editProfile.php');
  $edit = new editProfile();
  if (isset($_GET['id'])) {
    $userId = $_GET['id'];
  }
  if (isset($_POST['edituser'])) {
    $userName = $_POST['user'];
    $userEmail = $_POST['mail'];
    $edit->updateProfile($userId, $userName, $userEmail);
  }
  require_once('c:/xampp/htdocs/phoneGestor/view/profile/editProfile.php');
?>