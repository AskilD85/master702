<?php
session_start();
//определяем константы
define("ROOT", dirname(__DIR__));
define("CONTROLLER_PATH", ROOT."/controllers/");
define("MODEL_PATH", ROOT."/models/");
define("VIEW_PATH", ROOT."/views/");
define("UPLOAD_DIR", ROOT. "/uploads/");


require_once "db.php";//база данных подключение]
require_once("route.php"); //роуты подключаем

require_once MODEL_PATH.'model.php';
require_once VIEW_PATH. 'View.php';
require_once CONTROLLER_PATH. 'Controller.php';


Routing::buildRoute();