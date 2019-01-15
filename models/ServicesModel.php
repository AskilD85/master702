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
    
    public function getMasterById($id) {
        $result = array(); //задаем массив
        $sql = "SELECT * FROM specialist WHERE id_services = :id";
        $stmt = $this->db->prepare($sql); //защищаем введенные данные
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
      
    public function getProductById($id) {
        $result = array();
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


}