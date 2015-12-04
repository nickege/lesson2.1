<?php

require __DIR__ . '/../model/news.php';

if (!empty($_POST)) {

	$data = array();

	if (!empty($_POST['title']) && !empty($_POST['body'])) {
		$data['title'] = $_POST['title'];
		$data['body'] = $_POST['body'];

		if (News_insert ($data)) {
			header ('Location: /lesson2.1/controller/news.php');
		};
	}

}

$news = News_getAll ();
include __DIR__ . '/../view/news.php';

