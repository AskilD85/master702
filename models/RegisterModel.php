<?php

class RegisterModel extends Model {
    
     public function RegisterNewUser($login,$password,$fullName,$email) {
        
        
        $sql = "INSERT INTO users(login,password,fullName,email,role_id) VALUES (:login,:password,:fullName,:email, 2 )";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue("login",$login,PDO::PARAM_STR);
        $stmt->bindValue("fullName",$fullName,PDO::PARAM_STR);
        $stmt->bindValue("email",$email,PDO::PARAM_STR);
        $stmt->bindValue("password",$password,PDO::PARAM_STR);
        $stmt->execute();
    }
    
    
    function CheckUser1($login,$email) {
        $result=array(); 
        $sql = "SELECT login,email FROM users WHERE login=:login OR email=:email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue("login",$login,PDO::PARAM_STR);
        $stmt->bindValue("email",$email,PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    

    
    
    
    
    public static function CheckLogin($login) {
            if(strlen($login)>=3){
            return true;
        }
        return FALSE;
        
        }
   
     public static function CheckPass($pass1,$pass2) {
            if(isset($pass1)&&($pass1 == $pass2)){
            return true;
        }
        return FALSE;
        
    } 
    
    public static function CheckEmail($email) {
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return FALSE;
    }
    
    
    public function checkRegister() {

        $login = $data['login'];
        $password = $_data['password'];
    
	$error=array();
        

	}
        
        
}