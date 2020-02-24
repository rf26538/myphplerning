<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 2px solid black;
}
</style>
<?php
	include("PDOconnDB.php");
	echo "<table>";

	echo "<tr><th>id</th><th>firstname></th><th>lastname</th><th>email</th><th>reg_date</th></tr>";

		class TableRows extends RecursiveIteratorIterator 
	{
		
		function __construct($it)
		{
			parent::__construct($it,self::LEAVES_ONLY);
		}

		function current()
		{
			return "<td style='width:200px;'>".parent::current()."</td>";
		}

		function beginChildren()
		{
			echo "<tr>";
		}

		function endChildren()
		{
			echo "</tr>"."\n";
		}
	}

	try
	{
		$stmt = $conn->prepare("SELECT id,firstname,lastname,email,reg_date FROM MyGuest WHERE lastname= 'raj'");
	
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

		foreach(new TableRows (new RecursiveArrayIterator($stmt->fetchAll())) as $k =>$v)  {
			echo $v;
		}
	}catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
	echo "</table>";
?>