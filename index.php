<?php

include('snews.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php title(); ?>
  </head>
<body>
	
	<?php bootstrap_menu(); ?>

	<div class="container theme-showcase" role="main">

		<div class="row">
		
	        <div class="col-xs-12"><?php breadcrumbs(); ?></div>
		
			<div class="col-sm-8 blog-main">
				<?php center(); ?>				
			</div>
			
		
			<div class="col-sm-4 single">
				
				<h3>New Posts</h3>
				<ul>
					<?php menu_articles(0, 3, 1); ?>
				</ul>
					
				<h3>RSS Feeds</h3>
				<ul>
					<?php rss_links(); ?>
				</ul>
				
				<h3>New Comments</h3>
				<ul>
					<?php new_comments(5, 30); ?>
				</ul>
					
				<?php extra(); ?>
					
			</div>
			
		</div>
		
		<footer class="footer">
			<p>&copy; 2016 Company, Inc. - This site is powered by <a href="http://snewscms.com/" title="sNews CMS" onclick="target='_blank';">sNews</a></p>
		</footer>
    </div>
	
	
	<!-- LOAD jQuery & Bootstrap -->
    <?php inc_Bootstrap(); ?>
  </body>
</html>