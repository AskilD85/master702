<?php

class ProductsController extends Controller {

	private $pageTpl = '/views/products.tpl.php';


	public function __construct() {
		$this->model = new ProductsModel();
		$this->view = new View();
	}


	public function index() {

		if(!$_SESSION["user"]){
			header("Location: /");
		}
                
        $productsTable = $this->model->getAllProducts();
        $this->pageData["productsTable"] = $productsTable;
        
        $this->view->render($this->pageTpl, $this->pageData);//передаем все парааметры массиву pageData
	 
      
        
          if($_FILES) {//если загружаем файл
            if($_FILES['csv']['type'] != 'application/vnd.ms-excel' || $_FILES['csv']['type'] == '') {//проверяем формат
                $this->pageData['errors'] = "Ошибка! Возможно данный файл имеет некорректный формат";
            } else {
                
                if(move_uploaded_file($_FILES['csv']['tmp_name'],UPLOAD_DIR.$_FILES['csv']['name'])) {//перемещаем файл из временного каталога в наш указанный каталог
                    $file = fopen(UPLOAD_DIR.$_FILES['csv']['name'], "r");//открываем наш файл (r - только для чтения)
                    $row = 1;
                    while($data = fgetcsv($file, 200, ";")) {//проверяем строки макс.длины в 200 символов разделённые ;
                        if($row == 1) {
                            $row++;
                            continue;
                        } else {//если закончились записи - загружаем в базу данных
                            $this->model->addFromCSV($data);
                        }
                    }
                    fclose($file);//закрываем наш файл и выводим весь список товаров
                    $this->model->getAllProducts();
                }
            }
        }
        }
    public function getProduct(){
        
if(!$_SESSION['user']){
            header("Location: /");
            return;
        }

    if(!isset($_GET['id'])) {
            echo json_encode(array("success" => false));
        } else {
           $id= $_GET['id'];
           echo $id;
           $servicesTable = $this->model->getAllServices();
            $this->pageData["servicesTable"] = $servicesTable; 
        }
    
       
        
     }
        
            
            
}