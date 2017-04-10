<?php require 'partials/head.php'; ?>

<div id="content">
	
	<h1>The Realm Project Home</h1>

	<form method="POST" action="add-user">
		
		<label for="username">Username</label><br>
		<input type="text" id="username" name="username" placeholder="Username..." required><br>

		<label for="password">Password</label><br>
		<input type="password" id="password" name="password" placeholder="Password..." required><br>
		
		<input type="submit"><br>
	</form>
	
</div><!-- content -->

<?php require 'partials/footer.php'; ?>