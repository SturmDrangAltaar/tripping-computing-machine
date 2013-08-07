<div class="nationalities form">
<?php echo $this->Form->create('Nationality'); ?>
	<fieldset>
		<legend><?php echo __('Add Nationality'); ?></legend>
	<?php
		echo $this->Form->input('nationality');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Nationalities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Extras'), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
