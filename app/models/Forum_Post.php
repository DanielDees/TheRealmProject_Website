<?php

namespace App\Models;

class Forum_Post {

	public static function show($postsgiven) {

		//Get all comments and show on screen.
		foreach ($postsgiven as $thread) {
			echo "<ul class = 'forum-post'>
					<li class = 'forum-post-id'><b>Thread #</b>" . $thread->id . "</li>
					<li class = 'forum-post-title'><b>Title: </b>" . $thread->title . "</li>
					<li class = 'forum-post-content'>
						<p>" . nl2br($thread->content, 1) . "</p>
					</li>
				</ul>";
		};
	}
}