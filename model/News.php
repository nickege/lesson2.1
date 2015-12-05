<?php

require_once __DIR__ . '/../classes/DB.php';
require __DIR__ . '/../classes/Posts.php';



class News extends Posts
{

	public $id;
	public $title;
	public $body;

	public static function getAll()
	{
		$db = new DB();
		return $db->select('news', 'News');
	}

	public static function getArticle($id)
	{
		$db = new DB();
		return $db->select_one('news', $id, 'News');
	}

	public static function updateArticle($id, $data)
	{
		$db = new DB();
		return $db->update('news', $id, $data);
	}

	public static function addArticle($data)
	{
		$db = new DB();
		return $db->insert('news', $data );
	}

}
