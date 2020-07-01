<?php 
  require_once('c:/xampp/htdocs/phoneGestor/models/profile/editPass.php');
  $editionPass = new editMyPass();
  if (isset($_GET['id'])) {
    $userId = $_GET['id'];
  }
  if (isset($_POST['changePass'])) {
    $actual = $_POST['actual'];
    $new = $_POST['new'];
    $change = $_POST['verify'];
    if ($new == $change) {
      $editionPass->updatePass($actual, $change, $userId);
    }else{
      echo "La contraseña de confirmación y la de actualización no son iguales";
    }
  }
  require_once('c:/xampp/htdocs/phoneGestor/view/profile/editPassword.php');
?>