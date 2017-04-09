<?php

class QueryBuilder {

	protected $pdo;

	//Constructor
	function __construct($pdo) {
		$this->pdo = $pdo;
	}

	//Returns all info in a table
	public function selectAll($table) {

		$sql = "SELECT * FROM {$table}";

		try {
			$cmd = $this->pdo->prepare($sql);
			$cmd->execute();
		} 
		catch (Exception $e) {
			die("Couldn't find table information from the database!");
		}

		return $cmd->fetchAll(PDO::FETCH_CLASS);
	}

	//Adds row with specified info to table
	public function insert($table, $parameters) {

		$sql = sprintf(
				'INSERT INTO %s (%s) VALUES (%s)',
				$table, 
				implode(', ', array_keys($parameters)),
				':' . implode(', :', array_keys($parameters))
			);

		try {
			$cmd = $this->pdo->prepare($sql);
			$cmd->execute($parameters);
		} 
		catch (Exception $e) {
			die("Whoops! Something went wrong with this submission!");
		}
	}

	//Deletes row with specified info from table
	public function delete($table, $col, $info) {

		$sql = "DELETE FROM {$table} WHERE {$col} = ?";

		try {
			$cmd = $this->pdo->prepare($sql);
			$cmd->execute([$info]);
		}
		catch (Exception $e) {
			die("Whoops! Something went wrong with deleting this item!");
		}
	}
}