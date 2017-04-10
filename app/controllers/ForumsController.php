<?php

namespace App\Controllers;
use App\Core\App;

class ForumsController {

	public function add_thread() {

		//Add any thread posts
		if (!empty($_POST['title']) && !empty($_POST['content'])) {
			App::get('database')->insert('forum', [
					'title' => $_POST['title'],
					'content' => $_POST['content']
				]);
		}

		redirect('forums');
	}

	public function delete_thread() {

		//Delete by title
		if (!empty($_POST['title'])) {
			App::get('database')->delete('forum', 'title', $_POST['title']); 
		}
		//Delete by content 
		if (!empty($_POST['content'])) {
			App::get('database')->delete('forum', 'content', $_POST['content']); 
		}
		//Delete by ID #
		if (!empty($_POST['id'])) {
			App::get('database')->delete('forum', 'id', $_POST['id']);
		}

		redirect('forums');
	}
}