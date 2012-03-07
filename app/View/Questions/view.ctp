<div id="question">
<h2><?php echo $question['Question']['title']; ?></h2>

Created: <?php echo $question['Question']['created']; ?> <br />
by: <?php echo $question['User']['username']; ?>
<br />
<?php echo $question['Question']['body']; ?>

<div style="text-align: right">
<?php echo $this->Html->Link('Delete Post', array('action' => 'remove', $question['Question']['id'])); ?>
</div>

</div>
