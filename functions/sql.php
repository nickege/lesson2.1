<?php

function sqlConnect () 
{
	mysql_connect('localhost', 'root', '');
	mysql_selectdb('lessons_db');
}

function sqlQuery ($sql) 
{
	sqlConnect ();
	$result = mysql_query($sql);
	$data = array ();
	while (false !== $row = mysql_fetch_assoc($result)) {
		$data[] = $row;
	}
	
	return $data;
}

function sqlExec($sql)
{
	sqlConnect ();
	return mysql_query($sql);
}