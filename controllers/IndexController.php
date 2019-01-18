<?php

class IndexController extends Controller {

	private $pageTpl = '/views/main.php';


	public function __construct() {
		$this->model = new IndexModel();
		$this->view = new View();
	}
        
       
	public function index() {
		$this->pageData['title'] = "МойМастер";
                
                $servicesTable = $this->model->getAllServices();
                $this->pageData["servicesTable"] = $servicesTable;
               
                
                if(!empty($_GET)){
                   if(!empty($_GET) && !empty($_GET['id']) && !empty($_GET['editName']) && !empty($_GET['editTel']) && !empty($_GET['editEmail']) ) {
            $userId = $_GET['id'];
            $editName = strip_tags(trim($_GET['editName']));
            $editTel = strip_tags(trim($_GET['editTel']));
            $editEmail = strip_tags(trim($_GET['editEmail']));
            
            $this->model->updateUserInfo($userId, $editName, $editTel, $editEmail);
               
            } else {
                echo "<b>Заполните все данные</b>";
            }
                }
                          
            
                $this->view->render($this->pageTpl, $this->pageData);
	}
        
       public function Logout(){
            unset($_SESSION['logged_user']);
            unset($_SESSION['admin']);
            header ("Location: /");
	}
        
        public function UpdateUser() {
    	if(!$this->model->checkUpdateUser()) {
			return false;
		}
                
	} 
        
        
        
        public function updateUserData() {

        if(!$_SESSION['user']) {
            header("Location: /");
        }

        if(!empty($_POST) && !empty($_POST['id']) && !empty($_POST['editName']) && !empty($_POST['editTel']) && !empty($_POST['editEmail']) ) {
            $userId = $_POST['id'];
            $editName = strip_tags(trim($_POST['editName']));
            $editTel = strip_tags(trim($_POST['editTel']));
            $editEmail = strip_tags(trim($_POST['editEmail']));
            
            $this->model->updateUserInfo($userId, $editName, $editTel, $editEmail);
            echo array("success" => true, "text" => "Данные пользователя сохранены");    
        } else {
            echo array("success" => false, "text" => "Заполните все данные");
        }

    }
}


	



