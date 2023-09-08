<?php

$servername="localhost";
$username="root";
$password="";
$dbname="hospital";
$conn=new mysqli($servername,$username,$password,$dbname);
// if($conn->connect_error)
// {
// 	die("Connection failed:" .$conn->connect_error);
// }
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:" .$conn->connect_error);
}
if(isset($_POST['submit']))
{
$dname=$_POST['dname'];
$department=$_POST['department'];
$days=$_POST['days'];
$time=$_POST['time'];

$sql="INSERT INTO schedule (dname,department,days,time)VALUES ('$dname','$department','$days','$time');";
//$sql="INSERT INTO `schedule` (`dname`, `department`, `days`, `time`) VALUES ('$dname', '$department', '$days', '$time');"
if($conn->query($sql)==TRUE)
{	
?>
<script>
		alert("Successfully booked your scheduled");
</script>

<?php
}
else{
	?>
<script>
		alert("error");
</script>

<?php
}
}
header("refresh:0;url=PatientHome.html");
?>