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

if(isset($_POST['submit']))
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$query="select user,pass from doctorlogin where user='$user' and pass='$pass'";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	if($count>0){
		header("refresh:0;url=DoctorHome.html");
	}
	else{
?> 
<script>
		alert("Invalid username or password");
</script>

<?php		
        header("refresh:0;url=Doctorlogin.html");
	}
}
?>
	
