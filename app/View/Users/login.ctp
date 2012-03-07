<br />
<?php
  echo $this->Html->link('Need to register?', array('action' => 'register'));
  echo "<br /><br />";

  echo $this->Form->create('Login', array('action' => 'login'));

  echo $this->Form->input('username');
  echo "<br />";
  echo $this->Form->input('password');
  echo "<br />";

  echo $this->Form->end('Login');
  echo "<br />";

?>
