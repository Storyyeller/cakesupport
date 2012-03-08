<?php
class AnswersController extends AppController {
  public $name = 'Answers';
  public $helpers = array('Html', 'Form', 'Session');
  public $uses = array('Question', 'User', 'Answer');

  public function post() {
    if(!$this->Session->read('uid')) {
      $this->setFlash('You must be registered to post an answer');
      $this->redirect('/login');
    }
    $this->request->data['Answer']['user_id'] = $this->Session->read('uid');
    if($this->Answer->save($this->request->data)) {
      $this->redirect('/questions'); 
    } else {
      $this->Session->setFlash('Could not save answer');
      $this->redirect(array('controller' => 'questions', 'action' => 'view', 
          $this->request->data['Answer']['question_id']); 
    }

  }
}

?>
