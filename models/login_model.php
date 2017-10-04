<?php // models/login_model.php
  class Login_Model extends Model {
    public function __construct() {
	  parent::__construct();
	}
	
	public function run() {
     $sth = $this->db->prepare("SELECT id, role FROM users WHERE login = :login AND password = MD5(:password)");
     $sth->execute(array(
       ':login' => $_POST['login'],
       ':password' => $_POST['password']
       ));
     $data = $sth->fetch();
     $count = $sth->rowCount();
     if($count > 0) {
       Session::init();
       Session::set('loggedIn', true);
	   Session::set('role', $data['role']);
       header('Location: '.URL.'dashboard');
     } else {
       header('Location: '.URL.'login'); 
     }
    }

  }

?>