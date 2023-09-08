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

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$query="select email,pass from patientlogin where email='$email' and pass='$pass'";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	if($count>0){
		header("refresh:0;url=PatientHome.html");
	}
	else{
?> 
<script>
		alert("Invalid email or password");
</script>

<?php		
        header("refresh:0;url=Patientlogin.html");
	}
}
?>
	
