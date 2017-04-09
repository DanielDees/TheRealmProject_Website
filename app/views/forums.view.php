<?php require 'partials/head.php'; ?>
	
	<div id="sidebar">

		<ul>
			<li><a href="add-thread">Submit Thread</a></li>
			<li><a href="delete-thread">Delete Thread</a></li>
		</ul>

	</div><!-- sidebar -->

	<div id="content">
		
		<h1>Forum</h1>

		<?php
			use App\Models\Forum_Post;
			Forum_Post::show($posts);
		?>
		
	</div><!-- content -->

<?php require 'partials/footer.php'; ?>