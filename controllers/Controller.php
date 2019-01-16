<?php

class Controller {

	public $model;
	public $view;
	protected $pageData = array();

	public function __construct() {
		$this->view = new View();
		$this->model = new Model();
	}
        
        public function getAuth()
	 {	
            if(isset($_SESSION['logged_user'])){
                            echo'<div class="auth-div">';
                            echo 'Привет,'.$_SESSION['logged_user'];  ?>
                            <a href="logout">Выйти</a></div>
                        <?php }else{ ?>
                            <div class="auth-div">
                            <i for="auth-id" class="fa fa-2x fa-address-card-o" aria-hidden="true"></i>
                            <a class="auth-link" id="auth-id" href="login">&nbsp;Войти в личный кабинет</a>
                            </div>
                       <?php }
	}

}