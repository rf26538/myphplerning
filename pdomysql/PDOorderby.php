<style>
table{
		border-collapse: collapse;
	}
	table, td, th{
		border: 2px solid black;
	}
</style>
<?php
	include 'PDOconnDB.php';
	echo "<table>";
	echo "<tr><th>id</th><th>firstname</th><th>lastname</th><th>email</th><th>ref_date</th></tr>";
	
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
		function beginchildren()
		{
			echo "<tr>";
		}
		function endchildren()
		{
			echo "</tr>"."\n";
		}
	}
	try
	{
		//default assendind order for desendng use desc
		$stmt = $conn->prepare("SELECT id,firstname,lastname,email,reg_date FROM MyGuest ORDER BY lastname desc");
	
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