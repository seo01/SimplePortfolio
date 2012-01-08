<?php if(isset($item)){$lightboxStyle="display:block";}else{$lightboxStyle="";}?>
<div id="overlay" class="overlay" onclick = "unloadLightBox()">
	<div id="light" class="white_content" style="<?php echo $lightboxStyle;?>">
		<?php echo $this->Html->link(
			$this->Html->image('close.png'), 
			array('controller' => 'Portfolio', 'action' => 'view', $portfolio['Portfolio']['webtitle']),
			array('onclick'=>'unloadLightBox();return false','id'=>"close",'escape'=>false)
		);?>
		<div id="box">
		<?php if(isset($item)):?>
			<div>
				<h2><?php echo $item['Item']['title'] ?></h2>
				<div>
					<?php echo $item['Item']['body'] ?>
				</div>
			</div>
		<?php else:?>
			<img id="spinner" src="/img/spinner.gif"/>
		<?php endif;?>
		</div>
		<hr/>
		<?php echo $this->Html->link(
			Configure::read('Portfolio.name')."'s ".$portfolio['Portfolio']['title'], 
			array('controller' => 'Portfolio', 'action' => 'view', $portfolio['Portfolio']['webtitle']),
			array('onclick'=>'unloadLightBox();return false','class'=>'unloada')
		);?>
	</div>
</div>
<div class="grid_12 buttons">
	<?php $first = true; foreach ($links as $link): ?>
		<?php if($first){$first = false;}else{echo '|';}?>
		 <a href="<?php echo $link['Link']['href'] ?>" title="<?php echo $link['Link']['title'] ?>">
			<?php echo $link['Link']['anchor'] ?>
		</a>
	<?php endforeach; ?>
</div>
<div class="clear"></div>
<div class="grid_12 intro">
<?php echo $portfolio['Portfolio']['intro'] ?>	
</div>
<div class="clear"></div>
<?php $count = 0; foreach ($portfolio['Item'] as $item): ?>
	<?php if (($count % 3) == 0){echo '<div class="clear"></div>';}$count++; ?>
	<div class="grid_4 item" onclick = "loadLightBox('<?php echo $item['webtitle'] ?>')">
		<h2>
			<?php echo $this->Html->link(
    			$item['title'], array('controller' => 'Item', 'action' => 'view', $item['webtitle']),
    			array('onclick'=>'itemClicked(this);return false','id'=>$item['webtitle'])
			);?>
		</h2>
		<p>
			<?php echo $item['snippet'] ?>
		</p>
	</div>
<?php endforeach; ?>