<?php

  include_once "./config/Database.php";

  $db = new Database();

  $db->connect();


  var_dump(getenv('password'));
?>