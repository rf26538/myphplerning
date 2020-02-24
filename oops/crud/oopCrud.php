<?php
	class oopCrud{
	private $servername = "localhost";
	private $username = "root";
	private $password = "123456";
	private $dbname = "PDOdb";
	private $conn;

	public function __construct($table){

		 $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname,$this->username,$this->password);
	}
	public function showdata($table){
	
		$sql = "SELECT * FROM myHt";
		$q = $this->conn->query($sql);
		while ($r = $q->fetch(PDO::FETCH_ASSOC)){
			$data[] = $r;
		}
		return $data;
	}
	public function getid($id,$table){

		$sql = "SELECT * FROM $table WHERE id = :id";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':id'=>$id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		return $data;
	}
	public function update($fullname,$class,$email,$rollnumber,$gender,$table){

		$sql = "UPDATE $table SET fullname=:fulname,class=:class,email=:email,rollnumber=:rollnumber,gender=:gender";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':id'=>$id,':fullname'=>$fulname,':class'=>$class,':email'=>$email,':rollnumber'=>$rollnumber,':gender'=>$gender));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		return true;
	}
	public function insertData($fullname,$class,$email,$rollnumber,$gender,$table){

		$sql = "INSERT INTO $table SET fullname=:fulname,class=:class,email=:email,rollnumber=:rollnumber,gender=:gender";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':id'=>$id,':fullname'=>$fulname,':class'=>$class,':email'=>$email,':rollnumber'=>$rollnumber,':gender'=>$gender));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		return true;
	}
	public function delete($id,$table){

		$sql = "DELETE FROM $table WHERE id=:id";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':id'=>$id));
		return true;
	}
}
?>