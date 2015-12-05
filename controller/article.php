<?php

require __DIR__ . '/../model/News.php';

$news = new News();

if (!empty($_GET['id'])) {
	$id = (int) $_GET['id'];
	$article = $news->getArticle ($id);
	$article = $article[0];
	
	if ($article) {
		include __DIR__ . '/../view/article.php';
	} else {
		header ('Location: /lesson2.1/controller/news.php');
	}
} else {
	header ('Location: /lesson2.1/controller/news.php');
}


