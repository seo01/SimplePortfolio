<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<?php foreach ($portfolios as $portfolio): ?>

	<url>
    	<loc>/<?php echo $portfolio['Portfolio']['webtitle']; ?></loc>
    	<lastmod><?php echo $portfolio['Portfolio']['modified']; ?></lastmod>
    	<changefreq>monthly</changefreq>
   	</url>
	<?php endforeach; ?>
	<?php foreach ($items as $item): ?>

	<url>
  		<loc>/i/<?php echo $item['Item']['webtitle']; ?></loc>
   		<lastmod><?php echo $item['Item']['modified']; ?></lastmod>
   		<changefreq>monthly</changefreq>
	</url>
	<?php endforeach; ?>
</urlset> 
