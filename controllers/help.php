<?php // controllers/help.php
  class Help extends Controller {
   public function __construct() {
	parent::__construct();
   }
   
   public function index() {
	// echo "Мы в контроллере HELP";
   	$this->view->render('help/index');
   }
   public function other($arg = false) {
    echo "Мы в методе other контроллера Help";
    echo "Параметры: ".$arg;
	require 'models/help_model.php';
    $model = new Help_Model();

   }
  }
?>
