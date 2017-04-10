<?php

namespace App\Controllers;
use App\Core\App;

class UsersController {
	
	public function index() {

		$pageTitle = "About";

		$users = App::get('database')->selectAll('users');

		require view('about', compact($pageTitle, $users));
	}

	public function store() {

		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			App::get('database')->insert('users', [ 
					'username' => $_POST['username'],
					'password' => password_hash(
								$_POST['password'], 
								PASSWORD_DEFAULT
							)
				]);			
		}

		redirect('about');
	}
}