<?php 
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $id  = $_POST['email'];

 require_once('init.php');

 $sql = "SELECT FIRSTNAME,LASTNAME,PHONENO FROM user_info WHERE EMAILID='".$id."'";

 $r = mysqli_query($con,$sql);
 
 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array(
 "firstname"=>$res['FIRSTNAME'],
 "lastname"=>$res['LASTNAME'],
 "phone"=>$res['PHONENO']
)
 );
 //echo "success";
 echo json_encode(array("result"=>$result));
 
 mysqli_close($con);
 }
 ?>