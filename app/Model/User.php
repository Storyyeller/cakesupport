<?php
class User extends AppModel {
  public $name = 'User';

  public $hasMany = array(
    'UserAnswer' => array(
      'className' => 'Answer',
      'foreignKey' => 'user_id',
      'order' => 'UserAnswer.created DESC',
      'dependent' => true
    )
  );

  public $validate = array(
      'username' => array(
        'alphaNumeric' => array(
          'rule' => 'alphaNumeric',
          'required' => 'true',
          'message' => 'Alpha-Numeric characters only'
        ),
        'between' => array(
          'rule' => array('between', 6, 20),
          'required' => 'true',
          'message' => 'Between 6 and 20 characters long'
        ) 
      ),
      'password' => array(
        'rule' => array('minLength', '8'),
        'message' => 'Must be at least 8 characters long',
      ),
      'email' => array(
        'rule' => 'email',
        'message' => 'Must provide a valid email address'
      ),
      'first_name' => array(
        'rule' => 'notEmpty',
        'message' => 'Cannot be left blank'
      ),
      'last_name' => array(
        'rule' => 'notEmpty',
        'message' => 'Cannot be left blank'
      )
    );
}
?>
