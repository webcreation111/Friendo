<?php
include("config.php");
if(isset($POST['start']))
{
$name=$_POST['nName'];
$gen=$_POST['gender'];
$dob=$_POST['doby'];
$nati=$_POST['national'];
$reg=$_POST['region'];

$result=mysquli_query($mysquli, "insert into users value('', '$name', '$gen', '$dob', '$nati', '$reg')");
if($result){
echo "User register successfully, you can continue";
}
else{
echo "something wrong , data not stored";
}
}


?>
