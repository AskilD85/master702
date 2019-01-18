<?php

class RegisterController extends Controller {
    
    private $pageTpl = '/views/register.php';

    public function __construct() {
		$this->model = new RegisterModel();
		$this->view = new View();
	}
    public function index() {
        $this->pageData['title'] = "Регистрация пользователя";
        $login='';
        $email='';
        $password='';
        $fullName='';
        
       if(isset($_POST['submit']))
           {
                $login=trim(HTMLSPECIALCHARS($_POST['login']));
                $email=trim(HTMLSPECIALCHARS($_POST['email']));
                $fullName=trim(HTMLSPECIALCHARS($_POST['fullName']));

                $password = $_POST['password'] ;
                $password2 = $_POST['password_2'];

                $errors[] = array();    

                if($this->model->CheckUser1($login,$email)){
                    $this->pageData['error'] = "Пользователь с таким логином или Email уже существует";
                }else{     
                    
                    
                    if(!$this->model->CheckEmail($email)){
                    $this->pageData['error'] = "Проверьте Email";
                    $this->pageData['registerMsg'] = "Проверьте Email";
                    }


                     if(!$this->model->CheckPass($password,$password2)){
                          $this->pageData['error'] = "Повторный пароль введён не верно";
                         
                          

                     }
                       if(!$this->model->CheckLogin($login)){
                     $this->pageData['error'] = "Проверьте логин";
                     }


                    if(!empty($pageData['error'])&&!empty($pageData['registerMsg'])){
                        $this->pageData['error'] = "Есть ошибки";
                        
                    }else{

                        if($this->Register()) {
                            $this->pageData['registerMsgOK'] = "Вы успешно зарегистрированы.<a href='login'>Авторизуйтесь!</a>";
                            $this->pageData['error'] = "";
                        }else{
                            $this->pageData['registerMsg'] = "Попробуйте ещё раз!";
                        }
                    }
            }
           
}
       $this->view->render($this->pageTpl, $this->pageData);
}


  public function register() {
        if(!empty($_POST) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])&&!empty($_POST['password_2']) && (($_POST['password']==$_POST['password_2']))) {
            $regUser = strip_tags(htmlspecialchars($_POST['fullName']));
            $regLogin = strip_tags(htmlspecialchars($_POST['login']));
            $regEmail = strip_tags(htmlspecialchars($_POST['email']));
            $regPassword = md5(strip_tags($_POST['password']));
            $this->model->registerNewUser( $regLogin, $regPassword,$regUser,$regEmail);
            return true;
        } else {
            $this->pageData['registerMsg'] = "Вы заполнили не все поля";
            return false;
        }
    }
        


}
