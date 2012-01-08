<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/reset.css" />
	<link rel="stylesheet" href="/css/text.css" />
	<link rel="stylesheet" href="/css/960.css" />
	<link rel="stylesheet" href="/css/portfolio.css" />
	<script type="text/javascript" src="/js/prototype.js"></script>
	<script type="text/javascript" src="/js/portfolio.js"></script>
	<meta name="description" content="The personal site of <?php echo Configure::read('Portfolio.name');?>" />
	<title><?php echo Configure::read('Portfolio.name');?>'s <?php echo $title_for_layout?></title>
	<?php if(Configure::read('Portfolio.gaa')):?>
	<script type="text/javascript">
	var _portfolio_gaa = '<?php echo Configure::read('Portfolio.gaa');?>';
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', _portfolio_gaa]);
  _gaq.push(['_trackPageview',location.pathname + location.search + location.hash]);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
	<?php endif;?>
</head>
<body onload="checkFragment()">
	<div class="container_12">
		<div class="grid_12 header">
			<div class="grid_3 heading">
				<h1>
				<?php echo Configure::read('Portfolio.name');?>'s <br>
				<?php echo $title_for_layout?>
				</h1>
			</div>
  		</div>
		<div class="clear"></div>
		<?php echo $content_for_layout ?>
		<div class="clear"></div>
		<div class="grid_12 footer">
			&copy; <?php echo Configure::read('Portfolio.name');?> 2012
  		</div>
	</div>
</body>
</html>