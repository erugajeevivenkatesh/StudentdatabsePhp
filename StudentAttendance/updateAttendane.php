<?php
require_once('init.php');
global $con;

$Student_name='venky';
$student_rollNo='13b';
$msubject='English';
$stu_status='1';
$Standerd='fifth';

$sql="SELECT * FROM  $Standerd WHERE STUDENT_ROLLNO=$Student_name ";
$check = (mysqli_query($con,$sql));
if(isset($check))
{
  echo "echo studentnane";
    $variable =$msubject;
  switch ($variable) {
    case 'Telugu':
      updatestudentsubjectattendance($student_rollNo,$stu_status,$Standerd,$variable);
      break;
      case 'Hindi':
      updatestudentsubjectattendance($student_rollNo,$stu_status,$Standerd,$variable);
      break;
      case 'English':
        updatestudentsubjectattendance($student_rollNo,$stu_status,$Standerd,$variable);
      break;
      case 'maths':
          updatestudentsubjectattendance($student_rollNo,$stu_status,$Standerd,$variable);# code...
        break;
        case 'physics':
          updatestudentsubjectattendance($student_rollNo,$stu_status,$Standerd,$variable);
          break;
          case 'Socilal':
              updatestudentsubjectattendance($student_rollNo,$stu_status,$Standerd,$variable);
            break;
      default:
      echo 'no  student avilable';
      break;
}
}
else {
  echo "no studetd data avilable";
}

function   updatestudentsubjectattendance($student_rollNo,$stu_status,$Standerd,$msubject)
{
  global $con;
  echo $msubject.'<br>';
  echo $stu_status;
  $sql ="UPDATE $Standerd SET $msubject='$stu_status' WHERE STUDENT_ROLLNO='$student_rollNo' ";
  $check=mysqli_query($con,$sql);
  if(isset($check))
  {
    echo '1';
  }
  else {
    echo '99';
  }
}

 ?>
