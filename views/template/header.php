<?php session_start(); ?>

<!DOCTYPE HTML>
<html><head>
<title>Главная</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="ru">
<meta name="description" content="">
<meta name="keywords" lang="ru" content="">
<meta name="title" lang="ru" content="">
<meta name="author" content="info@master702.ru">
<meta name="copyright" content="info@master702.ru">
<meta name="robots" content="all">

<link href="/css/bootstrap-flex.min.css" rel="stylesheet" >
   <!-- Custom styles for this template-->
    <link href="/css/admin/sb-admin.css" rel="stylesheet">

 <script src=""></script>   
<script src=""></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

  <!-- Custom scripts for all pages-->
    <script src="/js/admin/sb-admin.min.js"></script>
    <script src="/js/ajax.js"></script>
    <script src="/js/admin/app.js"></script>

    <link href="/css/font-awesome.min.css" type=text/css rel=stylesheet />
<link href="/css/style.css" type=text/css rel=stylesheet />
</head>

<body>
  <div class="container header ">
	<div class="row">
            <div class="col-md-3">
                <a  href="/" title="Компания &laquo;Мой мастер&raquo; &mdash; главная страница">
                    <img id="logo" src="/views/template/img/logo.png" alt="МойМастер"/>
                </a>
            </div>
            <div class="col-md-3 search-form">
                 <form class="navbar-form" role="search">
                    <div class="input-group" >
                        <input type="text" autocomplete="off" class="form-control" placeholder="Введите услугу или мастера" name="search" id="search-input">
                        <span class="input-group-btn">
                        <button class="btn" id="srchbtn" type="btn-default">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                    </div>
</form>
            </div>
            <div class="col-md-3 ">
                
               
           
 

            </div>
            <div class="col-md-3 login-form">
		<div class="div-login" >
                    <?php echo Controller::getAuth();?>
                </div>
            </div>
	</div>
         
  </div>
      
       
      <div class=" container wrapper">
          <div class="line"></div>  
            <div class="content ">

