<?php
include("config.php");
if(isset($POST['start']))
{
$name=$_POST['nName'];
$gen=$_POST['gender'];
$dob=$_POST['doby'];
$nati=$_POST['national'];
$reg=$_POST['region'];

  $sql = "INSERT INTO users 
            (nName, gender, doby, national, region)
            VALUES ('$name', '$gen', '$dob', '$nati', '$reg')";

$result=mysqli_query($mysquli,$sql);
if($result){
echo "User register successfully, you can continue";
}
else{
echo "something wrong , data not stored";
}
}


?>
