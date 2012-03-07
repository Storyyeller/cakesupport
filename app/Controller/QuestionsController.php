<?php
class QuestionsController extends AppController {
  public $name = 'Questions';
  public $helpers = array('Html', 'Form');
  public $uses = array('Question', 'User');

  public function index() {
    $this->set('questions', $this->Question->find('all',
      array('order' => 'Question.id desc')));
  }

  public function view($id = null) {
    $this->Question->id = $id;
    $this->set('question', $this->Question->read());
  }

  public function remove($id = null) {
    $this->Question->id = $id;
    $q = $this->Question->read();
    if($q) {
      if($q['User']['id'] != $this->Session->read('User.id')) {
        $this->Session->setFlash('This post does not belong to you');
        $this->redirect(array('action' => 'view');
      } else {
        $this->Session->setFlash('Post deleted');
        $this->redirect('/');
      }
    } else {
      $this->Session->setFlash('No such question exists');
        $this->redirect('/');
    }
  }

  public function add() {
    if(!(CakeSession::read('User.username'))) {
      $this->Session->setFlash("You must be logged in to post a question");
      $this->redirect('/login');
    } else {
      if($this->request->is('post')) {
        print_r($this->request->data);
        $this->request->data['Question']['poster'] = $this->Session->read('User.id');
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
