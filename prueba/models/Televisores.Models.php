<?php

class Televisores extends Conexion{
    public $conectar;

    public function __construct(){
        $this->conectar = parent::conexion();
    }
    public function getTelevisor(){
        $sql = "SELECT * FROM tbtelevisores";
        $sql = $this->conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function getTelevisorid($id){
        $sql = "SELECT * FROM tbtelevisores WHERE idtelevisor = ?";
        $sql = $this->conectar->prepare($sql);
        $sql->bindValue(1,$id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function insertTelevisor($marca, $modelo,$serie,$tamaño,$año){
        $sql = "INSERT INTO tbtelevisores(marca,modelo,serie,tamaño,año) VALUES (?,?,?,?,?)" ;
        $sql = $this->conectar->prepare($sql);
        $sql->bindValue(1,$marca);
        $sql->bindValue(2,$serie);
        $sql->bindValue(3,$modelo);
        $sql->bindValue(4,$tamaño);
        $sql->bindValue(5,$año);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function updateTelevisor($idtelevisor,$marca, $modelo,$serie,$tamaño,$año){
        $sql = "UPDATE tbtelevisores SET marca =?,serie=?,modelo=?,tamaño=?,año=? WHERE idtelevisor =? " ;
        $sql = $this->conectar->prepare($sql);
        $sql->bindValue(1,$marca);
        $sql->bindValue(2,$serie);
        $sql->bindValue(3,$modelo);
        $sql->bindValue(4,$tamaño);
        $sql->bindValue(5,$año);
        $sql->bindValue(6,$idtelevisor);
        $sql->execute();
        return $resultado = $sql->fetchAll();

    }
    public function deleteTelevisor($id){
        $sql = "DELETE FROM tbtelevisores WHERE idtelevisor =?";
        $sql = $this->conectar->prepare($sql);
        $sql->bindValue(1,$id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

}
 