<br />
<?php
  echo "Already have an account? ";
  echo $this->Html->link('Login here!', array('action' => 'login'));
  echo "<br /><br />";

  echo $this->Form->create('User', array('action' => 'register'));

  echo $this->Form->input('username');
  echo $this->Form->input('password');
  echo $this->Form->input('email');
  echo $this->Form->input('first_name');
  echo $this->Form->input('last_name');

  echo $this->Form->end('Create Account');

?>

