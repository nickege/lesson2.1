<?php

require __DIR__ . '/../functions/sql.php';

function News_getAll () {
	$sql = 'SELECT * FROM articles';
	return sqlQuery ($sql); 
}

function News_insert ($data)
{
	$sql = "INSERT INTO `articles` (title, body) VALUES ('" . $data['title'] . "', '" . $data['body'] . "')";
	sqlExec ($sql);
}

function News_getArticle ($id) {
	$sql = 'SELECT * FROM articles WHERE id=' . $id . ' LIMIT 1';
	return sqlQuery ($sql);
}
