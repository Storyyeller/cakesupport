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
    'QuestionComment' => array(
      'className' => 'Comment',
      'foreignKey' => 'question_id',
      'order' => 'Comment.created DESC',
      'dependent' => true
    )
  );

  public $validate = array(
    'title' => 'notEmpty',
    'body' => 'notEmpty'
  );
}
?>
