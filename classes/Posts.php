<?php

abstract class Posts
{
	
	abstract public static function getAll();
	
	abstract public static function getArticle($id);
	
	abstract public static function updateArticle($id, $data);

	abstract public static function addArticle($data);

}