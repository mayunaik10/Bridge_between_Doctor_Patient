<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hospital";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:" .$conn->connect_error);
}
if(isset($_POST['book']))
{
$apid=$_POST['apid'];
$pname=$_POST['pname'];
$department=$_POST['department'];
$dname=$_POST['dname'];
$date=$_POST['date'];
$time=$_POST['time'];
$pemail=$_POST['pemail'];
$pno=$_POST['pno'];

$sql="INSERT INTO appointments(apid,pname,department,dname,date,time,pemail,pno)VALUES('$apid','$pname','$department','$dname','$date','$time','$pemail','$pno')";
if($conn->query($sql)===TRUE)
{	
?>
	<script>
		alert("Successfully booked your appointment");
</script>

<?php
}
}
header("refresh:0;url=PatientHome.html");
?>