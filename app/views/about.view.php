<?php require 'partials/head.php'; ?>

<div id="content">
	
	<h1>About Us</h1>

	<?php foreach ($users as $user) : ?>

				<ul class = 'forum-post'>
					<li class = 'forum-post-id'><b>ID #</b><?= $user->id ?></li>
					<li class = 'forum-post-title'><b>Name: </b><?= $user->username ?></li>
					<li class="forum-post-content"><b>Pass: </b><?= $user->password ?></li>
				</ul>

	<?php endforeach; ?>
	
</div><!-- content -->

<?php require 'partials/footer.php'; ?>