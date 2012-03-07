<?php
class UsersController extends AppController {
  public $name = 'Users';
  public $helpers = array('Form', 'Html');

  public function login() {
    if ($this->request->is('post')) {
      #TODO: Login Validation
    }
  }

  public function register() {
    if ($this->request->is('post')) {
      if ($this->User->save($this->request->data)) {
        $this->redirect('/');
      }
    }
  }

}
?>
