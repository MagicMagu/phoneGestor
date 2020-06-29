<?php 
  class headerModel{
    private $database;
    public function __construct(){
      require_once('c:/xampp/htdocs/phoneGestor/models/db/connection.php');
      $this->database = connectDB::connection();
    }
    public function verifySession($session){
      $user = null;
      if ($session != '') {
        if ($userSesion = $this->database->query("SELECT * FROM users WHERE userId='$session'")) {
          $user = $userSesion->fetch_assoc();
        }
      }
      return $user;
    }
  }
?>