<?php

class ServicesModel extends Model {
    
    public function getAllServices() {
        $result = array(); //задаем массив
        $sql = "SELECT * FROM services";
        $stmt = $this->db->prepare($sql); //защищаем введенные данные
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    
    public function getMasterById2($id) {
        $result = array(); //задаем массив
        $sql = "SELECT * FROM specialist WHERE id_services=:id";
        $stmt = $this->db->prepare($sql); //защищаем введенные данные
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getMaster2ById($id){
        return true;
    }

        public function getServiceById($id) {
        //$result = array(); //задаем массив
        $sql = "SELECT name FROM services WHERE id = :id";
        $stmt = $this->db->prepare($sql); //защищаем введенные данные
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $result= $stmt->fetch(PDO::FETCH_ASSOC); 
        return $result;
    }
    
   
}