<br />
<?php
  echo $this->Form->create('Login', array('action' => 'login'));

  echo $this->Form->input('username');
  echo "<br />";
  echo $this->Form->input('password');
  echo "<br />";

  echo $this->Form->end('Login');
  echo "<br />";

  $this->Html->link('Register', array('action' => 'register'));
?>
