<?php

class Obras extends Conectar{

    public function get_obras(){
        $conectar = parent::Conectar();
        parent::set_name();
        $stm = $conectar-> prepare("SELECT * FROM obra ");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);


    }
    public function get_obras_id($id){
        $conectar = parent::Conectar();
        parent::set_name();
        $stm = $conectar->prepare(("SELECT * FROM obra WHERE id =?"));
        $stm->bindValue(1,$id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
    public function insert_obras($id,$nombre){
        $conectar=parent::Conectar();
        parent::set_name();
        $stm="INSERT INTO obra(id,nombre) VALUES(?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id);
        $stm->bindValue(3,$nombre);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}
?>