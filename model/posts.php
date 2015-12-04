<?php

require __DIR__ . '/../functions/sql.php';

function posts_getAll () {
	$sql = 'SELECT * FROM posts ORDER by time_create DESC';
	return sqlQuery ($sql); 
}

function posts_insert ($data)
{
	$sql = "INSERT INTO `posts` (title, body) VALUES ('" . $data['title'] . "', '" . $data['body'] . "')";
	sqlExec ($sql);
}

function posts_getArticle ($id) {
	$sql = 'SELECT * FROM posts WHERE id=' . $id . ' LIMIT 1';
	return sqlQuery ($sql);
}
