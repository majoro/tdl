<?php
	class connect3
	{
	 public function conDb($orderName,$orderDate,$totAmount)
		{	
			
			
			$db = new mysqli('localhost','thabo_tshego','genetics','cellphone');
			if(mysqli_connect_errno())
			{
				echo 'ERROR: Couldnt connect to database';
				exit;
			}
			
			$query = "INSERT INTO tblCategory values ('".$orderName"','".$orderDate."','".$totAmount."')";
			
			$results = $db->query($query);
			if(!$results)
			{
				echo 'An error has occured registration unsuccessful';
				exit;
			}
			
			 $db->affected_rows.'data insersed correctly';
			$db->close();
		
		}
	
	
	
	}

?>