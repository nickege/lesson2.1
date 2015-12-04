<?php

require __DIR__ . '/../model/news.php';

if (!empty($_GET['id'])) {
	$id = (int) $_GET['id'];
	$article = News_getArticle ($id);
	$article = $article[0];
	include __DIR__ . '/../view/article.php';
} else {
	header ('Location: /lesson2.1/controller/news.php');
}


