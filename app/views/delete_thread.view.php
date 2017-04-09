<?php require "partials/head.php" ?>

<div id="content">
	
	<h1>Delete Thread</h1>

	<form method="POST" action="delete-thread">
		<label for="deleteTitle">Delete By Title</label><br>
		<input type="text" id="deleteTitle" name="deleteTitle" placeholder="Thread Title..."><br>
		
		<label for="deleteContent">Delete By Content</label><br>
		<input type="text" id="deleteContent" name="deleteContent" placeholder="Thread Content..."><br>
		
		<label for="deleteId">Delete By ID #</label><br>
		<input type="text" id="deleteId" name="deleteId" placeholder="Thread ID #..."><br>

		<input type="submit"><br>
	</form>
	
</div><!-- content -->

<?php require "partials/footer.php" ?>