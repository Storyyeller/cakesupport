<?php
class UsersController extends AppController {
  public $name = 'Users';
  public $helpers = array('Form', 'Html');

  public function login() {
    if ($this->request->is('post')) {
      $user = $this->User->findByUsername($this->request->data['User']['username']);
      $hash = hash("sha256", $this->request->data['User']['password'];
      if($user && $user['User']['password'] == $hash) {
        redirect('/');
      } else {
        $this->setFlash("Incorrect login attempt");
      }
    }
  }

  public function register() {
    if ($this->request->is('post')) {
      $this->request->data['User']['password'] = hash("sha256",
        $this->request->data['User']['password']);

      if ($this->User->save($this->request->data)) {
        $this->redirect('/');
      }
    }
  }

}
?>
