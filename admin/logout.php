<?php
  require_once  '../controllers/loginController.php';
  use Controllers\loginController;
  $login = new loginController();
  $login->logout();
?>