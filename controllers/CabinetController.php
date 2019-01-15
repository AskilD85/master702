<?php

class CabinetController extends Controller {

	private $pageTpl = '/views/cabinet.php';


	public function __construct() {
		$this->model = new CabinetModel();
		$this->view = new View();
	}


	public function index() {

		if(!$_SESSION["user"]){
			header("Location: /");
		}


		$this->pageData['title'] = "Личный кабинет";

        
       
        

	$this->view->render($this->pageTpl, $this->pageData);//передаем все парааметры массиву pageData
	}
	public function Logout(){
		session_destroy();
		header ("Location: /");
	}




}