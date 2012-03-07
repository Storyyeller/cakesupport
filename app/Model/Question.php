<?php
class Question extends AppModel {
  public $name = 'Question';

  public $validate = array(
    'title' => 'notEmpty',
    'body' => 'notEmpty'
  );
}
?>
