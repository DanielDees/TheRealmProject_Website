<?php require "partials/head.php" ?>

<h1>Submit New Thread</h1>

<form method="POST" action="add-thread">

	<label for="title">Title</label><br>
	<input type="text" id="title" name="title" placeholder="Thread Title..." required><br>
	
	<label for="content">Content</label><br>
	<textarea id="content" name="content" placeholder="Content..." required></textarea><br>
	
	<input type="submit"><br>
</form>

<?php require "partials/footer.php" ?>