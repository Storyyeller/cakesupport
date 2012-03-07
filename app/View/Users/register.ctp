<br />
<?php echo $this->Form->create('User', array('action' => 'register')); ?>
<?php echo $this->Form->input('username');?><br />
<?php echo $this->Form->input('password');?><br />
<?php echo $this->Form->input('email');?><br />
<?php echo $this->Form->input('first_name');?><br />
<?php echo $this->Form->input('last_name');?><br />
</table>

<?php echo $this->Form->end('Create Account'); ?>

