<?php


class config{

	public $pdo ;
	$con = new mysqli("localhost", "root", "", "traino");
			
	public function db(){
		$this->pdo = new PDO('mysql:host=localhost;dbname=chat2;charset=utf8mb4','root','');
		return $this->pdo;
	}

}



?>