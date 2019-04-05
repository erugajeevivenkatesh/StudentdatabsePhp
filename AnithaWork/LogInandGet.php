<?php 


$UserId= "venky";
$password = "heeloo";
$stream ="howareyou";
  require_once('init.php');
 //Creating sql query
// $sql = "SELECT * FROM sample WHERE USER_ID='$UserId'  ";
	$sql = "SELECT * FROM sample WHERE STREAM='$stream' AND USER_ID='$UserId'  ";

 $result= $con->query($sql);
 if($result->num_rows>0)
 {
	echo "results are apeared";
	retrivedata($UserId,$con);

 	 } 

 else{
 //displaying failure
 echo "403";
 }
 	mysqli_close($con);
 
 	function retrivedata($UserId,$con)
 	{

$sql = "SELECT USER_ID,STREAM,PASSWORD FROM sample WHERE USER_ID='venky' ";
 //executing query
 $res= $con->query($sql);
 
		 if($res->num_rows>0)
		{
			echo "data appead";

		 $res = mysqli_fetch_array($res,MYSQLI_ASSOC);
		 
		 $result = array();
		 
		 array_push($result,array(
		 "UserId"=>$res['USER_ID'],
		 "stream"=>$res['STREAM'],
		 "Pass"=>$res['PASSWORD']
		)
		 );

		 echo json_encode(array("result"=>$result));
		}

	}


 	
 ?>
