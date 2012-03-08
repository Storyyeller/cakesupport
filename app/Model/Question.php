<?php
class Question extends AppModel {
  public $name = 'Question';

  public $belongsTo = array(
    'User' => array(
      'className' => 'User',
      'foreignKey' => 'user_id'
    )
  );

  public $hasMany = array(
    'QuestionAnswer' => array(
      'className' => 'Answer',
      'foreignKey' => 'question_id',
      'order' => 'QuestionAnswer.created DESC',
      'dependent' => true
    )
  );

  public $validate = array(
    'title' => 'notEmpty',
    'body' => 'notEmpty'
  );
}
?>
