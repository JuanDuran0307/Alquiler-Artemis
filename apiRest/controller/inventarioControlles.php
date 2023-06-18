<?php

header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/inventario.php");

$inventario = new Inventario();

$body = json_decode(file_get_contents("php://input"),true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos=$inventario->get_inventario();
        echo json_encode($datos);
        break;
    case 'GetId':
        $datos = $inventario->get_inventario_id($body['id']);
        echo json_encode($datos);
        break;
    case 'insert':
        $datos = $inventario->insert_inventario($body['producto_id'], $body['CantidadInicial'], $body['CantidadIngresos'], $body['CantidadSalidas'], $body['CantidadFinal'], $body['FechaInventario'], $body['TipoOperacion']);
        echo json_encode("Insertado correctamente");
        break;
    default:
        break;
}

?>