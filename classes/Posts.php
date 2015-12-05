<?php

abstract class Posts
{
	public $table;
	
	abstract public function getAll ();

	abstract public function addArticle ($data);

	abstract public function getArticle ($id);
	
	abstract public function updateArticle ($id, $data);
}