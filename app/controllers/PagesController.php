<?php 

namespace App\Controllers;
use App\Core\App;

class PagesController {
	
	public function home() {
		
		$pageTitle = "Home";

		require view('index', ['pageTitle' => $pageTitle]);
	}
	
	public function forums() {

		$pageTitle = "Forums";

		//Get all thread posts
		$posts = App::get('database')->selectAll('todo');

		require view('forums', ['pageTitle' => $pageTitle]);
	}

	public function play() {

		$pageTitle = "Play The Realm Project";
		$cssFile = "game_page";

		require view('play', [
			'pageTitle' => $pageTitle,
			'cssFile' => $cssFile
		]);
	}

	public function add_thread_page() {

		$pageTitle = "Submit a new Thread";

		require view('add_thread', ['pageTitle' => $pageTitle]);
	}

	public function delete_thread_page() {

		$pageTitle = "Delete Thread";

		require view('delete_thread', ['pageTitle' => $pageTitle]);
	}
}