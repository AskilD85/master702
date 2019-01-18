<?php

class LoginModel extends Model {

	
	public function checkUser() {

        $login = $_POST['login'];
        $password = md5($_POST['password']);
    
		$sql = "SELECT * FROM users WHERE login = :login AND password = :password";

		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":login", $login, PDO::PARAM_STR); //параметр >bindValue задает login как строковый тип
		$stmt->bindValue(":password", $password, PDO::PARAM_STR);
		$stmt->execute(); 

		$res = $stmt->fetch(PDO::FETCH_ASSOC);
        
                
		if(!empty($res)) {
                    $role=1;
                    if($res['role_id']==$role){
                        $_SESSION['admin']=true;
                        }else{
                            $_SESSION['admin']=false;
                        }
                    $_SESSION["logged_user"]=$_POST["login"];
                        
                        header("Location: /");
		} else {
			return false;
		}

	}
        
                
        
    
            
        

}