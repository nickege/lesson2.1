<?php

require __DIR__ . '/../model/News.php';

if (!empty($_POST)) {

	$data = array();

	if (!empty($_POST['title']) && !empty($_POST['body'])) {
		$data['title'] = $_POST['title'];
		$data['body'] = $_POST['body'];

		$news->addArticle ($data);

	}

}

header ('Location: /lesson2.1/controller/news.php');