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
                            <a class="auth-link" id="auth-id" href="login">&nbsp;Войти</a>
                            </div>
                       <?php }
	}
        public static function getSearch($query) {
            
            if(!empty($_POST['search'])){
                $query =trim($_POST['search']);
                if(!$this->search()) {
                            $this->pageData['error'] = "Поиск не дал результатов";
                }else{
                    
                }
            }
    
        }
        

}
function search($query) 
{ 
    $query = trim($query); 
    $query = mysql_real_escape_string($query);
    $query = htmlspecialchars($query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else { 
            $q = "SELECT `page_id`, `title`, `desc`, `title_link`, `category`, `uniq_id`
                  FROM `table_name` WHERE `text` LIKE '%$query%'
                  OR `title` LIKE '%$query%' OR `meta_k` LIKE '%$query%'
                  OR `meta_d` LIKE '%$query%'";

            $result = mysql_query($q);

            if (mysql_affected_rows() > 0) { 
                $row = mysql_fetch_assoc($result); 
                $num = mysql_num_rows($result);

                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

                do {
                    // Делаем запрос, получающий ссылки на статьи
                    $q1 = "SELECT `link` FROM `table_name` WHERE `uniq_id` = '$row[page_id]'";
                    $result1 = mysql_query($q1);

                    if (mysql_affected_rows() > 0) {
                        $row1 = mysql_fetch_assoc($result1);
                    }

                    $text .= '<p><a> href="'.$row1['link'].'/'.$row['category'].'/'.$row['uniq_id'].'" title="'.$row['title_link'].'">'.$row['title'].'</a></p>
                    <p>'.$row['desc'].'</p>';

                } while ($row = mysql_fetch_assoc($result)); 
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        } 
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 
?>
