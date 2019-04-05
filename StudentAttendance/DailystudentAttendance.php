<?php
//checking if the script received a post request or not


 require_once('init.php');

$mstudent_name='venky';
$mstudent_Rollno='13b';
$mSection='A';
$mstanderd='fifth';
$msubject;
 $name="hi heloo";


 if($name == '' )

			{echo 'please fill all values'; }
 else
		{
			require_once('init.php');
			$sql ="CREATE TABLE IF NOT EXISTS
			$mstanderd( ID INT(10) NOT NULL AUTO_INCREMENT,
			STUDENT_NAME VARCHAR(50) NOT NULL,
			STUDENT_ROLLNO VARCHAR(50) NOT NULL,
			SECTION VARCHAR(5) NOT NULL,
			Telugu VARCHAR(5)NOT NULL,
			Hindi VARCHAR(5)NOT NULL,
			English VARCHAR(5)NOT NULL,
			maths VARCHAR(5)NOT NULL,
			physics VARCHAR(5)NOT NULL,
			Social VARCHAR(5)NOT NULL,
			DATES VARCHAR(15) NOT NULL,
			PRIMARY KEY (ID));";

			/*

			CREATE TABLE `attendance`. ( `id` INT(15) NOT NULL AUTO_INCREMENT , `Title` VARCHAR(20) NOT NULL , `des` VARCHAR(50) NOT NULL , `price` VARCHAR(20) NOT NULL , `imageurl` VARCHAR(50) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`(15))) ENGINE = InnoDB;
			*/
			$check = (mysqli_query($con,$sql));

				if(isset($check)){

						insertingdata($mstanderd,$mSection,$mstudent_name,$mstudent_Rollno);

						//parentdata($mStudent_Name,$mstudent_Rollno,$mstanderd,$mSection,$mParent_Email,$mPhone_no);

					}
				else
					{// insertingdata();
						//parentdata($mStudent_Name,$mstudent_Rollno,$mstanderd,$mSection,$mParent_Email,$mPhone_no)
						echo "already crreated";
					}
		}
//}

//else{
//echo 'error';
///}
///////////////////////////////////////
 function insertingdata($mstanderd,$mSection,$mstudent_name,$mstudent_Rollno)
 {
	 global $con;


 $sql = "SELECT * FROM $mstanderd WHERE STUDENT_NAME='$mstudent_name' OR SECTION='$mSection'";


 $check = mysqli_fetch_array(mysqli_query($con,$sql));


 if(isset($check)){

	 $check=0;

 echo $check;
 }
 else{
   $pdate=date("j-n-Y");
 	$sql="INSERT INTO $mstanderd (STUDENT_NAME,STUDENT_ROLLNO,SECTION,Telugu,Hindi,English,maths,physics,Social,DATES)values ('$mstudent_name','$mstudent_Rollno','$mSection','0','0','0','0','0','0','$pdate')";
 if(mysqli_query($con,$sql)){

  $check=1;
 echo $check;
 }else{

 echo $check=99;
 }
 $pdate=date("j-n-Y");
 }

 mysqli_close($con);
 }
 ?>
