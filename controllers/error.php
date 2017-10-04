<?php // controllers/error.php
  class Error extends Controller {
   public function __construct() {
	parent::__construct();
   }
   
   public function index() {
	 echo "Контроллер обработки ошибок";
     $this->view->render('error/index');
     $this->view->msg = 'Страницы не существует!';
   }
	 
  };
?>
