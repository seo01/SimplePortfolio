<div class="grid_12">
<div class="portfolios form">
<?php echo $this->Form->create('Portfolio');?>
	<fieldset>
		<legend><?php echo __('Add Portfolio'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('webtitle');
		echo $this->Form->input('description');
		echo $this->Form->input('intro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Portfolios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
