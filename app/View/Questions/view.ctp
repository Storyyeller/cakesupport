<div id="question">
<h2><?php echo $question['Question']['title']; ?></h2>

Created: <?php echo $question['Question']['created']; ?> <br />
by: <?php echo $question['User']['username']; ?> <br />
<br />
<?php echo $question['Question']['body']; ?>

<div style="text-align: right">
<?php 
  if($this->Session->read('User.id') == $question['User']['id']) {
    echo "<br />";
    echo $this->Html->Link('Edit Post',
        array('action' => 'edit', $question['Question']['id']));
    echo " | ";
    echo $this->Html->Link('Delete Post',
        array('action' => 'remove', $question['Question']['id']));
  }
?>
</div>
<?php
  echo $this->Form->create('Question', array('action' => 'comment'));
  echo $this->Form->input('id', array('type' => 'hidden'));
  echo $this->Form->input('body', array('class' => 'questioncomment');
  echo $this->Form->end('Add Comment');
?>
<br />
Comments:
<br />
<?php foreach ($question['Comment'] as $c) ?>

<?php endforeach; ?>

</div>
