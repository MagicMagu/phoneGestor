<?php 
  //Creo un array que contendra las distintas rutas de mi sitio
  $routes = array();
  $routes["/index"] = '../../../phoneGestor/index.php';
  $routes["index/login"] = '../../phoneGestor/controller/log_in/controllerLogin.php';
  $routes["index/registry"] = '../../phoneGestor/controller/log_in/controllerRegistry.php';
  $routes["index/logout"] = '../../phoneGestor/models/log_in/log_outUser.php';
  $routes["index/contact"] = '../../phoneGestor/controller/contacts/controllerContact.php';
  $routes["index/contact/createContact"] = '../../../phoneGestor/controller/contacts/controllerCreateContact.php';
  $routes["index/contact/editContact"] = '../../../phoneGestor/controller/contacts/controllerEditContact.php';
  $routes["index/contact/deleteContact"] = '../../../phoneGestor/models/contacts/deleteContact.php';
  $routes["index/profile"] = '../../phoneGestor/controller/profile/controllerProfile.php';
  $routes["index/profile/editProfile"] = '../../../phoneGestor/controller/profile/controllerEdit.php';
  $routes["index/profile/editPassword"] = '../../../phoneGestor/controller/profile/controllerPass.php';
?>