<?php

class LoginModel extends Model {

	
	public function checkUser() {
            
        $host = 'localhost'; // адрес сервера 
		$database = 'master702'; // имя базы данных
		$user = 'root'; // имя пользователя
		$password = ''; // пароль
	   
		$mysqli = mysqli_connect($host, $user, $password, $database) 
		   or die("Ошибка " . mysqli_error($mysqli));
		   $mysqli->set_charset('utf8');

    
            
       
        $login = $_POST['login'];
        $password = md5($_POST['password']);
        
		$sql = "SELECT * FROM users WHERE login='".$login."' AND password='".$password."'";
                
                
		//$stmt = $this->db->prepare($sql);//защищает от SQL-инъекций 
//		$stmt->bindValue(":login", $login, PDO::PARAM_STR); //параметр >bindValue задает login как строковый тип
//		$stmt->bindValue(":password", $password, PDO::PARAM_STR);
//		$stmt->execute(); 

		//$res = $stmt->fetch(PDO::FETCH_ASSOC);
        

               $result = $mysqli->query($sql)or die("Error " . mysqli_error($mysqli)); 
            	if(!empty($result)) {
                        header("Location: /cabinet");
			$_SESSION["user"]=$_POST["login"];

			
		} else {
			return false;
		}

	}

}