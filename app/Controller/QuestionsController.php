<?php
class QuestionsController extends AppController {
  public $name = 'Questions';
  public $helpers = array('Html', 'Form');
  public $uses = array('Question', 'User');

  public function index() {
    $this->set('questions', $this->Question->find('all',
      array('order' => 'id desc')));
    $this->set('users', $this->User->find('all'));
  }

  public function view($id = null) {
    $this->Question->id = $id;
    $q = $this->Question->read();
    $cond = array('condition' => array('User.id' => $q['Question']['poster']));

    $this->set('question', $q);
    $this->set('user', $this->User->find('first', $cond));
  }

  public function add() {
    if(!(CakeSession::read('User.username'))) {
      $this->Session->setFlash("You must be logged in to post a question");
      $this->redirect('/login');
    } else {
      if($this->request->is('post')) {
        print_r($this->request->data);
        $this->request->data['Question']['poster'] = $this->Session->read('User.uid');
        if($this->Question->save($this->request->data)) {
          $this->Session->setFlash('Your question has been added');
          $this->redirect('/');
        } else {
          $this->Session->setFlash('Could not add your question');
        }
      }
    }
  }

}
?>
