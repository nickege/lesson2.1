<?php

require_once __DIR__ . '/../classes/DB.php';
require __DIR__ . '/../classes/Posts.php';

$db = new DB();

class News extends Posts
{

	public $table = 'news';

	public function getAll ()
	{
		return DB::select ($this->table);
	}

	public function addArticle ($data)
	{
		return DB::insert ($this->table, $data );
	}

	public function getArticle ($id)
	{
		return DB::select ($this->table, $id);
	}

	public function updateArticle ($id, $data)
	{
		return DB::update ($this->table, $id, $data);
	}

}
