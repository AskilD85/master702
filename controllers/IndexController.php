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
               
                
                
                          
            
                $this->view->render($this->pageTpl, $this->pageData);
	}
        
       public function Logout(){
            unset($_SESSION['logged_user']);
            header ("Location: /");
	}
        
        
}


	



