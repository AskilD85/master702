<?php

class ServicesController extends Controller {

	private $pageTpl = '/views/services.php';


	public function __construct() {
		$this->model = new ServicesModel();
		$this->view = new View();
	}
        
        public function index(){
            if(!empty($_GET['id'])){
                $id = $_GET['id'];
                $masters = $this->model->getMasterById($id);
                $this->pageData["masterByProf"] = $masters;
                }else{
                echo "что то не так";
            }
            $this->view->render($this->pageTpl, $this->pageData);
        }

	
        
        
       
    }
