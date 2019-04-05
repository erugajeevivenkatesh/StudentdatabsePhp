<?php
require_once('init.php');
echo date("j-n-Y").'<br>';
 
global $con;
parentdata('hi','hello','how','fine','good','god');
function parentdata($mStudent_Name,$mstudent_Rollno,$mstanderd,$mSection,$mParent_Email,$mPhone_no)
{
global $con;
 

// $mGaurdinan_Phone=$_POST[''];


 $name="hi heloo";




 if($name == '' )
 
			{echo 'please fill all values'; }
 else
		{
			require_once('init.php');
			$sql ="CREATE TABLE IF NOT EXISTS
			Parent_info( ID INT(10) NOT NULL AUTO_INCREMENT,
			Parent_Email VARCHAR(50) NOT NULL,
			Student_Name VARCHAR(50) NOT NULL,
			Student_rollno VARCHAR(50)NOT NULL,
			STANDERD VARCHAR(20) NOT NULL,
			SECTION VARCHAR(10) NOT NULL,
			Parent_phone VARCHAR(20) NOT NULL,
			DATETIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (ID));";
			
			/*
			
			CREATE TABLE `attendance`. ( `id` INT(15) NOT NULL AUTO_INCREMENT , `Title` VARCHAR(20) NOT NULL , `des` VARCHAR(50) NOT NULL , `price` VARCHAR(20) NOT NULL , `imageurl` VARCHAR(50) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`(15))) ENGINE = InnoDB; 
			*/
			$check = (mysqli_query($con,$sql));
			
				if(isset($check)){
				
						insertParentData($mStudent_Name,$mstudent_Rollno,$mstanderd,$mSection,$mParent_Email,$mPhone_no);
					
					}
				else 
					{ insertParentData($mStudent_Name,$mstudent_Rollno,$mstanderd,$mSection,$mParent_Email,$mPhone_no);
						//echo "already crreated";
					}
		}
}

//else{
//echo 'error';
///}
///////////////////////////////////////
 function insertParentData($mStudent_Name,$mstudent_Rollno,$mstanderd,$mSection,$mParent_Email,$mPhone_no)
 {
		global $con;
	
	 
 $sql = "SELECT * FROM Parent_info WHERE Parent_Email='$mParent_Email' OR Parent_phone='$mPhone_no'";
 
 
 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 
 if(isset($check)){
	 $check=0;
 
 echo $check;
 }
 else{ 

 $sql = "INSERT INTO Parent_info (Parent_Email,
 									Student_Name,Student_rollno,STANDERD,SECTION,Parent_phone) VALUES('$mParent_Email','$mStudent_Name','$mstudent_Rollno','$mstanderd','$mSection'
 									,'$mPhone_no')";
 
 
 if(mysqli_query($con,$sql)){
 
  $check=1;
 echo $check;
 }else{

 echo $check=99;
 }
 }
 
 mysqli_close($con);
 }
 ?>