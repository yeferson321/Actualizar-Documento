<?php

session_start();

    $serverName = "172.30.0.2";
    $dataBaseName = "HOSVITAL";
    $userId = "HOSVITAL";
    $userPassword = "CCQ2019Clinica";
  
    $connectionInfo = array(
      "APP"           =>  "TableroPacientes",
      "Database"      =>  $dataBaseName, 
      "UID"           =>  $userId, 
      "PWD"           =>  $userPassword, 
      "CharacterSet"  =>  "UTF-8",
      "LoginTimeout"  =>  30,
      "MultipleActiveResultSets"  =>  1
    );
    
     /*
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if ($conn === false) {
      die( print_r( sqlsrv_errors(), true));
    }
    */
?>