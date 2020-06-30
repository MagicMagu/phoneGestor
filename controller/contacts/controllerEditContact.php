<?php 
  require_once('c:/xampp/htdocs/phoneGestor/models/routes.php');
  require_once('c:/xampp/htdocs/phoneGestor/models/contacts/editContact.php');
  $editContact = new editCon();
  if (isset($_GET['id']) && isset($_GET['userId'])) {
    $conId = $_GET['id'];
    $useId = $_GET['userId'];
  }
  if (isset($_POST['editcontact'])) {
    $newName = $_POST['contact'];
    $newPhone = $_POST['phone'];
    $message = $editContact->updateContact($conId, $newName, $newPhone, $useId);
  }
  require_once('c:/xampp/htdocs/phoneGestor/view/contacts/editContact.php');
?>