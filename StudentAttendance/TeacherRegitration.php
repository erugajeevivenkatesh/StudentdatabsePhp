<?php
//checking if the script received a post request or not 


//if($_SERVER['REQUEST_METHOD']=='POST'){
 
 // //Getting post data 
 // $name = $_POST['name'];
 // $lastname = $_POST['lastname'];
 // $email = $_POST['email'];
 // $Phone=$_POST['phone'];
 // $passwordd = $_POST['password'];
 // $
// $mStudent_info=$_POST[''];
// $mStudent_Name=$_POST[''];
// $mdate_ofBirth=$_POST[''];
// $mstanderd=$_POST[''];
// $mSection=$_POST[''];
// $mBlood_group=$_POST[''];
// $mfatherName=$_POST[''];
// $mMotherName=$_POST[''];
// $mFather_Email=$_POST[''];
// $mMother_Email=$_POST[''];
// $mFather_phone=$_POST[''];
// $mMother_phone=$_POST[''];
// $mGaurdian_Name=$_POST[''];
// $mGaurdian_Email=$_POST[''];
// $mGaurdinan_Phone=$_POST[''];
 require_once('init.php');
// $mGaurdinan_Phone=$_POST[''];
 $mTeacher_name="hoe";
 $mTeacher_phone="hoesa";
 $mteacher_email="";
 $msubjects="";
 $mclassApponted="";

 $name="hi heloo";


 if($name == '' )
 
			{echo 'please fill all values'; }
 else
		{
			require_once('init.php');
			$sql ="CREATE TABLE IF NOT EXISTS
			Teacher_info( ID INT(10) NOT NULL AUTO_INCREMENT,
			TEACHER_NAME VARCHAR(50) NOT NULL,
			TEACHER_PHONE VARCHAR(50) NOT NULL,
			TEACHER_EMAIL VARCHAR(50)NOT NULL,
			CLASS_APPOINTED VARCHAR(20) NOT NULL,
			SUBJECTS VARCHAR(10) NOT NULL,
			DATETIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (ID));";
			
			/*
			
			CREATE TABLE `attendance`. ( `id` INT(15) NOT NULL AUTO_INCREMENT , `Title` VARCHAR(20) NOT NULL , `des` VARCHAR(50) NOT NULL , `price` VARCHAR(20) NOT NULL , `imageurl` VARCHAR(50) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`(15))) ENGINE = InnoDB; 
			*/
			$check = (mysqli_query($con,$sql));
			
				if(isset($check)){
				
						insertingdata();
					
					}
				else 
					{ insertingdata();
						//echo "already crreated";
					}
		}
//}

//else{
//echo 'error';
///}
///////////////////////////////////////
 function insertingdata()
 {
	 global $mTeacher_name,
 $mTeacher_phone,
 $mteacher_email,
 $msubjects,
 $mclassApponted,
		$con;
	
	 
 $sql = "SELECT * FROM Teacher_info WHERE TEACHER_NAME='$mTeacher_name' OR TEACHER_PHONE='$mTeacher_phone'";
 
 
 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 
 if(isset($check)){
	 $check=0;
 
 echo $check;
 }
 else{ 

 $sql = "INSERT INTO Teacher_info (TEACHER_NAME, 
								TEACHER_PHONE,
								TEACHER_EMAIL,
								CLASS_APPOINTED,
								SUBJECTS) VALUES('$mTeacher_name','$mTeacher_phone','$mteacher_email','$mclassApponted','$msubjects')";
 
 
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