<?php
ini_set("display_errors" , 1);
ini_set("display_startup" , 1);

error_reporting(E_ALL);


header('Content-Type: application/json');

require_once("../config/conectar.php");
require_once("../models/Producto.php");

$producto = new Producto();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]){

    case "GetAll":
        $datos = $producto->get_producto();
        echo json_encode($datos);   

    break;
    case "Getid":
        $datos = $producto->get_producto_id($body["id"]);
        echo json_encode($datos);
    break;
    
    case "insert":
        $datos = $producto->insert_producto($body["id"], $body["nombre"]);
        echo json_encode("fue insertado correctamente");
    break;
}
?>