<br />
<?php echo $this->Html->link('Post a Question', array('action' => 'add')); ?>

<table>
<tr>
<th>Poster</th>
<th>Title</th>
<th>Posted</th>
</tr>

<?php foreach ($questions as $q): ?>
<tr>
<td><?php echo $users[$q['Question']['poster']]['User']['username']; ?></td>
<td>
<?php echo $this->Html->link($q['Question']['title'],
    array('controller'  => 'questions', 'action' => 'view',
      $q['Question']['id'])); ?>
</td>
<td><?php echo $q['Question']['created']; ?></td>
</tr>
<?php endforeach; ?>
</table>

