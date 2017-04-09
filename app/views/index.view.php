<?php require 'partials/head.php'; ?>

<h1>The Realm Project Home</h1>

<form method="POST" action="add-user" >
	
	<label for="username">Enter your name</label><br>
	<input type="text" id="username" name="username" placeholder="Username..."><br>
	
	<input type="submit"><br>
</form>

<?php require 'partials/footer.php'; ?>