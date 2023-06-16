<?php

class Producto extends Conectar{

    public function get_producto(){
        $conectar = parent::Conectar();
        parent::set_name();
        $stm = $conectar-> prepare("SELECT * FROM producto ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);


    }
    public function get_producto_id($id){
        $conectar = parent::Conectar();
        parent::set_name();
        $stm = $conectar->prepare(("SELECT * FROM producto WHERE id =?"));
        $stm->bindValue(1,$id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
    public function insert_producto($id,$nombre){
        $conectar=parent::Conectar();
        parent::set_name();
        $stm="INSERT INTO productos(id,nombre) VALUES(?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id);
        $stm->bindValue(3,$nombre);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}
?>