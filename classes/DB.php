<?php

class DB
{

	public function __construct() {

		mysql_connect('localhost', 'root', '');
		mysql_selectdb('lessons_db');
	}

	public function select_one ($table = null, $id = null, $class = null) {
		if (null == $table && null == $id) {
			return false;
		}

		$sql = "SELECT * FROM " . $table . " WHERE id = " . $id . " LIMIT 1";
		$result = mysql_query($sql);
		$data = mysql_fetch_object($result, $class);

		return $data;

	}

	public function select($table = null, $class = null) {

		if (null == $table) {
			return false;
		}

		$sql = "SELECT * FROM " . $table . " ORDER by time_create DESC";
		$result = mysql_query($sql);

		if (!$result) {
			return false;
		}

		$data = array ();

		while (false !== $row = mysql_fetch_object($result, $class)) {
			$data[] = $row;
		}

		return $data;
	}

	public function update($table = null, $id = null, $row = array()) {

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

	public function insert($table = null, $row = array()) {

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