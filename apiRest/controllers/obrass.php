<?php

header("content-Type: application/json");

require_once("../config/conectar.php");
require_once("../models/Obras.php");

$obras = new Obras();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]){

    case "GetAll":
        $datos = $obras->get_obras();
        echo json_encode($datos);

    break;
    case "Getid":
        $datos = $obras->get_obras_id($body["id"]);
        echo json_encode($datos);
    break;
    
    case "insert":
        $datos = $obras->insert_obras($body["id"], $body["imagen"], $body["nombre"], $body["edad"], $body["promedio"], $body["nivelCAmpus"], $body["nivelIngles"],$body["especialidad"], $body["direccion"], $body["celular"], $body["Ingles"], $body["Ser"], $body["Review"], $body["Skills"], $body["Asitencia"] );
        echo json_encode("fue insertado correctamente");
    break;
}
?>