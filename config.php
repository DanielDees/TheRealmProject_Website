<?php

return [
	'database' => [
		'name' => 'testDatabaseDees',
		'username' => 'root',
		'password' => 'deesasdf',
		'connection' => 'mysql:host=127.0.0.1',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];