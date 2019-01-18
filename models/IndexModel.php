<?php

class IndexModel extends Model {
    
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
        $sql = "SELECT * FROM specialist WHERE id = :id";
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
    
    public function updateUserInfo($id, $name, $tel, $email) {
        
                $name = $_GET['editName'];
                $email = $_GET['editEmail'];
                $tel = $_GET['editTel'];
                $id = $_GET['id'];
		$sql = "UPDATE specialist SET name = :name, email = :email, phone = :phone WHERE id = :id";

		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":name", $name, PDO::PARAM_STR); //параметр >bindValue задает login как строковый тип
		$stmt->bindValue(":email", $email, PDO::PARAM_STR);
                $stmt->bindValue(":phone", $tel, PDO::PARAM_STR);
                $stmt->bindValue(":id", $id, PDO::PARAM_INT);
		$stmt->execute(); 

               
       
   
}}