<?php require 'partials/head.php'; ?>

<h1>About Us</h1>

<?php foreach ($users as $user) : ?>

			<ul class = 'forum-post'>
				<li class = 'forum-post-id'><b>ID #</b><?= $user->id ?></li>
				<li class = 'forum-post-title'><b>Name: </b><?= $user->username ?></li>
			</ul>

<?php endforeach; ?>

<?php require 'partials/footer.php'; ?>