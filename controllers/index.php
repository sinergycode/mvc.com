<?php // controllers/index.php
  class Index extends Controller {
   public function __construct() {
    parent::__construct();
   }

   public function index() {
     $this->view->render('index/index');
   }   
   
   public function details() { // поменял местами названия методов
     echo 'INSIDE INDEX INDEX';
   }
   
  }
?>
