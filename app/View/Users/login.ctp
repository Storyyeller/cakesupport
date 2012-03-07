<br />
<?php
  echo $this->Form->create('Login', array('action' => 'login'));

  echo $this->Form->input('username');
  echo "<br />";
  echo $this->Form->input('password');
  echo "<br />";

  echo $this->Form->end('Login');
  echo "<br />";

  echo $this->Html->link('Need to register?', array('action' => 'register'));
?>
