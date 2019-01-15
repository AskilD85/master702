<?php

class IndexController extends Controller {

	private $pageTpl = '/views/main.php';


	public function __construct() {
		$this->model = new IndexModel();
		$this->view = new View();
	}
        
        public function Services2(){
            if(!empty($_GET['id'])){
                echo 'пришла ID=ка - POST'.$_POST['id'];
                echo '<br / >пришла ID=ка GET'.$_GET['id'];
                $id = $_GET['id'];
                echo '$id='.$id;
                $masters = $this->model->getMasterById($id);
                echo $masters;
                return true;
            }else{
                echo "что то не так";
            }
            
        }

	public function index() {
		$this->pageData['title'] = "МойМастер";
                
                $servicesTable = $this->model->getAllServices();
                $this->pageData["servicesTable"] = $servicesTable;
               
                
                
                          
            
                $this->view->render($this->pageTpl, $this->pageData);
	}
        
        
       
    }


	



