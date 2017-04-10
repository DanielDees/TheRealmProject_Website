<?php require "partials/head.php" ?>

<div id="content">
	
	<h1>Delete Thread</h1>

	<form method="POST" action="delete-thread">
		<label for="title">Delete By Title</label><br>
		<input type="text" id="title" name="title" placeholder="Thread Title..."><br>
		
		<label for="content">Delete By Content</label><br>
		<input type="text" id="content" name="content" placeholder="Thread Content..."><br>
		
		<label for="id">Delete By ID #</label><br>
		<input type="text" id="id" name="id" placeholder="Thread ID #..."><br>

		<input type="submit"><br>
	</form>
	
</div><!-- content -->

<?php require "partials/footer.php" ?>