<?php

class Inventario extends Conectar{

    public function get_inventario(){
        $conectar = parent::Conectar();
        parent::set_name();
        $stm = $conectar->prepare("SELECT inv.id, prod.nombre AS nombre_producto, inv.CantidadInicial, inv.CantidadIngresos, inv.CantidadSalidas, inv.CantidadFinal, inv.FechaInventario, inv.TipoOperacion
        FROM inventario inv
        JOIN producto prod ON inv.producto_id = prod.producto_id
        ");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_inventario_id($id){
        $conectar = parent::Conectar();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM inventario WHERE id=?");
        $stm -> bindvalue(1,$id);
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_inventario($producto_id,$CantidadInicial, $CantidadIngresos, $CantidadSalidas, $CantidadFinal, $FechaInventario, $TipoOperacion){
        $conectar=parent::Conectar();
        parent::set_name();
        $stm="INSERT INTO inventario(producto_id,CantidadInicial, CantidadIngresos, CantidadSalidas, CantidadFinal, FechaInventario, TipoOperacion) VALUES(?,?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$producto_id);
        $stm->bindValue(2,$CantidadInicial);
        $stm->bindValue(3,$CantidadIngresos);
        $stm->bindValue(4,$CantidadSalidas);
        $stm->bindValue(5,$CantidadFinal);
        $stm->bindValue(6,$FechaInventario);
        $stm->bindValue(7,$TipoOperacion);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
}
?>