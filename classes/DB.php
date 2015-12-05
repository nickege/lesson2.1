<?php

class DB
{

	public  function __construct() {

		mysql_connect('localhost', 'root', '');
		mysql_selectdb('lessons_db');
	}

	static public function select($table = null, $id = null) {
		
		if (null == $table) {
			return false;
		}
		
		if ($id>0) {
			$condition = " WHERE id = " . $id;
		} else {
			$condition = " ORDER by time_create DESC";
		}
		
		$sql = "SELECT * FROM " . $table . $condition;
		$result = mysql_query($sql);

		if (!$result) {
			return false;
		}
		
		$data = array ();
	
		while (false !== $row = mysql_fetch_assoc($result)) {
			$data[] = $row;
		}

		return $data;
	}

	static public function update($table = null, $id = null, $row = array()) {
		
		if (null == $table || null == $id || empty($row)) {
			return false;
		}
			
		$data = array();
		
		foreach ($row as $key => $val) {
			$data[] = $key . '=' . $val;
		}
		
		$row_update = implode (',', $data);
		
		$sql = "UPDATE ' . $table . ' SET " . $row_update . " WHERE id = " . $id;
		
		return mysql_query($sql);
	}

	static public function insert($table = null, $row = array()) {
		
		if (null == $table|| empty($row)) {
			return false;
		}
		
		$columns = array();
		$values = array();
		
		foreach ($row as $key => $val) {
			$columns[] = $key;
			$values[] = "'". $val. "'";
		}
		
		$columns_update =  implode (',', $columns);
		$values_update =  implode (',', $values);
		
		$sql = "INSERT INTO " . $table . " (" . $columns_update . ") VALUES (" . $values_update . ")";
		
		return mysql_query($sql);
	}
}