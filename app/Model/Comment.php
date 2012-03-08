<?php
class Comment extends AppModel {
  public $name = 'Comment';

  public $belongsTo = array(
    'Question' => array(
      'className' => 'Question',
      'foreignKey' => 'question_id'
    ),
    'User' => array(
      'className' => 'User',
      'foreignKey' => 'user_id'
    )
  );

  public $validate = array(
    'body' => 'notEmpty'
  );
}
?>
