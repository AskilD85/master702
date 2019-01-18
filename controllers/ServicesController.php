<?php

class ServicesController extends Controller {

	private $pageTpl = '/views/services.php';


	public function __construct() {
		$this->model = new ServicesModel();
		$this->view = new View();
	}
        
        public function index(){
            if(isset($_GET['id'])){
                
                $id = $_GET['id'];
                $id_edit = $_GET['editId'];
                
                $masters = $this->model->getMasterById2($id);
                $this->pageData["masterByProf"] = $masters;
                
                $editMaster = $this->model->getMasterById2($id_edit);
                $this->pageData["EditMaster"] = $editMaster;
                
                $service = $this->model->getServiceById($id);
                $this->pageData["service"] = $service;
                
                }else{
                    echo 'что то не так! ';
                }
                
                
            
            $this->view->render($this->pageTpl, $this->pageData);
        }

	    public static function EditForm($id) {
              
            if(($_SESSION['admin'])){
                
                echo "<span><a href='#' id='editMaster' onclick='EditMasterById($id)'>Редактировать</a></span>";
                echo "&nbsp&nbsp<span ><a href='#' style='color:red' onclick='DelMasterById(".$id.")'>Удалить</a></span>";
            }
            
            if(isset($_POST['id'])){
              $id=$_POST['id'];
            $master = $this->model->getMasterById2($id);
            $this->pageData["EditMaster"] = $master;
            $this->view->render($this->pageTpl, $this->pageData);
            }}
        
public function Update() {
    	if(!$this->model->checkUpdateUser()) {
			return false;
		}
                
	}
}
       
    
    
    
