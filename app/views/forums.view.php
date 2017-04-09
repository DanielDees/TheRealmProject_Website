<?php require 'partials/head.php'; ?>

<h1>Forum</h1>

<?php
	use App\Models\Forum_Post;
	Forum_Post::show($posts);
?>

<?php require 'partials/footer.php'; ?>