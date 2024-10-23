<?php

require_once("../config/connect.php");

   session_start();
   session_unset();
   session_destroy();
  
   header("location:login.php");
    exit();

?>
