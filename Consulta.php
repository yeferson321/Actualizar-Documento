<?php

include("db.php");

if (isset($_POST['procesar']) || (isset($_POST['submit']))){
    
    $Tipo_Documento=$_POST['Tipo_Documento'];
    $Documento=$_POST['Documento'];

    $c = sqlsrv_connect($serverName, $connectionInfo);
	if ($c) {
    $query = "SELECT (case  when mvcest='S' THEN 'ABIERTO' when mvcest='C' THEN 'CERRADO' END )  AS ESTADO ,* from MOVCONT3 WHERE DOCCOD = '$Tipo_Documento' AND MVCNRO = '$Documento'";
	  $datos = sqlsrv_query($c, $query);
    
    }

    while ($fila = sqlsrv_fetch_array($datos, SQLSRV_FETCH_ASSOC)){
    
        $_SESSION['message'] = $fila['DOCCOD'];
        $_SESSION['messag'] = $fila['ESTADO'];
        $_SESSION['messa'] = $fila['MvCNro'];

    }

    header("Location: index.php");
}

?>