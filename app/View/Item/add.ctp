<div class="grid_12">
<div class="items form">
<?php echo $this->Form->create('Item');?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('webtitle');
		echo $this->Form->input('snippet');
		echo $this->Form->input('body');
		echo $this->Form->input('sequence');
		echo $this->Form->input('portfolio_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index'));?></li>
	</ul>
</div>
</div>