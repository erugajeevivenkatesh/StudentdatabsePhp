<?php



$UserId="venky";
$Password="heeloo";
$Stream="howareyou";
$TableName="UsedInfo";

if($UserId != '')
{
	require_once('init.php');
			$sql ="CREATE TABLE IF NOT EXISTS
			Sample(ID INT(10) NOT NULL AUTO_INCREMENT,
			USER_ID VARCHAR(50) NOT NULL,	
			PASSWORD VARCHAR(50) NOT NULL,
			STREAM VARCHAR(10) NOT NULL,
			DATETIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (ID));";	

			$check = (mysqli_query($con,$sql));
			if(isset($check))

				{

		
					insertdata($UserId,$Password,$Stream,$TableName);
				}
			else

			{
				insertdata($UserId,$Password,$Stream,$TableName);
			}


}
function insertdata($UserId,$pass,$stream,$TableName)
{

	global $con;
	$sql = "SELECT * FROM Sample WHERE USER_ID='$UserId'";
	$check=(mysqli_query($con,$sql));
	$res=mysqli_fetch_array($check,MYSQLI_ASSOC);
	
	if(!isset($res))
	{
		echo "hit";

		$sql = "INSERT INTO Sample (USER_ID, 	PASSWORD,STREAM) VALUES('$UserId','$pass','$stream');";
 
		if(mysqli_query($con,$sql))
		{
			echo "data Added Scuuecfully";
		}
		else{
			"something wrong";
		}
	}
	else
	{
		echo "data already created";
	}
	mysqli_close($con);
}

?>