<div class="grid_12">
<div class="links form">
<?php echo $this->Form->create('Link');?>
	<fieldset>
		<legend><?php echo __('Add Link'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('href');
		echo $this->Form->input('anchor');
		echo $this->Form->input('sequence');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Links'), array('action' => 'index'));?></li>
	</ul>
</div>
</div>