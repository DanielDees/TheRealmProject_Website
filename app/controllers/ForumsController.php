<?php

namespace App\Controllers;
use App\Core\App;

class ForumsController {

	public function add_thread() {

		//Add any thread posts
		if (!empty($_POST["title"]) && !empty($_POST["content"])) {
			App::get('database')->insert('todo', [
					'title' => $_POST["title"],
					'content' => $_POST["content"]
				]);
		}

		redirect('forums');
	}

	public function delete_thread() {

		//Delete by title
		if (!empty($_POST["deleteTitle"])) {
			App::get('database')->delete('todo', 'title', $_POST["deleteTitle"]); 
		}
		//Delete by content 
		if (!empty($_POST["deleteContent"])) {
			App::get('database')->delete('todo', 'content', $_POST["deleteContent"]); 
		}
		//Delete by ID #
		if (!empty($_POST["deleteId"])) {
			App::get('database')->delete('todo', 'id', $_POST["deleteId"]);
		}

		redirect('forums');
	}
}