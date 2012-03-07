<h1>Add a Question</h1>

<?php

echo $this->Form->create('Question');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => 3));
echo $this->Form->end('Save Post');

?>
