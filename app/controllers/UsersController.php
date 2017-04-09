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

		App::get('database')->insert('users', [ 
				'username' => $_POST['username'],
			]);

		redirect('about');
	}
}