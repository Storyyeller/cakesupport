<?php
class AnswersController extends AppController {
  public $name = 'Answers';
  public $helpers = array('Html', 'Form');
  public $uses = array('Question', 'User', 'Answer');

  public function post() {
    print_r($this->request->data);
  }
}

?>
