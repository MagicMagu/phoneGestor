<?php 
  require_once('c:/xampp/htdocs/phoneGestor/models/routes.php');
  require_once('c:/xampp/htdocs/phoneGestor/models/contacts/viewContact.php');
  $showContacts = new myContact();
  $session = '';
  if (isset($_GET['id'])) {
    $session = $_GET['id'];
  }
  $myContacts = $showContacts->showUsers($session);
  require_once('c:/xampp/htdocs/phoneGestor/view/contacts/contact.php');
?>