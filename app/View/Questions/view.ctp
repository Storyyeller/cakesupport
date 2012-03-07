<div id="question">
<h2><?php echo $question['Question']['title']; ?></h2>

Created: <?php echo $question['Question']['created']; ?> <br />
by: <?php echo $question['User']['username']; ?>
<br />
<?php echo $question['Question']['body']; ?>

<div style="text-align: right">
<?php 
  if($this->Session->read('User.id') == $question['User']['id']) {
    echo $this->Html->Link('Edit Post',
        array('action' => 'edit', $question['Question']['id']));
    echo $this->Html->Link('Delete Post',
        array('action' => 'remove', $question['Question']['id']));
  }
?>
</div>

</div>
