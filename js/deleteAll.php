<?php

//--Incluimos el archivo en usuarioClass.php
require_once("bbdd.php"); 




    
    $query = "DELETE FROM `Jugadores`";
    
    
   $result = $conn->query ( $query );
    if (isset ( $result ) && $result) { 
    $arrMensaje["estado"] = "borradocorrecto";
	$arrMensaje["mensaje"] = "Borrado todos correctamente";
	$arrMensaje["query"] = $query;
    
    }
    else {
	
	$arrMensaje["estado"] = "error";
	$arrMensaje["mensaje"] = "SE HA PRODUCIDO UN ERROR AL ACCEDER A LA BASE DE DATOS";
	$arrMensaje["error"] = $conn->error;
	$arrMensaje["query"] = $query;
	
}
$conn->close ();
