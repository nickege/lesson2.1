<?php

require __DIR__ . '/../model/News.php';

if (!empty($_GET['id'])) {
	$id = (int) $_GET['id'];
	$article = News::getArticle ($id);
	
	if ($article) {
		include __DIR__ . '/../view/article.php';
	} else {
		header ('Location: /lesson2.1/controller/news.php');
	}
} else {
	header ('Location: /lesson2.1/controller/news.php');
}


