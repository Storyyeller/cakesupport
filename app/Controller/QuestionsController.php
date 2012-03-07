<?php
class QuestionsController extends AppController {
  public $name = 'Questions';
  public $helpers = array('Html', 'Form');
  public $uses = array('Question', 'User');

  public function index() {
    $this->set('questions', $this->Question->find('all'));
  }

  public function view($id = null) {
    $this->Question->id = $id;
    $q = $this->Question->read();
    $cond = array('condition' => array('User.id' => $q['Question']['poster']));

    $this->set('question', $q);
    $this->set('user', $this->User->find('first', $cond));
  }

}
?>
