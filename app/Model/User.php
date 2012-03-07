<?php
class User extends AppModel {
  public $name = 'User';

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
      'email' => 'email',
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
