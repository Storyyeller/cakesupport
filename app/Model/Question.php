<?php
class Question extends AppModel {
  public $name = 'Question';
  public $belongsTo = array(
    'User' => array(
      'className' => 'user',
      'foreignKey' => 'poster'
    )
  );

  public $validate = array(
    'title' => 'notEmpty',
    'body' => 'notEmpty'
  );
}
?>
