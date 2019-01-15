<?php

class ProductsModel extends Model {
   public function getAllProducts() {
        $result = array(); //задаем массив
        $sql = "SELECT * FROM products";
        $stmt = $this->db->prepare($sql); //защищаем введенные данные
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    
     public function addFromCSV($data) {//Загрузкав базу данных из csv-файла
        $sql = "INSERT INTO products(name, price) VALUES(:name, :price)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":name", $data[0], PDO::PARAM_STR);
        $stmt->bindValue(":price", $data[1], PDO::PARAM_INT);
        $stmt->execute();
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
?>