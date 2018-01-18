
<?php

//--Incluimos el archivo en usuarioClass.php
require_once("bbdd.php"); 

$arrMensaje = array();





if(isset($_POST["json"])){
    
    $json = $_POST["json"];
    $json = urldecode($json);
    $json = str_replace("\\", "",$json);
    $jsonencode = json_decode($json);

    var_dump($jsonencode);    
    //var_dump($jsonencode[0]->nombre);
    var_dump($jsonencode->nombre);
    
    
    
    $query = "INSERT INTO `Jugadores` (`ID`, `Nombre`, `Apellido`, `Posicion`, `ID_Equipo`) VALUES (NULL, '".$jsonencode->nombre."', '".$jsonencode->apellidos."', '".$jsonencode->posicion."', '".$jsonencode->equipo."')";
    
    
    $result = $conn->query ( $query );
    if (isset ( $result ) && $result) { 
    
    }
    else {
	
	$arrMensaje["estado"] = "error";
	$arrMensaje["mensaje"] = "SE HA PRODUCIDO UN ERROR AL ACCEDER A LA BASE DE DATOS";
	$arrMensaje["error"] = $conn->error;
	$arrMensaje["query"] = $query;
        echo $arrMensaje;
}
$conn->close ();
}
else{

}

