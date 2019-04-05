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
 require_once('ParentRegistration');
$mStudent_info="venky";
$mStudent_Name="heeloo";
$mstudent_Rollno="howareyou";
$mdate_ofBirth="hoea";
$mstanderd="jpdof";
$mSection="jppfojwep";
$mBlood_group="jpfpoe";
$mfatherName="oeojfp";
$mMotherName="jofoefjo";
$mFather_Email="ofojojfe";
$mMother_Email="ioiefoiw";
$mFather_phone="opfkoreo";
$mMother_phone="morfeoo";
$mGaurdian_Name="kopfek";
$mGaurdian_Email="ofkoeo";
$mGaurdinan_Phone="9855t789";
// $mGaurdinan_Phone=$_POST[''];

 $name="hi heloo";


 if($name == '' )
 
			{echo 'please fill all values'; }
 else
		{
			require_once('init.php');
			$sql ="CREATE TABLE IF NOT EXISTS
			Student_Info( ID INT(10) NOT NULL AUTO_INCREMENT,
			STUDENT_NAME VARCHAR(50) NOT NULL,
			STUDENT_ROLLNO VARCHAR(50) NOT NULL,
			DATE_OFBIRTH VARCHAR(50)NOT NULL,
			STANDERD VARCHAR(20) NOT NULL,
			SECTION VARCHAR(10) NOT NULL,
			BLOOD_GROUP VARCHAR(20)NOT NULL,
			FATHER_NAME VARCHAR(50)NOT NULL,
			MOTHER_NAME VARCHAR(50)NOT NULL,
			FATHER_EMAIL VARCHAR(50)NOT NULL,
			MOTHER_EMAIL VARCHAR(50)NOT NULL,
			FATHER_PHONE VARCHAR(15)NOT NULL,
			MOTHER_PHONE VARCHAR(15)NOT NULL,
			GAURDIAN_NAME VARCHAR(50)NOT NULL,
			GAURDIAN_EMAIL VARCHAR(50)NOT NULL,
			GAURDIAN_PHONE VARCHAR(50)NOT NULL,
			DATETIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (ID));";
			
			/*
			
			CREATE TABLE `attendance`. ( `id` INT(15) NOT NULL AUTO_INCREMENT , `Title` VARCHAR(20) NOT NULL , `des` VARCHAR(50) NOT NULL , `price` VARCHAR(20) NOT NULL , `imageurl` VARCHAR(50) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`(15))) ENGINE = InnoDB; 
			*/
			$check = (mysqli_query($con,$sql));
			
				if(isset($check)){
				
						insertingdata();
						//parentdata($mStudent_Name,$mstudent_Rollno,$mstanderd,$mSection,$mParent_Email,$mPhone_no);
					
					}
				else 
					{ insertingdata();
						//parentdata($mStudent_Name,$mstudent_Rollno,$mstanderd,$mSection,$mParent_Email,$mPhone_no)
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
	 global $mStudent_info,$mStudent_Name,
	 		$mstudent_Rollno,
	 		$mdate_ofBirth,
	 		$mstanderd,
	 		$mSection,
	 		$mBlood_group,
	 		$mfatherName,
			$mMotherName,
		$mFather_Email,
		$mMother_Email,
		$mFather_phone,
		$mMother_phone,
		$mGaurdian_Name,
		$mGaurdian_Email,
		$mGaurdinan_Phone,
		$con;
	
	 
 $sql = "SELECT * FROM Student_Info WHERE STUDENT_NAME='$mStudent_Name' OR SECTION='$mSection'";
 
 
 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 
 if(isset($check)){
	 $check=0;
 
 echo $check;
 }
 else{ 

 $sql = "INSERT INTO Student_Info (STUDENT_NAME, 
								STUDENT_ROLLNO,
								DATE_OFBIRTH,
								STANDERD,
								SECTION,
								BLOOD_GROUP,
								FATHER_NAME,
								MOTHER_NAME,
								FATHER_EMAIL,
								MOTHER_EMAIL,
								FATHER_PHONE,
								MOTHER_PHONE,
								GAURDIAN_NAME,
								GAURDIAN_EMAIL,
								GAURDIAN_PHONE) VALUES('$mStudent_Name','$mstudent_Rollno','$mdate_ofBirth','$mstanderd','$mSection','$mBlood_group','$mfatherName',
								'$mMotherName','$mFather_Email','$mMother_Email','$mFather_phone','$mMother_phone','$mGaurdian_Name','$mGaurdian_Email','$mGaurdinan_Phone')";
 
 
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