<?php
class UsersController extends AppController {
  public $name = 'Users';
  public $helpers = array('Form', 'Html');

  public function login() {
  }

  public function login_user() {
  }

  public function register() {
    if ($this->request->is('post')) {
      print_r($this->request->data);
      if ($this->User->save($this->request->data)) {
      }
    }
  }

}
?>
