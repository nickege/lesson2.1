<?php

require __DIR__ . '/../model/posts.php';

if (!empty($_POST)) {

	$data = array();

	if (!empty($_POST['title']) && !empty($_POST['body'])) {
		$data['title'] = $_POST['title'];
		$data['body'] = $_POST['body'];

		if (posts_insert ($data)) {
			header ('Location: /lesson2.1/controller/posts.php');
		};
	}

}

$posts = posts_getAll ();
include __DIR__ . '/../view/posts.php';

