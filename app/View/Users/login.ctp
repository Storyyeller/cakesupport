<br />
<?php echo $this->Form->create('Login', array('action' => 'login_user')); ?>
<?php echo $this->Form->input('username');?><br />
<?php echo $this->Form->input('password');?><br />
</table>

<?php echo $this->Form->end('Login'); ?>

