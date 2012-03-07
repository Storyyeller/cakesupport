<h1>Questions</h1>

<?php echo $this->Html->link('Post a Question', array('action' => 'add')); ?>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Created</th>
</tr>

<?php foreach ($questions as $q): ?>
<tr>
<td><?php echo $q['Question']['id']; ?></td>
<td>
<?php echo $this->Html->link($q['Question']['title'],
    array('controller'  => 'questions', 'action' => 'view',
      $q['Question']['id'])); ?>
</td>
<td><?php echo $q['Question']['created']; ?></td>
</tr>
<?php endforeach; ?>
</table>

