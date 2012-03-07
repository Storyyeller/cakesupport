<?php
class Question extends AppModel {
  public $name = 'Question';

  public $belongsTo = array(
    'User' => array(
      'className' => 'User',
      'foreignKey' => 'user_id'
    )
  );

  public $validate = array(
    'title' => 'notEmpty',
    'body' => 'notEmpty'
  );
}
?>
