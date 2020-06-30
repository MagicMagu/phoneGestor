<?php 
  require_once('../../../phoneGestor/models/contacts/createContact.php');
  $createCont = new newContact();
  if (isset($_POST['newcontact'])) {
    $name = $_POST['contact'];
    $phone = $_POST['phone'];
    $userId = $_GET['id'];
    $message = $createCont->createContact($name, $phone, $userId);
  }
  require_once('../../../phoneGestor/view/contacts/createContact.php');
?>