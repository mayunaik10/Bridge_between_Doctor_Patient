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
if(isset($_POST['Register']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="INSERT INTO patientlogin(fname,lname,email,pass)VALUES('$fname','$lname','$email','$pass')";
if($conn->query($sql)===TRUE)
{	
?>
	
<?php
}
}
header("refresh:0;url=PatientHome.html");
?>